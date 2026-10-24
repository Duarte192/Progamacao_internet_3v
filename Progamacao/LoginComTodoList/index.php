<?php
session_start();
require_once __DIR__ . '/app/controller/tarefacontroller.php';
require_once __DIR__ . '/app/controller/usuarioController.php';
$listController = new tarefaController();
$usuarioController = new usuarioController();

$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'criar':
        $listController->criar();
        break;

    case 'excluir':
        $listController->excluir();
        break;
    case 'editar':
        $listController->editar();
        break;

    case 'autenticar':
        $usuarioController->autenticar();
        break;

    case 'painel':
        $usuarioController->painel();
        break;

    case 'logout':
        $usuarioController->logout();
        break;

    default:
        $usuarioController->index();
        break;
}
?>