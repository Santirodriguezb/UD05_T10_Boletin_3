<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
        <form action="exercicio_08.php" method="post">
            <label for="hora">Introduzca tres notas para facer a media</label>
                <p>Primeira nota: <input type="number" name='nota1'></p>
                <p>Segunda nota: <input type="number" name='nota2'></p>
                <p>Terceira nota: <input type="number" name='nota3'></p>
                <p><input type="submit" value="Enviar" /></p>
        <br>
        <?php
                    $media=0;
                    $suma=$_REQUEST[nota1]+$_REQUEST[nota2]+$_REQUEST[nota3];
                    if(!isset($_REQUEST['nota1'],$_REQUEST['nota2'],$_REQUEST['nota3'])){
                        echo "<p>Introduzca tres notas para facer media</p>";
                    } else if ($_REQUEST['nota1'] + ($_REQUEST['nota2']) + ($_REQUEST['nota3'])){
                        $media=$suma/3;
                        echo "<p>A media deste alumno é: $media</p>";
                    } else if ($media<5){
                        echo "<p>INSUFICIENTE</p>";
                    } else if ($media>=5 && $media<6){
                        echo "<p>SUFICIENTE</p>";
                    } else if ($media>=6){
                        echo "<p>BIEN</p>";
                    } else if ($media>=7 && $media<=8){
                        echo "<p>NOTABLE</p>";
                    }
        ?>
</body>
</html>