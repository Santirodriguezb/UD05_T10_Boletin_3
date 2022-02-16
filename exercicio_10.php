<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form action="exercicio_10.php" method="post">
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
            $horoscopo = "";
            switch ($mes) {
                case '01':
                    if($dia<20){
                        $horoscopo = "capricornio";
                    }else {
                        $horoscopo = "acuario";
                    }
                    break;

                case '02':
                    if($dia<19){
                        $horoscopo = "acuario";
                    }else {
                        $horoscopo = "piscis";
                    }
                    break;
                case '03':
                    if($dia<20){
                        $horoscopo = "piscis";
                    }else {
                        $horoscopo = "aries";
                    }
                    break;
                case '04':
                    if($dia<20){
                        $horoscopo = "aries";
                    }else {
                        $horoscopo = "tauro";
                    }
                    break;
                case '05':
                    if($dia<22){
                        $horoscopo = "tauro";
                    }else {
                        $horoscopo = "geminis";
                    }
                    break;
                case '06':
                   if($dia<22){
                    $horoscopo = "geminis";
                   }else {
                    $horoscopo = "cancer";
                   }
                    break;
                case '07':
                    if($dia<23){
                        $horoscopo = "cancer";
                    }else {
                        $horoscopo = "Leo";
                    }
                    break;
                case '08':
                    if($dia<23){
                        $horoscopo = "Leo";
                    }else {
                        $horoscopo = "Virgo";
                    }
                    break;
                case '09':
                    if($dia<20){
                        $horoscopo = "virgo";
                    }else {
                        $horoscopo = "libra";
                    }
                    break;
                case '10':
                    if($dia<20){
                        $horoscopo = "escorpio";
                    }else {
                        $horoscopo = "sagitario";
                    }
                    break;
                case '11':
                    if($dia<21){
                        $horoscopo = "sagitario";
                    }else {
                        $horoscopo = "capricornio";
                    }
                    break;
                case '12':
                    if($dia<22){
                        $horoscopo = "capricornio";
                    }else {
                        $horoscopo = "acuario";
                    }
                    break;
            echo "O teu horoscopo é: $horoscopo";
        }
    }
    ?>
</body>
</html>