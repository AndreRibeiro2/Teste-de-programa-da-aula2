<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soma com Entradas de Dados</title>
</head>
<body>
    <h1>Projeto Soma</h1>
    <hr>
    
    <form method="GET">
        
        Valor 1:
        <input type="text" name="txtv1" > <br>
        <br>

        Valor 2:
        <input type="text" name="txtv2"> <br>
        <br>
    
        <input type="submit" name="btncalcular" value="Calcular" >

    </form>

    <?php
    
        if ($_GET) {
        
            //Rcebe dados do formulário
            $num1=$_GET['txtv1'];
            $num2=$_GET['txtv2'];

            // Efetua a soma
            $total = $num1+$num2;

            // Mostrando Resultado
            echo "O Resultado da soma é $total";
        
        }
    ?>

</body>
</html>
