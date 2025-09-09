<?php
    include("connect.php");
    include("../model/model.php");
    include("../controller/controller.php");
    include("../view/view.php");

    $controller = new controller;
    $view = new view;
    $view->show($controller);
?>