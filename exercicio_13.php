<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
        <form action="exercicio_13.php" method="post">
            <label for="hora">Introduzca tres numeros para ordenarlos de menor a mayor</label>
                <p>Primeiro numero: <input type="number" name='num1'></p>
                <p>Segundo numero: <input type="number" name='num2'></p>
                <p>Terceiro numero: <input type="number" name='num3'></p>
                <p><input type="submit" value="Enviar" /></p>
        <br>
    <?php
        $numeros = array($_REQUEST['num1'],$_REQUEST['num2'],$_REQUEST['num3']);
        sort($numeros);
        foreach ($numeros as $key => $value) {
            echo "<p>O orden dos numeros é: $value</p>";
        }


    ?>
</body>
</html>