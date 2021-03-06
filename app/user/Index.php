<?php
namespace user;

use Common_User;
use Page;
use View\Value;
use System;

class Index
{
    public function main()
    {
        if (System::user()->hasSignin) {
            Page::set('admin_site',System::user()->permission->editSite);
            self::setvalues();
            Page::use('user/index');
        } else {
             Page::redirect('/user/SignIn');
        }
    }
    
    public function setvalues()
    {
        Page::global('_Op', new \Site_Options);
        Page::set('user_info',System::user());
    }

}
