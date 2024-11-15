<?php
//Arrays: no son propios de php
echo "<br>Array Indexado <br>";
//Arrays indexados: se usan los indices para acceder a su informacion. dese 0
$array = [1,2,3,4];
$array[] = "Carlos";
echo $array[0];
echo $array[4];
//Arrays asociativos: funciona mediantes keys
echo "<br>Array asociativo <br>";
$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];
echo $beer["name"];
//Foreach: recorre arrays
echo "<br>Foreach <br>";
foreach ($beer as $k => $v){
    echo $k. " " . $v . ";";
};
//Arrays Multidimencional
echo "<br>Array Multidimencional <br>";
$beers = [
    ["name" => "Erdinger", "alcohol" => 8.5, "country" => "Alemania"],
    ["name" => "Poker", "alcohol" => 1.0, "country" => "Colombia"]
];
echo $beers[1]["name"] . "<br>";
foreach ($beers as $beerss) {
    foreach ($beerss as $k => $v) {
        echo $v . "<br>";
    }
}


//Funciones Arrays
echo "<br>Funciones con Array<br>";
$beers2 = [
    "Poker", "Aguila", "Cubcolombia"
];
array_push($beers2, "Karmeliten");
echo count($beers2);
print_r($beers2);
echo "<br>";
$beerMixed = array_merge($beers, $beers2);
print_r($beerMixed);


// Función para calcular el área de un rectángulo
function calcularArea(float $base, float $altura = 10): float{
    return $base * $altura;
}
$area1 = calcularArea(5, 8);
echo "Área 1: " . $area1 . "\n";

$area2 = calcularArea(5);
echo "Área 2: " . $area2 . "\n";

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}