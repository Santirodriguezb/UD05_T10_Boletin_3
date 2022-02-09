<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
<form action="exercicio_03.php" method="post">
        <label for="hora">Introduzca un numero entre el 1-7</label>
            <p><input type="number" name='numero'></p>
            <p><input type="submit" value="Enviar" /></p>
    <br>

    <?php
        if(!isset($_REQUEST['numero'])){
            echo "<p>Escolle un dia:</p>";
        }else if ($_REQUEST['numero']==1){
            echo "<p>Luns</p>"    ;
        } else if ($_REQUEST['numero']==2){
            echo "<p>Martes</p>";
        } else if ($_REQUEST['numero']==3){
            echo "<p>Mercores</p>";
        } else if ($_REQUEST['numero']==4){
            echo "<p>Xoves</p>";
        } else if ($_REQUEST['numero']==5){
            echo "<p>Venres</p>";
        } else if ($_REQUEST['numero']==6){
            echo "<p>Sabado</p>";
        } else if ($_REQUEST['numero']==7){
            echo "<p>Domingo</p>";
        }
        
        




    ?>
</body>
</html>