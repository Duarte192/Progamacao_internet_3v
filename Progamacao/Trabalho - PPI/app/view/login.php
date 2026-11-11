<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login MVC</title>
    <link rel="stylesheet" href="/app/assets/login.css">
</head>

<body>
    <div id="login">

        <h1>Acesse sua conta</h1>

        <?php if (isset($erro)): ?>
            <p style="color: red;">
                <?php echo htmlspecialchars($erro); ?>
            </p>
        <?php endif; ?>

        <form action="index.php?action=autenticar" method="POST">
            <p>
                <label>E-mail</label>
                <input type="email" name="email">
            </p>

            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>

            <p>
                <button type="submit">Entrar</button>
            </p>
        </form>



    </div>

</body>

</html>