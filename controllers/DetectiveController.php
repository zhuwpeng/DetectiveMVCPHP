<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DetectiveController
 *
 * @author WeiPe
 */
class DetectiveController {
    
    private $model;
    
    public function __construct($model){
        $this->model = $model;
    }
    
    public function clicked() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}
