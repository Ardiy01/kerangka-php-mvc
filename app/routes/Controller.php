<?php

class Controller{

    // Autoload bagian view
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';

    }

    // Autoload bagian model
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;

    }

    // Autoload bagian library
    public function library($library)
    {
        require_once '../app/librarys/' . $library . '.php';
        return new $library;
    }
}