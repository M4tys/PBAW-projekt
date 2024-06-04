<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use app\forms\DishProductForm;

class DishProductListCtrl {
    private $form;
    private $records;
    private $validator;

    public function __construct() {
        $this->form = new DishProductForm();
        $this->validator = new Validator();
    }

    public function validate(){
        $this->form->idDish = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_dish_product_list() {

        if($this->validate()){
            try {

                $dish = App::getDB()->get('dish',"*", [
                    "idDish" => $this->form->idDish
                ]);

                $results = App::getDB()->select("dishproducts", [
                    "[>]product" => ["dishproducts.idProduct" => "idProduct"]
                ], [
                    'DishProducts.idDish',
                    "Product.idProduct",
                    "DishProducts.quantity",
                    "Product.productName",
                    "Product.calories",
                    "Product.carbohydrates",
                    "Product.proteins",
                    "Product.fats",
                ], [
                    "DishProducts.idDish" => $this->form->idDish
                ]);
                
                $this->form->dishes = $results;
                $this->form->dish_name = $dish['dishName'];

                foreach ($results as $d){
                    $this->form->totalCalories += ($d['calories'] / 100) * $d['quantity'];
                    $this->form->totalCarbohydrates += ($d['carbohydrates'] / 100) * $d['quantity'];
                    $this->form->totalProteins += ($d['proteins'] / 100) * $d['quantity'];
                    $this->form->totalFats += ($d['fats'] / 100) * $d['quantity'];
                }

                App::getDB()->update('dish',[
                    'totalCalories' => $this->form->totalCalories,
                    'totalCarbohydrates' => $this->form->totalCarbohydrates,
                    'totalProteins' => $this->form->totalProteins,
                    'totalFats' => $this->form->totalFats,
                    'dishName' => $this->form->dish_name
                ], [
                    'idDish' => $this->form->idDish
                ]);

            } catch (\PDOException) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu.');
            }
        }

        $this->generateView();
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('dish_product_list.tpl');
    }

}