<?php
//Funtion: no distinguen entre mayusculas o minusculas
echo "<br>Funtion <br>";
hi("Carlos");
hi("Alberto");
function hi($name){
    echo "Hola $name<br>";
}
echo AdD(11,20);
function add(int $a, int $b): int{
    return $a + $b ;
}
//Funtion.php:
echo "<br>Funtion de PHP <br>";
echo strtoupper("hola mundo");
echo strlen("hola mundo");
