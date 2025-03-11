
<?php
    $i=0;
    $turma = [
        ["nome" => "João","idade" => 20,"Curso" => "Informatica"],
        ["nome" => "Pedro","idade" => 30,"Curso" => "Mecatronica" ],
        ["nome" => "Jasilvaldo","idade" => 30,"Curso" => "Mecatronica"],
        ["nome" => "Jenessi","idade" => 30,"Curso" => "Informatica"]
    ];
   
    for($i=0 ; $i<count($turma) ; $i++){
        echo "<br>";
        echo  $turma[$i]["nome"];
        echo "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            width: 50%;
            text-align: center;
            margin: 0 auto;
        }
        th{
            background-color: lightcoral;
            color: white;
        }
        td{
            border: 1px solid black;
            background-color: aliceblue;
        }


    </style>
</head>
<body>
    <table>
        <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Curso</th>
        </tr>
        <tr>
        <td><?php echo $turma[0]["nome"];?></td>
        <td><?php echo $turma[0]["idade"];?></td>
        <td><?php echo $turma[0]["Curso"];?></td>
     

        </tr>
        <tr>
        <td><?php echo $turma[1]["nome"];?></td>
        <td><?php echo $turma[1]["idade"];?></td>
        <td><?php echo $turma[1]["Curso"];?></td>
        </tr>
        <tr>
        <td><?php echo $turma[2]["nome"];?></td>
        <td><?php echo $turma[2]["idade"];?></td>
        <td><?php echo $turma[2]["Curso"];?></td>
        </tr>
        <tr>
        <td><?php echo $turma[3]["nome"];?></td>
        <td><?php echo $turma[3]["idade"];?></td>
        <td><?php echo $turma[3]["Curso"];?></td>
        </tr>
</table>
</body>
</html>