<?php

namespace app\controllers;

use core\App;

class HomeCtrl {
    public function action_home_view(){
        App::getSmarty()->display('main.tpl');
    }
}

