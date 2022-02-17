<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
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
            $escapicua = true;

            for ($i=0; $i<strlen($meuNumero); $i++) {
                $esquerda=substr($meuNumero,$i,1);
                $dereita=substr($meuNumero,strlen($meuNumero)-1-$i,1);
                if($esquerda!=$dereita){
                    $escapicua = false;
                }
            }

            if ($escapicua) {
                echo "<p>El numero introducido es capicua: $escapicua</p>";
            } else {
                
            }

        } else {
            echo "<p>Tes que introducir un numero</p>";
        }
    ?>
</body>
</html>