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
                <p>Primeira nota: <input type="text" name='nota1'></p>
                <p>Segunda nota: <input type="text" name='nota2'></p>
                <p>Terceira nota: <input type="text" name='nota3'></p>
                <p><input type="submit" value="Enviar" /></p>
        <br>
        <?php

                    if(!isset($_REQUEST['nota1'],$_REQUEST['nota2'],$_REQUEST['nota3'])){
                        echo "<p>Introduzca tres notas para facer media</p>";
                    } else  { 
                        $suma=$_REQUEST[nota1]+$_REQUEST[nota2]+$_REQUEST[nota3];
                        $media=$suma / 3;
                        } if ($media<5){
                            echo $media;
                            echo "<p>INSUFICIENTE</p>";
                        } if ($media>=5 && $media<6){
                            echo $media;
                            echo "<p>SUFICIENTE</p>";
                        } if ($media>=6 && $media < 7){
                            echo $media;
                            echo "<p>BIEN</p>";
                        } if ($media >=7 && $media<=8){
                            echo $media;
                            echo "<p>NOTABLE</p>";
                        } if ($media > 8) {
                            echo "<p>SOBRESALIENTE</p>";
                        }
                    
        ?>
</body>
</html>