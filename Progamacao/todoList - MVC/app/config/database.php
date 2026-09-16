<?php

class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $banco = 'todo_list';

    public $conn = '';

    public function conectar(){
        $this -> conn = new mysqli($this -> host, $this -> user, $this -> password, $this -> banco );

        if ($this -> conn -> connect_error) {
            die("Algo deu errado" . $this -> conn -> connect_error);
        }

        return $this->conn;
    }

}