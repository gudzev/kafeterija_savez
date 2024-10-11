<?php

require_once("config.php");

if($_SERVER['REQUEST_METHOD'] != "POST")
{
    header("location: ../login.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT user_id, password FROM users WHERE username = ?";

$run = $connect -> prepare($sql);
$run -> bind_param("s", $username);
$run -> execute();

$results = $run -> get_result();


if($results -> num_rows != 1)
{
    $_SESSION["error"] = "Pogrešan username!";

    header("location: ../login.php");
    exit;
}

$row = $results -> fetch_assoc();

if(password_verify($password, $row["password"]) == true)
{
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['success'] = "Login successful.";

    header('location: ../reviews.php');
    exit;
}
else
{
    $_SESSION['error'] = "Pogrešna šifra!";

    header('location: ../login.php');
    exit;
}

?>