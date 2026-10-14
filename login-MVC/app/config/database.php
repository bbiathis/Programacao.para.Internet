<?php
Class Database{
    private $host = "localhost";
    private $username = "root";
    private $senha = "";
    private $banco = "login";

    public $conn = '';

 public function conectar(){
        $this -> conn = newmysqli($this->host, $this->root, 
        $this->senha, $this->banco) 

        if($this->conn->connect_error){
            die("Deu erro na conexão do banco" . $this->connect_error);
        }   

            return $this->conn;
             
 }
}

?>