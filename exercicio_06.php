<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <form action="exercicio_06.php" method="post">
            <label for="hora">Introduzca la altura desde donde va a caer el objeto</label>
                <p><input type="number" name='altura'></p>
                <p><input type="submit" value="Enviar" /></p>
        <br>

        <?php
            $tiempo=0;
            if(!isset($_REQUEST['altura'])){
                echo "<p>Introduzca la altura desde donde va a caer el objeto</p>";
            } else if ($_REQUEST['altura']){
                $tiempo=sqrt((2 * $_REQUEST['altura'])/9.81);
                echo "<p>O tempo que tardará é: $tiempo segundos</p>";
            }





        ?>
    </body>
</html>