<?php
$miasto1=$_GET['miasto1'];
$miasto1=$_GET['miasto2'];


date_default_timezone_set("Poland/Warsaw");

echo "Odległość wynosi ". $odl = 50 ." km.";
echo "Koszt w jedną stronę". $cena= $odl * 2.08 ."zl.\n";
echo date("l,d.m.Y").", godzina ". date("H:i");
?>