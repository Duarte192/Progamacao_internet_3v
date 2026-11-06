<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $banco = "loginMvc";

    public $conn = '';

    public function conectar(){
        $this -> conn = new mysqli($this -> host, $this -> username, $this -> password, $this -> banco);
        if ($this-> conn -> connect_error) {
            die("Algo deu errado");
        }
        return $this -> conn;
    }
}