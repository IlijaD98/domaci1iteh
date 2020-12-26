<?php
/*
$servername="localhost";
$username="root";
$password="";
$dbname="liga";

$conn=mysqli_connect($servername,$username,$password,$dbname);
*/
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "logs/php_logs.log");

class Connection{
    
        private $link;
    
        public function __construct() {
            $this->link = null;
        }
    
        public function close() {
            $this->link->close();
        }
        public function query($query) {
            return $this->link->query($query);
        }
    
        public function open() {
            $this->link = new mysqli("localhost", "root", "", "liga");
            if (!$this->link) return false;
            $this->link->set_charset("utf-8");
            return true;    
        }

        public function error(){
            return $this->link->error;
        }
    } 
?>