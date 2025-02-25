<?php
    $resultado = "";
    if(isset($_GET["idade"])){
       
    
        $idade = $_GET["idade"];
    

        if($idade >=18){
            $resultado = "Voce esta apto para o concurso";


        }else{
            $resultado = "Voce nao esta apto para o concurso";
        }
    };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form{
        background-color: rgba(226, 142, 142, 0.97);
        width: 300px;
        height: 300px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        text-align: center;

    }
    </style>
</head>
<body>
    <form method="GET">
        <h1>incriçao para concurso publico</h1>
        <label > Nome Completo</label>
        <input type="text" name="nomeCompleto" id="nome"/>

        <br>
        <Label>Idade</Label>
        <input type="number" name="idade" id="idade"/>

        <br>
        <label>Altura</label>
        <input type="number" name="altura" id="altura"/>

        <br>
        <button type="submit" id="button">Cadastrar</button>
        <br>





    </form> 
    <h1>Resultado da clasificaçao</h1>
    <p> <?php  echo $resultado; ?></p>
</body>
</html>