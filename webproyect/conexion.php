<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "los_perros_mas_ricos";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $db);

    return $connect;
};

?>