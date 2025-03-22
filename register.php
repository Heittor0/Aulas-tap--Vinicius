<?php
//Conecta com o banco
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 



    require "../config/db.php";
    $nome = $_POST['nome'];
    $email = $_POST['email'];   
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo -> prepare("INSERT INTO usuarios (nome, email, senha) VALUES( ?, ?, ?)");
    $stmt -> execute([$nome, $email, $senha]);
    header("Location: ../Login.php");
    exit();
}
?>
<html>
    <head>
    <style>
        form{
           
            flex-direction: column;
         
            justify-content: center;
            margin-top: 10%;
            margin-left: 40%;
            margin-right: 40%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgb(255, 255, 255);
        }
        body{
            border-collapse: collapse;
            border-radius: 10px;
            text-align: center;
            align-self: center;
            align-items: center;
           
            background-color: rgb(255, 255, 255);
        }
        input:hover{
            
            transition: all 0.5s;
            background-color:rgb(165, 240, 223);
        }
        input{
            transition: all 0.5s;
            background-color: rgb(255, 255, 255);
        }
        button{
            background-color: rgb(255, 255, 255);
            transition: all 0.5s;
        }
        button:hover{
            background-color: rgb(165, 240, 223);
            transition: all 0.5s;
        }

    </style>
    </head>
    <body>
        
    
<form method="POST">]
    <h1>Cadastrar</h1>
    <input type="text" name="nome" placeholder="nome" require>
    <br>
 
    <input type="email" name="email" placeholder="email">
   <br>
    <input type="password" name="password" placeholder="senha">
    <br>
    <button type="submit">Cadastrar</button>
    </body>

</form>
</html>