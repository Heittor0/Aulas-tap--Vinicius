<?php
    $nome="Heittor";
    $idade=16;
    $altura=1.75;
    $cores=array("roxo","preto","verde");
    $array=array("nome"=>"Heittor","idade"=>16,"altura"=>1.75,"cores"=>array("roxo","preto","verde"));
    echo "Meu nome e $nome, minha idade e $idade e minha altura e $altura". "<br>"; ;
    
    echo $cores[0]. "<br>";
   
    echo $cores[1]. "<br>";
    echo $cores[2]. "<br>";

    $pd= ["nome"=> "notebook Dell", "preço"=> 2000, "marca"=> "dell"];
    echo $pd["nome"]. "<br>";
    echo $pd["preço"]. "<br>";
    echo $pd["marca"]. "<br>";






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pessoa{}






    </style>
</head>
<body>
    <p class="pessoa" <?php echo ["$nome"]?>>     </p>
    
</body>
</html>