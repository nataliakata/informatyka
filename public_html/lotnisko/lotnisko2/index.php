<?php
$db_conn = mysqli_connect('localhost','root', 'root', 'bilety');

if(!db_conn){
    echo "Nie moge sie polaczyc";
}else{
    echo "wszystko ok";
    $sql_query="SELECT id, city_name, city_latitude, city_longitude FROM Cities";
    $sql_result = mysqli_query($db_conn, $sql_query);

    print
}