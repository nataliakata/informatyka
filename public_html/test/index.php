<?php
if(isset($_GET['a']) AND isset($_GET['b']) AND isset($_GET['c'])){
    if(is_numeric($_GET['a']) AND is_numeric($_GET['b']) AND is_numeric($_GET['c'])){
        include("result.php");
    }
    else{
        $error = "Błąd przy wprowadzaniu danych.";
        include("error.php");
    }
}
else{
    include("form.php");
}



?>