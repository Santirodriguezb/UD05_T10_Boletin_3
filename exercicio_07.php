<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
<form action="exercicio_07.php" method="post">
            <label for="hora">Introduzca tres notas para facer a media</label>
                <p>Primeira nota<input type="number" name='1'></p>
                <p>Segunda nota<input type="number" name='2'></p>
                <p>Terceira nota<input type="number" name='3'></p>
                <p><input type="submit" value="Enviar" /></p>
        <br>
        
        <?php
            $media=0;
            if(!isset($_REQUEST['notas'])){
                echo "<p>Introduzca tres notas para facer media</p>";
            } else if ($_REQUEST['nota1'] + ($_REQUEST['nota2']) + ($_REQUEST['nota3'])){
                $media=$_REQUEST/3;
            }    


        ?>
</body>
</html>