<?php

require_once("config.php");

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username = test_input($_POST["username"]);
    $rating = test_input($_POST["rating"]);
    $comment = test_input($_POST["comment"]);

    if(strlen($username) < 3)
    {
        $_SESSION["error"] = "Ime mora da sadrži bar 3 karaktera!";
        header("location: ../index.php#review-container");
        exit;
    }

    if(strlen($comment) > 120)
    {
        $_SESSION["error"] = "Komentar ne sme sadržati više od 120 karaktera!";
        header("location: ../index.php#review-container");
        exit;
    }

    $sql = "INSERT INTO reviews(username, rating, comment) VALUES(?, ?, ?)";
    $run = $connect->prepare($sql);
    $run -> bind_param("sss", $username, $rating, $comment);
    $run -> execute();

    $_SESSION["success"] = "Uspešno uneta recenzija!";
}

header("location: ../index.php#review-container");
exit;

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>