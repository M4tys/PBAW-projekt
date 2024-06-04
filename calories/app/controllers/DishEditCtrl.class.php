<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use app\forms\DishEditForm;

class DishEditCtrl {
    private $form;
    private $validator;
    private $user;

    public function __construct() {
        $this->form = new DishEditForm();
        $this->validator = new Validator();
        $this->user = SessionUtils::load('user',true);
    }

    public function validateEdit(){
        $this->form->idDish = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function validateSave(){
        $this->form->idDish = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');

        $this->form->dish_name = $this->validator->validateFromRequest('dish_name',[
            'required' => true,
            'required_message' => 'Nie podano nazwy dania',
        ]);

        try{
            $record = App::getDB()->get('dish','*',[
                'idDish' => $this->form->idDish,
                'idUser' => $this->user['idUser']
            ]);
            $count = 0;

            if($record){
                if($record['dishName'] != $this->form->dish_name){
                    $count = App::getDB()->count("dish", [
                        'dishName' => $this->form->dish_name,
                        'idUser' => $this->user['idUser']
                    ]);
                }
            } else {
                $count = App::getDB()->count("dish", [
                    'dishName' => $this->form->dish_name,
                    'idUser' => $this->user['idUser']
                ]);
            }

            if($count > 0){
                Utils::addErrorMessage('Posiadasz już danie o takiej nazwie');
            }

        } catch(\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        return !App::getMessages()->isError();
    }

    public function action_dish_new() {
        $this->generateView();
    }

    public function action_dish_edit() {
        if($this->validateEdit()){
            try{

                $this->form->dish_name = App::getDB()->get('dish','dishName',['idDish' => $this->form->idDish]);

            } catch(\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            }
        }
        $this->generateView();
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('dish_edit.tpl');
    }

    public function action_dish_save(){
        if($this->validateSave()){

            try{

                if($this->form->idDish == ''){
                    App::getDB()->insert('dish', [
                        'DishName' => $this->form->dish_name,
                        'idUser' => $this->user['idUser']
                    ]);

                    $this->form->idDish = App::getDB()->get('dish','idDish',[
                        'DishName' => $this->form->dish_name,
                        'idUser' => $this->user['idUser']
                    ]);

                    App::getRouter()->redirectTo('dish_product_list/'.$this->form->idDish);
                } else {

                    App::getDB()->update('dish',[
                        'dishName' => $this->form->dish_name,
                    ], [
                        'idDish' => $this->form->idDish
                    ]);

                    App::getRouter()->redirectTo('dish_product_list/'.$this->form->idDish);
                }

            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            }
        } else {
            $this->generateView();
        }

    }

    public function action_dish_delete(){

        if($this->validateEdit()){
            try{
                App::getDB()->delete('dishproducts', [
                    'idDish' => $this->form->idDish
                ]);

                App::getDB()->delete('dish', [
                    'idDish' => $this->form->idDish
                ]);
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            }
        }

        App::getRouter()->redirectTo('dish_list');

    }


    

}