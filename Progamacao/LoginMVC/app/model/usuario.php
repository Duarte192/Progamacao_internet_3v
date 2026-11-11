<?php
include_once __DIR__ . '/../config/database.php';

class Usuario{
    private $conn;

    public function __construct(){
        $db = new Database();
        $this -> conn = $db -> conectar();
}
    public function buscarPorEmail($email){
        $stmt = $this -> conn -> prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt -> bind_param("s",$email);
        $stmt -> execute();

        $resultado = $stmt -> get_result();
        return $resultado -> fetch_assoc();
    }
}