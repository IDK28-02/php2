<?php
echo"Dzisiejszy dzień ".date("d.m.y")."<br>";
$dni=["poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "NIedziela"];
echo $dni[date("N")-1];
?>