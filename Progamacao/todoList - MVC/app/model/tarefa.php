<?php 
require_once __DIR__ . '/../config/database.php';
class Tarefa{
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn =$db->conectar();
    }

    
    public function listar(){
        $tarefas = [];
        $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC";

        $resultado = $this -> conn -> query($sql);

        if ($resultado -> num_rows > 0) {
            while ($rows = $resultado -> fetch_assoc()) {
                $tarefas[] = $rows; 
            }
        }
        return $tarefas;    

    }

    public function criar($descricao){
        $descricao = $this -> conn -> real_escape_string($descricao);
        $sql = "insert into tarefas (descricao) Values ('$descricao')";
        return $this -> conn -> query($sql);
    }
    public function excluir($id){
        $id = intval($id);
        $sql = "delete from tarefas where id = '$id'";
        return $this -> conn -> query($sql);
    }
    public function editar($descricao, $id){
        $id = intval($id);
        $descricao = $this -> conn -> real_scape_string($descricao);
        $sql = "UPDATE tarefas SET descricao = '$descricao' where id ='$id'";
        return $this -> conn -> query($sql);
    }




}


?>