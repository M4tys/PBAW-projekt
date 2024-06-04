<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home_view'); #default action
App::getRouter()->setLoginRoute('home_view'); #action to forward if no permissions

Utils::addRoute('home_view','HomeCtrl');

Utils::addRoute('register_show','RegisterCtrl');
Utils::addRoute('register','RegisterCtrl');

Utils::addRoute('login_show','LoginCtrl');
Utils::addRoute('login','LoginCtrl');
Utils::addRoute('logout','LoginCtrl');

Utils::addRoute('person_list','PersonListCtrl', ['admin']);
Utils::addRoute('person_list_part','PersonListCtrl', ['admin']);
Utils::addRoute('person_edit','PersonEditCtrl', ['admin']);
Utils::addRoute('person_save','PersonEditCtrl', ['admin']);
Utils::addRoute('person_activate','PersonEditCtrl', ['admin']);
Utils::addRoute('person_deactivate','PersonEditCtrl', ['admin']);

Utils::addRoute('role_list', 'RoleListCtrl', ['admin']);
Utils::addRoute('role_deactivate', 'RoleEditCtrl', ['admin']);
Utils::addRoute('role_activate', 'RoleEditCtrl', ['admin']);
Utils::addRoute('role_add', 'RoleEditCtrl', ['admin']);
Utils::addRoute('role_add_show', 'RoleEditCtrl', ['admin']);

Utils::addRoute('product_list','ProductListCtrl', ['dietician']);
Utils::addRoute('product_save', 'ProductEditCtrl', ['dietician']);
Utils::addRoute('product_edit', 'ProductEditCtrl', ['dietician']);
Utils::addRoute('product_new', 'ProductEditCtrl', ['dietician']);
Utils::addRoute('product_delete', 'ProductEditCtrl', ['dietician']);

Utils::addRoute('dish_list', 'DishListCtrl', ['user', 'dietician']);

Utils::addRoute('dish_edit', 'DishEditCtrl', ['user', 'dietician']);
Utils::addRoute('dish_save', 'DishEditCtrl', ['user', 'dietician']);
Utils::addRoute('dish_new', 'DishEditCtrl', ['user', 'dietician']); 
Utils::addRoute('dish_delete', 'DishEditCtrl', ['user', 'dietician']); 

Utils::addRoute('dish_product_list', 'DishProductListCtrl', ['user', 'dietician']);

Utils::addRoute('product_pick', 'DishProductPickListCtrl', ['user', 'dietician']);

Utils::addRoute('product_add', 'DishProductEditCtrl', ['user', 'dietician']);
Utils::addRoute('show_quantity', 'DishProductEditCtrl', ['user', 'dietician']);
Utils::addRoute('set_quantity_save', 'DishProductEditCtrl', ['user', 'dietician']);
Utils::addRoute('dish_product_delete', 'DishProductEditCtrl', ['user', 'dietician']);

App::getRouter()->go();