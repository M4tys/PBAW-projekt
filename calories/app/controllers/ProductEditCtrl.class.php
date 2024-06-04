<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ProductEditForm;

class ProductEditCtrl {

    private $form;
    private $validator;

    public function __construct() {
        $this->form = new ProductEditForm();
        $this->validator = new Validator();
    }

    public function validateSave() {
        
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');

        $this->form->product_name = $this->validator->validateFromRequest('product_name', [
            'required' => true,
            'required_message' => 'Nie podano nazwy produktu',
        ]);


        $this->form->carbohydrates = $this->validator->validateFromRequest('carbohydrates', [
            'required' => true,
            'required_message' => 'Nie podano ilości węglowodanów',
            'numeric' => true,
            'validator_message' => 'Podana wartość nie jest liczbą',
        ]);

        $this->form->proteins = $this->validator->validateFromRequest('proteins', [
            'required' => true,
            'required_message' => 'Nie podano ilości białka',
            'numeric' => true,
            'validator_message' => 'Podana wartość nie jest liczbą',
        ]);

        $this->form->fats = $this->validator->validateFromRequest('fats', [
            'required' => true,
            'required_message' => 'Nie podano ilości tłuszczu',
            'float' => true,
            'validator_message' => 'Podana wartość nie jest liczbą'
        ]);

        if(App::getMessages()->isError()) return false;

        try{
            $record = App::getDB()->get('product','*',[
                'idProduct' => $this->form->id
            ]);
            $count = 0;

            if($record){
                if($record['productName'] != $this->form->product_name){
                    $count = App::getDB()->count("product", [
                        'productName' => $this->form->product_name,
                    ]);
                }
            } else {
                $count = App::getDB()->count("product", [
                    'productName' => $this->form->product_name,
                ]);
            }

            if($count > 0){
                Utils::addErrorMessage('Istnieje już produkt o podanej nazwie');
            }
        } catch (\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit(){
        $this->form->id = ParamUtils::getFromCleanURL(1,true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_product_new(){
        $this->generateView();
    }

    public function action_product_edit(){

        if($this->validateEdit()){
            try{

                $record = App::getDB()->get('product',"*",[
                    'idProduct' => $this->form->id
                ]);

                $this->form->id = $record['idProduct'];
                $this->form->product_name = $record['productName'];
                $this->form->carbohydrates = $record['carbohydrates'];
                $this->form->proteins = $record['proteins'];
                $this->form->fats = $record['fats'];
            } catch(\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            }
        }
        $this->generateView();
    }

    public function action_product_delete(){
        if($this->validateEdit()){
            try{

                App::getDB()->delete('dishproducts', [
                    'idProduct' => $this->form->id
                ]);

                App::getDB()->delete('product', [
                    'idProduct' => $this->form->id
                ]);
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            }
        }

        App::getRouter()->redirectTo('product_list');
    }

    public function action_product_save() {
        if($this->validateSave()) {

            $calories = ($this->form->fats * 4) + ($this->form->proteins * 4) + ($this->form->carbohydrates * 4);
            $calories = round($calories,2);


            try{

                if($this->form->id == ''){
                    App::getDB()->insert('product', [
                        'productName' => $this->form->product_name,
                        'carbohydrates' => $this->form->carbohydrates,
                        'proteins' => $this->form->proteins,
                        'fats' => $this->form->fats,
                        'calories' => $calories
                    ]);
                } else {

                    App::getDB()->update('product',[
                        'productName' => $this->form->product_name,
                        'carbohydrates' => $this->form->carbohydrates,
                        'proteins' => $this->form->proteins,
                        'fats' => $this->form->fats,
                        'calories' => $calories,
                    ], [
                        'idProduct' => $this->form->id
                    ]);
                }
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            }

            App::getRouter()->redirectTo('product_list');
        } else {
            $this->generateView();
        }
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('product_edit.tpl');
    }

}