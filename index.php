<?php


$model = new DetectiveModel();
$controller = new DetectiveController($model);
$view = new DetectiveView($controller, $model);

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_GET['action']) && !empty($_GET['action'])) {
                $controller->{$_GET['action']}();
            }
            
            echo $view->output();
        ?>
    </body>
</html>
