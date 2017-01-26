<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
class Config extends PDO{

        public $db;
        private $db_engine = 'mysql';
        private $db_host = 'localhost';

        private $db_user = 'root';
        private $db_password = 'mysql';
        private $db_base = 'mydb';

        function __construct()
        {
            try{
                //setter: sets the database handler
                $this->db = new PDO("".$this->db_engine.":host=$this->db_host; dbname=$this->db_base", $this->db_user,$this->db_password);
            }  
            catch (PDOException $e){
                $e->getMessage();
                console_log(array('outcome' => false, 'message' => 'Unable to connect'));
                 // die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
            }
        }

}