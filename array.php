<?php

$frutas = array("laranja", "maça", "banana", "caju", "melancia", "uva", "graviola");

echo "<h3>Array original: <br><br></h3>";

foreach ($frutas as $fruta) {
    echo "$fruta<br>";
}

echo "<br><br>";




//CRESCENTE
echo "<h3>Array Ordenado:</h3> <br><br>";

// ordem alfabética
sort($frutas);
foreach($frutas as $fruta){
    echo "$fruta<br>";
}

echo "<br>";



//DECRESCENTE
echo "<h3>Array Decrescente</h3> <br> <br>";
rsort($frutas);
foreach($frutas as $fruta){
	echo"$fruta<br>";
}

?>
