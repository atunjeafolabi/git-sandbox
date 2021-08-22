<?php

namespace App;

class Phone
{

    private $model;
    private $fourG;

    public function __construct($manufacturer, $model, $fourG)
    {
        $this->model  = $model;
        $this->fourG = $fourG;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function isFourG()
    {
        $this->fourG;
    }
}
