<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="operar">Escolle que desea realizar</label>
        <select name="operar">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
        </select>

        <br>
        <input type="number" name="num1" >
        <br>
        <input type="number" name="num2" >
        <br>
        <input type="submit" value="Enviar">


<?php

// VALIDACION
// if(isset($_REQUEST["num1"] && $_REQUEST["num2"])){

// };

if(!isset($_REQUEST["operar"])){

}else if ($_REQUEST["operar"]==0)  {
    $suma = $_REQUEST["num1"] + $_REQUEST["num2"];

    echo "<br>"."La suma de ".$_REQUEST["num1"] ."+" .$_REQUEST["num2"]."=" .$suma ;

}else if ($_REQUEST["operar"]==1)  {
    $resta = $_REQUEST["num1"] - $_REQUEST["num2"];

    echo "<br>"."La resta de ".$_REQUEST["num1"] ."-" .$_REQUEST["num2"]."=" .$resta ;

}else if ($_REQUEST["operar"]==2)  {
    $multiplicacion = $_REQUEST["num1"] * $_REQUEST["num2"];

    echo "<br>"."La multiplicacion de ".$_REQUEST["num1"] ."*" .$_REQUEST["num2"]."=" .$multiplicacion ;

}else if ($_REQUEST["operar"]==3)  {
    $division = $_REQUEST["num1"] / $_REQUEST["num2"];

    echo "<br>"."La division de ".$_REQUEST["num1"] ."/" .$_REQUEST["num2"]."=" .$division ;
}else{
    echo "introduce un numero";
}



?>

</body>
</html>