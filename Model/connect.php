<?php
  class DataBase{

    public $servername = "localhost:8081";
    public $username = "prueba2";
    public $password = "admin";
    public $dbname = "prueba2";

    public function connect(){
      $conn =  new mysqli(
                    $this->servername,
                    $this->username,
                    $this->password,
                    $this->dbname
                  );
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          return FALSE;
      }     
      return $conn;
    }

  }

?>