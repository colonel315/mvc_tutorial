<?php

/**
 * Created by PhpStorm.
 * User: Trey
 * Date: 12/14/2015
 * Time: 3:52 PM
 */
class Controller
{
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}