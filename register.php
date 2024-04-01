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
            <input type="email" name="email" class="login" placeholder="E-mail" required><br>
            <input type="text" name="login" placeholder="Login" class="login" required>
            <br>
            <input type="password" name="senha" placeholder="Senha (fictícia)" class="login" required><br>
            <div class="container-button">
            <input type="submit" class="login botao" value="CADASTRAR"></input>
            </div>
            </form>
            <div class="register-button">
                <p>Já possui conta? <a href="index.php">Faça log-in!</a></p>
            </div>
         </div>
        </div>

    </div>
     <?php
           include 'UsuarioDAO.php';
           session_start();
           $usuario = new UsuarioDAO();
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            $email = $_POST['email'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            
            $usuario->incluir($email, $login, $senha);
           }
        ?>
</body>
</html>
