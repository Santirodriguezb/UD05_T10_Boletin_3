<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 16,17,18</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <label for="numero">Introduce un número</label>
    <input type="number" name="numero">
    <br>
    <input type="submit" value="Enviar">
    </form>


    <?php
        if(!isset($_REQUEST['numero'])){
            echo "<p>Tes que introducir un numero</p>";
        } else if (filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT)){
            $meuNumero = $_REQUEST['numero'];
            $meuNumero = abs($meuNumero);
            $primeirodixito = substr($meuNumero,0,1);
            echo "<p>O primeiro dixito do numero é: $primeirodixito . </p>" ;
            $ultimodixito = substr($meuNumero,strlen($meuNumero),-1,1);
            echo "<p>O ultimo dixito do numero é: $ultimodixito</p>";
            $numerodixitos = strlen($meuNumero);
            echo "<p>O numero total de dixitos é: $numerodixitos</p>";
        } else {
            echo "<p>Tes que introducir un numero</p>";
        }




    ?>





</body>
</html>