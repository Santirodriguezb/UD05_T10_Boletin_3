<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="axente_01.01.php" method="post">
        <label for="dia"> Escolle o dia da semana </label>
            <select name="dia">
                <option value="0"> <?php 
                if(isset ($_REQUEST ["dia"]) && $_REQUEST ["dia"]==4){
                    echo "<option value='0' selected>Luns</option>";
                }else{
                    echo "<option value='0'>Luns</option>";
                }
                ?>    Luns</option>
                <option value="1"> <?php 
                if(isset ($_REQUEST ["dia"]) && $_REQUEST ["dia"]==4){
                    echo "<option value='1' selected>Martes</option>";
                }else{
                    echo "<option value='1'>Martes</option>";
                }
                ?>    Martes</option>
                <option value="2"> <?php 
                if(isset ($_REQUEST ["dia"]) && $_REQUEST ["dia"]==4){
                    echo "<option value='3' selected>Mercores</option>";
                }else{
                    echo "<option value='3'>Mercores</option>";
                }
                ?>    Mercores</option>
                <option value="3"> <?php 
                if(isset ($_REQUEST ["dia"]) && $_REQUEST ["dia"]==4){
                    echo "<option value='3' selected>Xoves</option>";
                }else{
                    echo "<option value='3'>Xoves</option>";
                }
                ?>   Xoves</option>
                
                <option value="4"> <?php 
                if(isset ($_REQUEST ["dia"]) && $_REQUEST ["dia"]==4){
                    echo "<option value='4' selected>Venres</option>";
                }else{
                    echo "<option value='4'>Venres</option>";
                }
                ?> Venres</option>
            </select>

            <br>

            <label for="hora"> Escolle a hora da semana </label>
            <select name="hora">
                <?php

                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="8:50 - 9:40"){
                        echo "<option selected>8:50 - 9:40</option>";
                    }else{
                        echo "<option>8:50 - 9:40</option>";
                    }
            
                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="9:40 - 10:30"){
                        echo "<option selected>9:40 - 10:30</option>";
                    }else{
                        echo "<option>9:40 - 10:30</option>";
                    }
                
                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="10:30 - 11:20"){
                        echo "<option selected>10:30 - 11:20</option>";
                    }else{
                        echo "<option>10:30 - 11:20</option>";
                    } 

                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="12:00 - 12:50"){
                        echo "<option selected>12:00 - 12:50</option>";
                    }else{
                        echo "<option>12:00 - 12:50</option>";
                    }

                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="12:50 - 13:40"){
                        echo "<option selected>12:50 - 13:40</option>";
                    }else{
                        echo "<option>12:50 - 13:40</option>";
                    }

                    if(isset ($_REQUEST ["hora"]) && $_REQUEST ["hora"]=="13:40 - 14:30"){
                        echo "<option selected>13:40 - 14:30</option>";
                    }else{
                        echo "<option>13:40 - 14:00</option>";
                    }
                
                ?>

                <option >8:50 - 9:40</option>
                <option >9:40 - 10:30</option>
                <option >10:30 - 11:20</option>
                <option >12:00 - 12:50</option>
                <option >12:50 - 13:40</option>
                <option >13:40 - 14:30</option>
                <option >16:00 - 16:50</option>
                <option >16:50 - 17:40</option>
                <option >17:40 - 18:30</option>
            </select>
            <br>
            <p><input type="submit" value="Submit" /></p>

    </form> 
</body>
</html>

<?php

    $horario=array(
        '8:50 - 9:40'=>array('IAW','SAD','ASX','ASX','IAW'),
        '9:40 - 10:30'=>array('IAW','SAD','EEA','ASX','SRI',),
        '10:30 - 11:20'=>array('SRI','SAD','EEA','EEA','SRI',),
        '11:20 - 12:00'=>array('RECREO'),
        '12:00 - 12:50'=>array('SRI','ASO','ASO','IAW','SAD'),
        '12:50 - 13:40'=>array('ASO','ASO','IAW','IAW','SAD'),
        '13:40 - 14:30'=>array('ASX','ASO','IAW','SRI','SAD'),
        '16:00 - 16:50'=>array('','SRI','','ASO',''),
        '16:00 - 16:50'=>array('','SRI','','ASO',''),
        '16:00 - 16:50'=>array('','SRI','','ASO',''),
    );



    if(isset($_REQUEST["dia"]) || isset($_REQUEST["hora"])){
        echo "<p>Tes que escoller o dia e a hora</p>";
    }else if($dia<5 && $dia>=0 && $hora!=""){
        $dia=$_REQUEST ["dia"];
        $hora=$_REQUEST ["hora"];
        echo "<p>A hora escollida é $hora.</p>";
        echo "<p>O dia escollido é $dia</p>";
        $horarioDaHoraEscollida = $horario[$hora];
        echo "<p>Nese horario a clase é: ".
        $horarioDaHoraEscollida[$dia]."<p>";
    }else{

        echo "<p>O formato da hora ou do día non e correcto</p>";

    }



?>