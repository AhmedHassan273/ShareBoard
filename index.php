<?php
    session_start();

    require('config.php');

    require('classes/messages.php');
    require('classes/bootstrap.php');
    require('classes/controller.php');
    require('classes/model.php');

    require('controllers/home.php');
    require('controllers/shares.php');
    require('controllers/users.php');

    require('models/home.php');
    require('models/share.php');
    require('models/user.php');
    
    //require('views/home.php');
    //require('views/shares.php');
    //require('views/user.php');
    
    $boostrap = new Bootstrap($_GET);
    
    $controller = $boostrap->createController();
    
    if($controller != NULL) {
        $controller->executeAction();
    }
?>