<?php

require_once("config.php");

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $review_id = $_POST["review_id"];

    $sql = "DELETE FROM reviews WHERE review_id = ?";

    $run = $connect -> prepare($sql);
    $run -> bind_param("i", $review_id);
    $run -> execute();

    $_SESSION["success"] = "Uspešno ste obrisali recenziju!";
}

header("location: ../reviews.php");
exit;

?>