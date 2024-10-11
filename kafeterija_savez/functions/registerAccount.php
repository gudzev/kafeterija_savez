<?php

// preventing creating of new accounts
die();

require_once("config.php");

$username = "savez";
$password = "savez";
$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username, password) VALUES(?, ?)";

$run = $connect -> prepare($sql);
$run -> bind_param("ss", $username, $encrypted_password);
$run -> execute();


?>