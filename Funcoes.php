<?php
//aula de Funçoes
    function verificar_ParouImpar($numero){
        return ($numero % 2 ==0)? "Par": "Impar";
    }
    // ? e um simplificado
    // O: é o else simplificado
    echo " O numero é:" . verificar_ParouImpar(9) . "<br>";
    $nome = "Heittor";
    $sobrenome = "Moreira";
    echo  "nome:" .$nome . " " . $sobrenome;
?>