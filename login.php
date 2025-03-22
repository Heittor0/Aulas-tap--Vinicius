<?php
    session_start();
    require "../config/db.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $senha = $_post['password'];
        $stmt = $pdo -> prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt -> execute([$email]);
        $usuario = $stmt -> fetch();

        if($usuario && password_verify($senha, $usuario['senha'])){
            $_SESSION['usuario'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: ../Posts/index.php");
            exit();
    } else {
        echo "Email ou senha incorretos";
    
    }
    }

    

?>

<form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email"> <br>
    <input type="text" name="Senha" placeholder="Senha"> <br>
    <button type="submit">Entrar</button>


</form>