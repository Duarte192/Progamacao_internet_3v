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
if (isset($_POST['descricao']) && !empty(trim($_POST['descricao']))) {
   $descricao = $conn -> real_escape_string($_POST['descricao']);
   $sqlCreate = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";

   if ($conn -> query($sqlCreate) == TRUE ) {
        header("location: todo-list2.php");
   }
}
# Exclusão de tarefas
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sqldelete = "DELETE FROM tarefas WHERE id = '$id'";
    if ($conn -> query($sqldelete) == TRUE) {
        header("location: todo-list2.php");
    }
}
$tarefas=[];
# Listar tarefas

$sqlSelect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
$result = $conn -> query($sqlSelect);

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        $tarefas[] = $row;
    }
}



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
            <?php foreach ($tarefas as $tarefa): ?>
            <li> 
                <?php echo $tarefa['descricao']?>
                <a href="todo-list2.php?delete=<?php echo $tarefa['id']?> ">Excluir</a>
        </li>
            <?php endforeach ?>
        </ul>
    <?php else: ?>
    <h3>Não tem tarefas</h3>
    <?php endif;?>

</body>
</html>