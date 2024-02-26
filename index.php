<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help.me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="container-um">
            <h1>Help.me</h1>
        </div>
        <div class="container-dois">
            <div class="container-form">
                <form method="post">
                <input type="text" name="login" placeholder="Login" class="login">
                <br>
                <input type="password" name="senha" placeholder="Senha" class="login"><br>
                <div class="container-button">
                <input type="submit" class="login botao" value="CONFIRMAR"></input>
                </div>
                <div class="register-button">
                <p>Não possui conta? <a href="register.php" class="links">Crie uma já!</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
           include 'UsuarioDAO.php';
           session_start();
           $usuario = new UsuarioDAO();
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $login = $_POST['login'];
            $_SESSION['login'] = $login;
            $senha = $_POST['senha'];
            $usuario->logar($login, $senha);
           }
        ?>
</body>
</html>
