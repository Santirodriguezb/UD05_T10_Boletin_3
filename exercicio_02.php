<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="exercicio_02.php" method="post">
        <label for="hora">Introduzca una hora sin minutos</label>
            <p><input type="number" name='hora'></p>
            <p><input type="submit" value="Submit" /></p>
    <br>
    <?php
        if(!isset($_REQUEST['hora'])){
            echo "<p>O resultado é:</p>";
        } else if ($_REQUEST['hora']>=6 && $_REQUEST['hora']<=12){
            echo "<p>Buenos dias</p>";
        } else if($_REQUEST['hora']>=13 && $_REQUEST['hora']<=20){
            echo "<p>Buenas tardes</p>";
        } else if ($_REQUEST['hora']>=21 || $_REQUEST['hora']<6) {
            echo "<p>Buenas noches</p>";
        }


    ?>
</body>
</html>