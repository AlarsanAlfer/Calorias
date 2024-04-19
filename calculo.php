<?php
$pesokg=$_POST["peso"];
$pesolibras= $pesokg*2.20462;

$objetivo=$_POST["objetivo"];
$actividad=$_POST["actividad"];
$biotipo=$_POST["biotipo"];
$KcalMin= 0;
$KcalMax=0;

if($actividad=="Sedentario"){
    if($objetivo=="Rebajar"){
        $KcalMin= $pesolibras*10;
        $KcalMax=$pesolibras*12;

    }elseif($objetivo=="Mantener"){
        $KcalMin= $pesolibras*12;
        $KcalMax=$pesolibras*14;

    }elseif($objetivo=="Aumentar"){
        $KcalMin= $pesolibras*16;
        $KcalMax=$pesolibras*18;

    }

}elseif($actividad=="Moderado/activo"){
    if($objetivo=="Rebajar"){
        $KcalMin= $pesolibras*12;
        $KcalMax=$pesolibras*14;

    }elseif($objetivo=="Mantener"){
        $KcalMin= $pesolibras*14;
        $KcalMax=$pesolibras*16;

    }elseif($objetivo=="Aumentar"){
        $KcalMin= $pesolibras*18;
        $KcalMax=$pesolibras*20;

    }

}elseif($actividad=="Muy activo"){
    if($objetivo=="Rebajar"){
        $KcalMin= $pesolibras*14;
        $KcalMax=$pesolibras*16;

    }elseif($objetivo=="Mantener"){
        $KcalMin= $pesolibras*16;
        $KcalMax=$pesolibras*18;

    }elseif($objetivo=="Aumentar"){
        $KcalMin= $pesolibras*20;
        $KcalMax=$pesolibras*22;

    }
}

$rangoKcal= $KcalMin."(Min)/ " . $KcalMax . "(Max).";

if($biotipo=="Ectomorfo"){
    $carboMin=($KcalMin*0.5)/4;
    $carboMax=($KcalMax*0.5)/4;
    $protMin=($KcalMin*0.25)/4;
    $protMax=($KcalMax*0.25)/4;
    $grasaMin=($KcalMin*0.2)/9;
    $grasaMax=($KcalMax*0.2)/9;
}elseif($biotipo=="Mesomorfo"){
    $carboMin=($KcalMin*0.4)/4;
    $carboMax=($KcalMax*0.4)/4;
    $protMin=($KcalMin*0.3)/4;
    $protMax=($KcalMax*0.3)/4;
    $grasaMin=($KcalMin*0.3)/9;
    $grasaMax=($KcalMax*0.3)/9;

}elseif($biotipo=="Endomorfo"){
    $carboMin=($KcalMin*0.25)/4;
    $carboMax=($KcalMax*0.25)/4;
    $protMin=($KcalMin*0.4)/4;
    $protMax=($KcalMax*0.4)/4;
    $grasaMin=($KcalMin*0.35)/4;
    $grasaMax=($KcalMax*0.35)/4;
}

?>


<h1>Calculo de Calorias</h1>
<h3>Dietetica y nutricion</h3>
<br>
<p><b>Peso en KGs:</b> <?php echo "$pesokg" ?> </p>
<p><b>Peso en libras:</b> <?php echo "$pesolibras" ?> </p>
<p><b>Rango Kcal:</b> <?php echo "$rangoKcal" ?> </p>
<hr>
<p>Distribucion de macronutrientes:</p>
<ul>
    <li><p>Gramos de carbohidratos: <?php echo $carboMin."(Min)/ " . $carboMax . "(Max)."; ?></p></li>
    <li><p>Gramos de proteinas: <?php echo $protMin."(Min)/ " . $protMax . "(Max)."; ?></p></li>
    <li><p>Gramos de grasa: <?php echo $grasaMin."(Min)/ " . $grasaMax . "(Max)."; ?></p></li>
</ul>  
