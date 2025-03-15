<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $nome = $_POST['nome'];
    function calcularIMC($peso,$altura,$nome){
        $imc = $peso / ($altura * $altura);
        return $imc;
        

    }
    echo "O IMC é ". calcularIMC($peso,$altura,$nome);
    echo "<br>";









?>