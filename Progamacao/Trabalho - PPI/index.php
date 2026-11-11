<?php 
session_start();
require_once __DIR__ . '/app/controller/tarefacontroller.php';
require_once __DIR__ . '/app/controller/usuarioController.php';

$tarefaController = new tarefaController();
$usuarioController = new usuarioController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'criar':
        $tarefaController -> criar();
        break;
    case 'editar':
        $tarefaController -> editar();
        break;
    case 'excluir':
        $tarefaController -> excluir();
        break;
    case 'autenticar':
        $usuarioController -> autenticar();
        break;
    case 'painel':
        $usuarioController -> painel();
        break;
    case 'logout':
        $usuarioController -> logout();
        break;
     default:
        $usuarioController -> index();
        break;
}
?>