<?php

session_start();

$hostname = "localhost";
$user = "root";
$password = "";
$database = "kafeterija_savez";

$connect = mysqli_connect("$hostname", "$user", "$password", "$database");

if(!$connect)
{
    die("". mysqli_connect_error());
}

?>