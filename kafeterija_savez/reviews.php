<?php

require_once("functions/config.php");

if(isset($_SESSION["user_id"]) == false)
{
    header("location: login.php");
    exit;
}

unset($_SESSION["success"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafeterija Savez - Manager Recenzija</title>

    <link rel="stylesheet" href="css/review.css">

</head>
<body class="background-color">

    <header>

        <nav>

            <ul>

                <form action="" method="post" enctype="multipart/form-data">

                    <h1 class="kriterijumi-h1">Kriterijumi za pretragu</h1>

                    <div class="parametri">
                            <div class="row">
                                <label for="ocena" class="parametri-text">Ocena:</label>
                                <select name="ocena" id="ocena" class="ocena-select">
                                    <option value="all" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "all") echo "selected"; ?>>Sve ocene</option>
                                    <option value="1" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "1") echo "selected"; ?>>★</option>
                                    <option value="2" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "2") echo "selected"; ?>>★★</option>
                                    <option value="3" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "3") echo "selected"; ?>>★★★</option>
                                    <option value="4" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "4") echo "selected"; ?>>★★★★</option>
                                    <option value="5" <?php if(isset($_POST["ocena"]) && $_POST["ocena"] == "5") echo "selected"; ?>>★★★★★</option>
                                </select>
                            </div>

                            <div class="row">
                                <button type="submit" class="btn-search">Pretraži ocene</button>
                            </div>

                    </div>

                </form>

                <form action="functions/logOut.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <button type="submit" class="btn-search">Odjavi se</button>
                        <input type='hidden' value='<?php echo $_SESSION["user_id"]; ?>' name='user_id'>
                    </div>
                </form>

            </ul>

        </nav>

    </header>

    <div class="content">

    <?php

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST["ocena"] != "all") 
{
    $ocena = $_POST["ocena"];

    $sql = "SELECT * FROM reviews WHERE rating = ?";

    $run = $connect->prepare($sql);
    $run->bind_param("s", $ocena);
    $run->execute();
    
    $results = $run->get_result();

    if ($results->num_rows > 0) 
    {
        while ($row = $results->fetch_assoc()) 
        {
            $review_id = $row["review_id"];
            $username = $row["username"];
            $rating = $row["rating"];
            $comment = $row["comment"];

            echo "
                <div class='star-row'>
                    <div class='review'>
                        <div class='review-row'>
                            <h1 class='review-h1'>Korisnik:</h1>
                            <p class='user-information'>" . htmlspecialchars($username) . "</p>
                        </div>
                
                        <div class='review-row'>
                            <h1 class='review-h1'>Ocena:</h1>
                            <div class='star-rating-comment'>";

            for ($i = 0; $i < $rating; $i++) 
            {
                echo "<p class='star'>★</p>";
            }

            echo "
                            </div>
                        </div>
                        
                        <div class='review-row'> <!-- max 120 char -->
                            <h1 class='review-h1'>Komentar:</h1>
                            <p class='user-information comment'>" . htmlspecialchars($comment) . "</p> 
                        </div>

                        <form method='POST' action='functions/deleteReview.php' enctype='multipart/form-data'>
                            <div class='review-row'>
                                <button class='delete-btn'>Obriši</button>
                                <input type='hidden' value='$review_id' name='review_id'>
                            </div>
                        </form>
                    </div>
                </div>
            ";
        }
    }
}
else
{
    $sql = "SELECT * FROM reviews ORDER BY review_id desc;";

    $results = $connect -> query($sql);

    while($row = $results -> fetch_assoc())
    {
        $review_id = $row["review_id"];
        $username = $row["username"];
        $rating = $row["rating"];
        $comment = $row["comment"];

        echo
        "
                <div class='star-row'>
        <div class='review'>
            <div class='review-row'>
                <h1 class='review-h1'>Korisnik:</h1>
                <p class='user-information'>" . $username . "</p>
            </div>
        
            <div class='review-row'>
                <h1 class='review-h1'>Ocena:</h1>
                <div class='star-rating-comment'>";

                for($i = 0; $i < $rating; $i++)
                {
                    echo "<p class='star'>★</p>";
                }

                
                echo "</div>
            </div>
            
        
            <div class='review-row'> <!-- max 120 char -->
                <h1 class='review-h1'>Komentar:</h1>
                <p class='user-information comment'>" . $comment . "</p> 
            </div>

            <form method='POST' action='functions/deleteReview.php' enctype='multipart/form-data'>
                <div class='review-row'>
                    <button class='delete-btn'>Obriši</button>
                    <input type='hidden' value='$review_id' name='review_id'>
                </div>
            </form>

        </div>
    </div>
        ";
    }
}

    ?>
        
    </div>

    <script src="js/review_load.js"></script>

</body>
</html>