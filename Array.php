<!DOCTYPE html>
<html>
    <head>

    <title>Nomes</title>
    <style>
        #lista{
            color: burlywood;
            font-style: normal;
            font-size: 20px;
            text-align: center;
        }





    </style>
    </head>
    <body>

        
    
    <div id="lista">
    <?php
        $x=0;
        $nomes = ["joão", "maria", "pedro"];
        
        while($x < 3){
            echo "<li> $nomes[$x] </li>" ;
            $x++;
        }



    ?>
    </div>
 </body>

</html>