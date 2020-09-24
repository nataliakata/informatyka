<?php
$username=$_GET['username'];
$pwd=$_GET['pwd'];
$imie=$_GET['imie'];
$nazwisko=$_GET['nazwisko'];
$wiek=$_GET['wiek'];

if ($wiek<18){
    echo "Jesteś zbyt młody aby korzytać z naszych usług.";
}else{
    include("logowanie.php");
}
?>