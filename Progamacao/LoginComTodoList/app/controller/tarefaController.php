<?php 
require_once __DIR__  . '/../model/tarefa.php';

class tarefaController{
    private $tarefaModel;
    
    public function __construct(){
        $this -> tarefaModel = new Tarefa();
    }

public function criar()
{
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit;
    }

    if (isset($_POST['descricao']) && trim($_POST['descricao']) !== '') {
        $this->tarefaModel->criar(
            trim($_POST['descricao']),
            $_SESSION['id']
        );
    }

    header("Location: index.php?action=painel");
    exit;
}
    public function excluir(){
        if (isset($_GET['id'])) {
            $this -> tarefaModel -> excluir($_GET['id']);
        }
        header("location: index.php");
    }
    public function editar(){
        if (isset($_POST['id']) && isset($_POST['descricao'])&& !empty(trim($_POST['descricao']))) {
            $this -> tarefaModel -> editar($_POST['descricao'],$_POST['id']);
        }
        header("location: index.php");
    }
}
?>


