<?php 
include_once __DIR__ . '/../model/tarefa.php';

class TarefaController{
    private $tarefaModel;

    public function __construct(){
        $this -> tarefaModel = new Tarefa();
    }
    public function criar(){
        if(!isset($_SESSION['id'])){
            header('Location: index.php');
            exit;
        }
        if (isset($_POST['descricao']) && trim($_POST['descricao']) !== '') {
            $this-> tarefaModel -> criar($_POST['descricao'],$_SESSION['id']);
        }

        header('Location: index.php?action=painel');
        exit;
    }
    public function editar(){
        if (isset($_SESSION['id']) && isset($_POST['descricao']) && !empty($_POST['descricao'])) {
            $this -> tarefaModel -> editar($_POST['descricao'], $_SESSION['id']);
        }
        header("Location: index.php");
    } 
    public function excluir(){
        if (isset($_GET['id'])) {
            $this -> tarefaModel -> excluir($_GET['id']);
        }
        header('Location: index.php');
    }


}
