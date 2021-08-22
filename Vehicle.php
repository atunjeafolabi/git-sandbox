<?php

class Vehicle {

    private $model;

    public function __construct($manufacturer, $model)
    {
        $this->model  = $model;
    }

    public function getModel(){
        return $this->model;
    }
}

$toyotaCar = new Vehicle('Toyota', 'Camry');

$toyotaCar->getModel();