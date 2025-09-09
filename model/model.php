<?php
    class Model extends connect{
        public function getAll(){
            $get = $this->con()->query("SELECT * FROM pahlawan");
            return $get->fetch_all(MYSQLI_ASSOC);
        }
        public function getById($id){
            $get = $this->con()->query("SELECT * FROM pahlawan WHERE id - $id ");
            return $get->fetch_assoc();
        }
    }
?>