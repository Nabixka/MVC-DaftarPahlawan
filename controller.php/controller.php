<?php
    class controller extends model{
        public function readAll(){
            return $this->getAll();
        }
        public function readById($id){
            return $this->getById($id);
        }
    }
?>