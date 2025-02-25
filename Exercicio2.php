<?php
    $pessoa = [
        "nome" => "Heittor",
        "idade" => 16,
        "altura" => 1.75,
        "cores" => ["roxo", "preto", "verde"],
      


    ];






?>
<!DOCTYPE html>
<html lang="en">
<head><title>Aula1</title>

<style>
    body{
        background-color: rgba(202, 135, 219, 0.97);
    }
    ul{
       
        color: purple;
        font: 20px optional;
        
    }






</style>
</head>
<body>
    <form action=""></form>
    <ul> 
        <li><?php echo $pessoa["nome"]?></li>
        <li><?php echo  $pessoa["idade"]?></li>
        <li><?php echo  $pessoa["altura"]?></li>



    </ul>
    

</body>
</html>