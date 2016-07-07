<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DetectiveView
 *
 * @author WeiPe
 */
class DetectiveView {
    //put your code here
    private $model;
    private $controller;
    
    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function output() {
        return '<p><a href="index.php?action=clicked">' . $this->model->string . "</a></p>";
    }
}
