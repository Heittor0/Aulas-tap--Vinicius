<?php
   $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operador = $_POST['operador'];
    function Calculadora($n1, $operador, $n2){
       
        if($operador == "soma"){
            return $n1 + $n2;
        } else if ($operador == "subtracao"){
            return $n1 - $n2;
        } else if ($operador == "multiplicacao"){
            return $n1 * $n2;
        } else if ($operador == "divisao"){
            return $n1 / $n2;
        }
    }
    echo "A conta é: (da função):" . Calculadora($n1, $operador, $n2);
    echo "<br>";

    echo "O resultado é:" . ($n1 + $n2);
    echo "<br>";
 


?>