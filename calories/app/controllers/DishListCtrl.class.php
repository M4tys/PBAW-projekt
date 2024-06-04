<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;


class DishListCtrl {
    private $records;
    private $user;


    public function __construct() {
        $this->user = SessionUtils::load('user',true);
    }

    public function action_dish_list(){

        try {

            $this->records = App::getDB()->select("dish", "*", [
                "idUser" => $this->user['idUser']
            ]);

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        $this->generateView();
    }


    public function generateView() {
        $count = 0;

        try {
            $count = App::getDB()->count("dish",["idUser" => $this->user['idUser']]);
        } catch (\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        App::getSmarty()->assign('count',$count);
        App::getSmarty()->assign('dishes',$this->records);
        App::getSmarty()->display('dish_list.tpl');
    }
}

