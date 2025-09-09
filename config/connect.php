<?php
    class connect{
        private $host = "localhost";
        private $user = "root";
        private $pass = "bixkafa";
        private $db = "daftarpahlawan";

        public function con(){
            $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            return $con;
        }
    }
?>