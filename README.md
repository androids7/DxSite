![DxSite](docs/dxsite.png)

网站功能主要分四大功能：    
- [ ] Blog      
    基本功能：在线Markdown博客
- [ ] Community     
    基本功能：在线Markdown社区
- [ ] Online Judge      
    扩展功能：在线测评（后续考虑添加）
- [ ] Video Online Play     
    扩展功能：视频在线播放

## 辅助系统 

### XCore

- [x] View 模板引擎
- [x] Qurey 数据库引擎
- [x] Storage 文件引擎
- [x] Session 辅助
- [x] Cookie 辅助
- [x] Cache 缓存引擎
- [x] WebSocket 辅助
- [ ] Socket 辅助
- [x] Database 辅助
- [ ] Mail 邮件引擎
    - [x] sendmail 辅助引擎
    - [ ] STMP 邮件辅助引擎
- [ ] Debug工具
- [ ] Cmd命令工具
- [ ] 扩展库
    - [x] 验证码生成器
    - [ ] Markdown编写工具

### js

- [ ] Dxui UI库
- [ ] DxDOM DOM操纵辅助

## TODO

- [x] v1.0 
    - [x] 用户功能 - 注册/登陆/注销/删除
    - [x] 后台管理 - 用户管理
    - [x] 后台管理 - 网站管理
- [x] v1.0.1 
    - [x] 文章功能 - 上传zip文章 
    - [x] 通过分类查看文章
    - [x] 通过标签查看文章   
    - [x] 后台管理 - 文章管理
    - [x] 文章审核
- [ ] v1.0.2
    - [ ] 个人信息修改
    - [ ] 文章搜索
    - [ ] 文章回收站
    - [ ] 分类管理
    - [ ] 标签管理

## 使用说明

```bash
git clone https://github.com/DXkite/DxSite .
cp .conf.simple res/.conf
vim res/.conf #修改成你要的配置
php tools/Install.php
```
### 注意

- .conf.semple 为配置文件模板,配置好后改名为 .conf 放到 /res 目录下   
- res 目录要保证服务器可读写     

## License

DxCore is licensed under the [MIT License](http://opensource.org/licenses/MIT).