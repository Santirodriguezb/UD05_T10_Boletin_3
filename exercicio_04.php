<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
<form action="exercicio_04.php" method="post">
        <label for="hora">Introduzca el numero de horas trabajadas</label>
            <p><input type="number" name='horas'></p>
            <p><input type="submit" value="Enviar" /></p>
    <br>
    <?php
        $sueldo=0;
        if(!isset($_REQUEST['horas'])){
            echo "<p>Introduzca el numero de horas trabajadas</p>";
        } else if ($_REQUEST['horas']>=1 && $_REQUEST['horas']<=40){
            $sueldo=$_REQUEST['horas']*12;
            echo "<p>O soldo deste traballador é: $sueldo</p>";
        } else if ($_REQUEST['horas']>40){
            $sueldo=($_REQUEST['horas']- 40)*16 + (40 * 12);
            echo "<p>O soldo deste traballador é: $sueldo</p>";
        }





    ?>
</body>
</html>