<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form action="exercicio_10.2.php" method="post">
            <label for="dia">Dia</label>
            <p><input type="number" min="1" max="31" name="dia"/></p>
            <label for="mes">Mes</label>
            <select name="mes">
            <option value="01">Xaneiro</option>
            <option value="02">Febreiro</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Xuño</option>
            <option value="07">Xullo</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Decembro</option>
            </select>
        <br>
            <p><input type="submit" value="Enviar" /></p> 
    </form>
    <?php
        if(!isset($_REQUEST['dia']) || !isset($_REQUEST['mes'])){
            echo "<p>Tes que escoller o dia e o mes</p>";
        } else{
            $mes=$_REQUEST['mes'];
            $dia=$_REQUEST['dia'];

            $dataconsultada = mktime(0,0,0,intval($mes),intval($dia));

            $calendariohoroscopo = array(
                mktime(0,0,0,1,20) => "capricornio",
                mktime(0,0,0,2,19) => "acuario",
                mktime(0,0,0,3,21) => "piscis",
                mktime(0,0,0,4,20) => "aries",
                mktime(0,0,0,5,22) => "tauro",
                mktime(0,0,0,6,22) => "geminis",
                mktime(0,0,0,7,23) => "cancer",
                mktime(0,0,0,8,24) => "leo",
                mktime(0,0,0,9,23) => "virgo",
                mktime(0,0,0,10,23) => "libra",
                mktime(0,0,0,11,21) => "escorpio",
                mktime(0,0,0,12,22) => "sagitario",
            );


            $horoscopo = "";
            
            foreach ($calendariohoroscopo as $marcaTempo => $signohoroscopo) {
                if($dataconsultada<$marcaTempo && $horoscopo == ""){
                    $horoscopo = $signohoroscopo;
                }
            }

            if($horoscopo == ""){
                $horoscopo = "capricornio";
            }
                echo "<p>O teu horoscopo é: $horoscopo</p>";

    }

    ?>
</body>
</html>