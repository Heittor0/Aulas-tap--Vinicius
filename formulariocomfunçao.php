
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar soma</title>
    </head>
    <body>
        <form action="calcular.php" method="POST">
            <label for="">Entre com o n1</label>
            <br>
            <input type="number" name="n1">
            <br> <br>
            <select name="operador" >
                
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">multiplicacao</option>
                <option value="divisao">divisao</option>
                
            </select>
            <br> <br>
            <br> <br>
            <label for="">Entre com o n2</label>
            <br>
            <input type="number" name="n2">
            <br>
            <button type="submit"> Calcular</button>






        </form>

    </body>
</html>