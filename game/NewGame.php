<?php
require_once 'controllers/DetectiveController.php';
require_once 'models/DetectiveModel.php';
require_once 'views/DetectiveView.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewGame
 *
 * @author WeiPe
 */
class NewGame {
    //put your code here
    
    private $model;
    private $view;
    private $controller;
    
    
    public function __construct() {
        $model = new DetectiveModel();
        $view = new DetectiveView();
        $controller = new DetectiveController();
    }
    
}
