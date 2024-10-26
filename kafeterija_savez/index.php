<?php

require_once("functions/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Kafeterija Savez je kafić na Bagljašu u Zrenjaninu. Nalazimo se na mirnom mestu, nudimo pristojne cene pića i odličnu atmosferu.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Kafeterija Savez Zrenjanin</title>

    <link rel="stylesheet" href="css/main.css" media="screen">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" media="screen">

    <link rel="preload" as="image" href="images/img2.webp" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@200;400;600&family=Roboto:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">

    <script type="application/ld+json">
    {
    "@context": "https://kafeterija-savez.rf.gd/",
    "@type": "Caffee",
    "name": "Kafeterija Savez",
    "url": "https://kafeterija-savez.rf.gd/",
    "logo": "https://kafeterija-savez.rf.gd/images/logo-white.webp"
    }
    </script>


</head>
<body>

    <header>

        <nav>

            <label for="check" class="checkbtn">
                <i class="fas fa-bars" id="mobile-menu-btn"></i>
            </label>

            <a class="logo" href="index.php">
                <img src="images/logo-white.webp" alt="Logo Kafića" class="logo-image">
                Kafeterija Savez
            </a>

            <ul id="mobile-menu">
                <li><a class="active" href="#landing">Početna</a></li>
                <li><a href="#drink-container">Karta Pića</a></li>
                <li><a href="#review-container">Recenzije</a></li>
            </ul>

        </nav>

    </header>






    <section class="landing" id="landing">
    </section>






    <section class="additional-links">

        <div class="container">

            <div class="container-item">

                <img src="images/drink-white.webp" alt="Pića" class="container-item-img">

                <p class="container-item-text">
                    Uživajte u našim vrhunskim toplim napicima, svežim sokovima i kafama.
                </p>

                <a href="#drink-container" class="btn">Karta Pića</a>

            </div>

            <div class="container-item">

                <img src="images/review-white.webp" alt="Recenzije" class="container-item-img">

                <p class="container-item-text">
                    Pročitajte iskustva gostiju i podelite svoje mišljenje o nama.
                </p>

                <a href="#review-container" class="btn">Ocenite nas</a>


            </div>

            <div class="container-item">

                <img src="images/location-white.webp" alt="Lokacija" class="container-item-img">

                <p class="container-item-text">
                    Pronađite nas u mirnom delu grada, daleko od gužve.
                </p>

                <a href="#map-container" class="btn">Pronađi nas</a>
                
            </div>
        </div>

    </section>







    <section class="welcome-container" id="welcome-container">

        <div class="welcome-box">

            <div class="welcome-img" alt="Početna slika"></div>

            <div class="welcome">

                <h1 class="welcome-h1">Dobro došli</h1>

                <hr class="welcome-hr">

                <h2 class="welcome-p">
                    Uživajte u našoj ponudi ukusnih pića i prijatnom ambijentu. Radujemo se što ste ovde!
                </h2>

                <button class="btn-welcome"><a href="#drink-container" class="a-neutral-welcome">Pogledaj cenovnik</a></button>

            </div>

        </div>

    </section>






    <section class="drink-container" id="drink-container">

        <div class="drink-button-container">

            <h1 class="drink-container-menu-name">Naša karta pića</h1>

            <hr>

            <p class="drink-container-text">
                Karta pića nudi savršeno izbalansirane kafe, aromatične čajeve, osvežavajuće sokove i koktele koji će vas oduševiti.
                Uživajte u bogatom izboru vrhunskih vina, piva, i pažljivo odabranih žestokih pića za svaki trenutak opuštanja.
            </p>

                <button class="btn active-btn" onclick="openMenu(1)" id="btn-1">Kafe i topli napitci</button>
                <button class="btn" onclick="openMenu(2)" id="btn-2">Gazirani Sokovi</button>
                <button class="btn" onclick="openMenu(3)" id="btn-3">Hladni napitci</button>
                <button class="btn" onclick="openMenu(4)" id="btn-4">Piva</button>
                <button class="btn" onclick="openMenu(5)" id="btn-5">Žestoka pića</button>
                <button class="btn" onclick="openMenu(6)" id="btn-6">Vina</button>
                <button class="btn" onclick="openMenu(7)" id="btn-7">Vode</button>
                <button class="btn" onclick="openMenu(8)" id="btn-8">Energetska pića</button>



            <div class="kafe-i-topli-napitci" id="drinks-1">
                <div class="drink-row">
                    <h2 class="drink-name">Espresso</h2>
                    <h2 class="cena">120</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Cappuccino</h2>
                    <h2 class="cena">140</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Latte</h2>
                    <h2 class="cena">160</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Latte sa ukusom</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Topla čokolada</h2>
                    <h2 class="cena">200</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Čaj</h2>
                    <h2 class="cena">150</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Domaća kafa</h2>
                    <h2 class="cena">100</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Nescaffee</h2>
                    <h2 class="cena">160</h2>
                </div>
            </div>




            <div class="gazirani-sokovi hidden-drink" id="drinks-2">
                <div class="drink-row">
                    <h2 class="drink-name">Coca Cola 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Coca Cola Zero 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Fanta 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Sprite 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Schweppes 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name"></h2>
                    <h2 class="cena"></h2>
                </div>
            </div>



            <div class="hladni-napitci hidden-drink" id="drinks-3">
                <div class="drink-row">
                    <h2 class="drink-name">Cedevita</h2>
                    <h2 class="cena">160</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Limunada 0.3l</h2>
                    <h2 class="cena">160</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Limunada sa ukusom</h2>
                    <h2 class="cena">180</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Ceđena narandža 0.3l</h2>
                    <h2 class="cena">290</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Ceđena jabuka 0.3l</h2>
                    <h2 class="cena">250</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Domaći ledeni čaj</h2>
                    <h2 class="cena">200</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Next 0.2l</h2>
                    <h2 class="cena">220</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name"></h2>
                    <h2 class="cena"></h2>
                </div>

            </div>

            <div class="piva hidden-drink" id="drinks-4">

                <div class="drink-row">
                    <h2 class="drink-name">Heineken 0.25l</h2>
                    <h2 class="cena">270</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Heineken 0.4l</h2>
                    <h2 class="cena">220</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Laško 0.33l</h2>
                    <h2 class="cena">240</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Zaječarsko 0.5l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Birra Moretti točeno 0.25l</h2>
                    <h2 class="cena">180</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Birra Moretti točeno 0.5l</h2>
                    <h2 class="cena">230</h2>
                </div>
            </div>




            <div class="zestoka-pica hidden-drink" id="drinks-5">
                <div class="drink-row">
                    <h2 class="drink-name">Jack Daniels 0.03l</h2>
                    <h2 class="cena">280</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">J. Walker 0.03l</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Jameson 0.03l</h2>
                    <h2 class="cena">250</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Gorski list 0.05l</h2>
                    <h2 class="cena">170</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Vinjak 0.05l</h2>
                    <h2 class="cena">170</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Martini</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Džin 0.03l</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Votka 0.03l</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Jeger 0.05l</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Viljamovka 0.03l</h2>
                    <h2 class="cena">240</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Kajsija 0.03l</h2>
                    <h2 class="cena">200</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name"></h2>
                    <h2 class="cena"></h2>
                </div>
            </div>



            <div class="vina hidden-drink" id="drinks-6">
                <div class="drink-row">
                    <h2 class="drink-name">Belo Vino 0.2l</h2>
                    <h2 class="cena">210</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Crveno Vino 0.2l</h2>
                    <h2 class="cena">210</h2>
                </div>
            </div>



            <div class="vode hidden-drink" id="drinks-7">
                <div class="drink-row">
                    <h2 class="drink-name">Rosa</h2>
                    <h2 class="cena">160</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Rosa Gazirana</h2>
                    <h2 class="cena">160</h2>
                </div>
            </div>




            <div class="energetska-pica hidden-drink" id="drinks-8">

                <div class="drink-row">
                    <h2 class="drink-name">Ultra 0.25l</h2>
                    <h2 class="cena">190</h2>
                </div>

                <div class="drink-row">
                    <h2 class="drink-name">Red Bull 0.25l</h2>
                    <h2 class="cena">300</h2>
                </div>

            </div>

        </div>

    </section>





    <section class="review-container" id="review-container">

    <div class="bg-coffee">
        <div class="review-box">


            <form method="POST" action="functions/submitReview.php" class="review-form" enctype="multipart/form-data">

                    <div class="star-row">
                        <h1 class="star-row-h1">Ocenite naš lokal!</h1>
                    </div>

                    <div class="star-row">
                        <input type="text" name="username" class="review-input" placeholder="Vaše ime..." required>
                    </div>

                    <div class="star-row">

                        <div class="star-rating" id="star-rating">
        
                            <input type="radio" id="star5" name="rating" value="5" required />
                            <label for="star5" class="star">★</label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4" class="star">★</label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label for="star3" class="star">★</label>
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2" class="star">★</label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1" class="star">★</label>

                        </div>
                    </div>
        
                    <div class="star-row">
                        <textarea type="text" name="comment" class="review-textarea" placeholder="Vaš komentar..." required></textarea>
                    </div>

                    <div class="star-row">
                        <button type="submit" class="btn">
                            Ostavi ocenu
                        </button>
                    </div>

                    <?php
                    if(isset($_SESSION['error']))
                    {
                        echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION["error"]);
                    }
                    if(isset($_SESSION['success']))
                    {
                        echo "<p class='success'>" . $_SESSION['success'] . "</p>";
                        unset($_SESSION["success"]);
                    }
                    ?>

            </form>

        </div>
    </div>

    <div class="bg-rndm">
        <div class="review-box">

            <div class="review-flex">
                <div class="star-row">
                    <h1 class="star-row-h1">Najnovije ocene:</h1>
                </div>

                <?php

                $sql = "SELECT * FROM reviews ORDER BY review_id desc LIMIT 3;";

                $result = $connect->query($sql);

                if($result -> num_rows > 0)
                {
                    while($row = $result -> fetch_assoc())
                    {
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
                                        
                                        for($i = 0; $i < $rating; $i++) 
                                        {
                                            echo "<p class='star'>★</p>";
                                        }
                        
                                    echo "</div>
                                    </div>
                                    <div class='review-row'> <!-- max 120 char -->
                                        <h1 class='review-h1'>Komentar:</h1>
                                        <p class='user-information comment'>" . htmlspecialchars($comment) . "</p>
                                    </div>
                                </div>
                            </div>
                        ";                    
                        }
                    }
                    else
                    {
                        echo "<div class='star-row'>
                                <div class='review'>
                                    <h1 class='empty-db'>Trenutno nema recenzija!</h1>
                                </div>
                                </div>";
                    }
                ?>
            </div>
        </div>

    </section>





    <section class="map-container" id="map-container">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1212.8084278794831!2d20.37428807508697!3d45.38023858490034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475adb3b38067491%3A0x3b910d151c394aaa!2sKafeterija%20%22Savez%22!5e0!3m2!1ssr!2srs!4v1728080586712!5m2!1ssr!2srs" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location-iframe" title="Lokacija Kafića"></iframe>

        <p class="map-text">Lako nas pronađite na sledećoj adresi:</p>

        <h1 class="map-text">Milana Stanivukovića 33, Zrenjanin</h1>

    </section>






    <footer>

        <div class="instagram-div">
            <a href="https://www.instagram.com/savez.kafeterija/">
                <img src="images/instagram-white.webp" class="instagram-logo" alt="Posetite nas na Instagramu">
            </a>
        </div>

        <p>Copyright &copy; Kafeterija Savez 2024</p>

    </footer>

    <script src="js/load.js" defer></script>
    <script src="js/index.js" async></script>
    
</body>
</html>