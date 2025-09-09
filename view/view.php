<?php
    class view{
        public function show($controller){
            if(isset($_GET['id'])){
                $data = $controller->readById($_GET['id']);
            }
            else{
                $data = $controller->readAll();
            }
        }
    }
?>