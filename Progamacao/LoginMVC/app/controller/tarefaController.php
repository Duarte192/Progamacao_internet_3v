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
        
    }


}
