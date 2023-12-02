<?php
$t=["Zosia", "Adam", "Andrzej", "Czarny", "Biały"];
foreach ($t as $x) 
    echo $x." ";
sort($t);
echo "<br>";
foreach ($t as $x) 
    echo $x." ";
    echo "<br>";
rsort($t);
foreach ($t as $x) 
    echo $x." ";

?>