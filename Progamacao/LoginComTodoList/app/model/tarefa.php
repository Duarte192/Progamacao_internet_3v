<?php 
require_once __DIR__ . '/../config/database.php';
class Tarefa{
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn =$db->conectar();
    }

public function listar($id_usuario){

    $tarefas = [];

    $stmt = $this -> conn -> prepare("SELECT * FROM tarefas where id_usuario = ? ORDER BY data_criacao DESC;");
    $stmt -> bind_param("i", $id_usuario);
    $stmt -> execute();

    $resultado = $stmt -> get_result();
    

    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $tarefas[] = $row;
        }
    }

    return $tarefas;
}

    public function criar($descricao,$id_usuario){
        $stmt = $this -> conn -> prepare("INSERT INTO tarefas (descricao, id_usuario) VALUES (?,?)");
        $stmt -> bind_param("si", $descricao,$id_usuario);
        return $stmt -> execute();
    }
    
    public function excluir($id){
        $id = intval($id);
        $sql = "delete from tarefas where id = '$id'";
        return $this -> conn -> query($sql);
    }
    public function editar($descricao, $id){
        $id = intval($id);
        $descricao = $this->conn->real_escape_string($descricao);

        $sql = "UPDATE tarefas SET descricao = '$descricao' WHERE id = '$id'";

        return $this->conn->query($sql);
    }




}


?>