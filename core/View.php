<?php
class View
{
    private static $compiler=null;
    private static $values=[];
    private static $use=null;

    public static function loadCompile()
    {
        if (is_null(self::$compiler)) {
            $compiler='View_Compiler_'. conf('Driver.View', 'Pomelo');
            self::$compiler=new $compiler;
        }
    }
    
    public static function set(string $name, $value)
    {
        self::$values[$name]=$value;
    }

    public static function theme(string $theme=null)
    {
        if (is_null($theme)) {
            return self::$compiler->getTheme();
        }
        self::$compiler->setTheme($theme);
    }

    public static function use(string $page)
    {
        self::$use=$page;
    }

    public static function assign(array $values)
    {
        self::$values=array_merge(self::$values, $values);
    }

    public static function render(string $page, array $values=[])
    {
        // 合并数据
        self::assign($values);
        // 分解变量
        extract(self::$values, EXTR_OVERWRITE);
        // 内部可设置界面
        $page=is_null(self::$use)?$page:self::$use;
        // 获取界面路径
        $file=self::$compiler->getViewPath($page);
        if (Storage::exist($file)) {
            require_once $file;
        } else {
            trigger_error($page.' TPL no Find!');
        }
    }

    public static function compile($input)
    {
        return self::$compiler->compileFile($input);
    }
}
