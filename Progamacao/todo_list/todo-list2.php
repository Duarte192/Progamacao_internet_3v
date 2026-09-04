<?php 

# Conexão com o banco
$localhost = "localhost";
$name = "todo_list";
$username = "root";
$password = "";

$conn = new mysqli($localhost,$username,$password,$name);
# criacao de tarefas
if ($conn -> connect_error) {
    die("Deu errado");
}
# Exclusão de tarefas


$tarefas=[];
# Listar tarefas



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
</head>
<body>

    <h1>TO-DO List</h1>
    <form action="todo-list2.php" method="POST">
        <input type="text" placeholder="Descrição da sua tarefa" name="descricao"/>
        <button type="submit">Adicionar</button> 
    </form>

    <h2>Suas tarefas</h2>
    <?php if (!empty($tarefas)):?>
        <ul>
            <li>Tenho uma tarefa</li>
        </ul>
    <?php else: ?>
    <h3>Não tem tarefas</h3>
    <?php endif;?>

</body>
</html>