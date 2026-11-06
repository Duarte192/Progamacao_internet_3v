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

        $stmt = $this -> conn -> prepare("SELECT * FROM tarefas WHERE id_usuario = ? ORDER BY data_criacao DESC;");
        $stmt -> bind_param("i", $id_usuario);
        $stmt -> execute();

        $resultado = $stmt -> get_result();

        if ($resultado && $resultado -> num_rows > 0) {
            while ($row = $resultado -> fetch_assoc()) {
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
    public function editar($descricao, $id){
        $stmt = $this-> conn -> prepare("UPDATE tarefas SET descricao = ? WHERE id = ?");
        $stmt -> bind_param("si", $descricao,$id);
        return $stmt -> execute();
    }
    public function excluir($id){
        $stmt = $this -> conn -> prepare("DELETE FROM TAREFAS WHERE id = ? ");
        $stmt -> bind_param("i", $id);
        return $stmt -> execute();
    }

}