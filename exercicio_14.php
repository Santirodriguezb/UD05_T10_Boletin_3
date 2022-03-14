<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>

<form action="<?php echo $_REQUEST['PHP']?>" method="post">
        <p>Numero: <input type="text" name="n"></p>
        <input type="submit" value="enviar">
</form>
    <?php
       $numero = ($_REQUEST['n']);
            if(fmod($numero,2)==0){
                echo 'es par ';
            }else{
                echo 'es impar ';
            }
            if(fmod($numero,5)==0){
                echo 'es divisible entre 5 ';
            }else{
                echo 'no es divisible entre 5 ';
            }

    ?>
</body>
</html>