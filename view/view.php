<?php
    class view{
        public function show($controller){
            if(isset($_GET['id'])){
                $data = $controller->readById($_GET['id']);
                include("viewById.php");
            }
            else{
                $data = $controller->readAll();
                include("viewAll.php");
            }
        }
    }
?>