<?php
$edad = 12;
if($edad < 18){
    echo "Eres menor de 18";
}elseif ($edad > 18 && $edad < 40) {
    echo "Eres mayor de 18";
}else {
    echo "Eres mayor de 40";
}

//Switch en php se usa para categoria debido a que compara solo como ==
$mes = 8;
switch ($mes) {
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviemre";
        break;
    case 12:
        echo "Diciembre";
        break;
    default:
        echo "Dato invalido";
        break;
}

//Estructura de control ternaria
$edad =19;
$value = $edad > 18 ? "Mayor de edad" : "Menor de edad";
echo $value;