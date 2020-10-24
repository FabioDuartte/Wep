<?php

namespace Library\Restaurant\Core\Master;

class View
{
    private $model;
    
    function __construct($model)
    {
        $this->model = $model;
    }
}