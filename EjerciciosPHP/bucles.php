<?php
//Bucle for
echo "<br>Ciclo for <br>";
for ($i=0; $i<10; $i++){
    echo $i+1 . "<br>";
}
//Bucle while
echo "<br>Ciclo While <br>";
$i=0;
while($i < 10){
    echo "$i <br>";
    $i++;
}
//Bucle do-while
echo "<br>Ciclo Do-While <br>";
$i=5;
do{
    echo "$i <br>";
    $i++;
}while($i < 10);