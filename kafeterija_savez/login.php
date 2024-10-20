<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign in</title>
    
    <link rel="stylesheet" href="css/form.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<?php

session_start();

?>

<body>

<section class="background-page d-flex justify-content-center align-items-center">

    <div>
        <div class="card shadow-2-strong card-registration square-card mx-auto p-3 p-md-5" style="border-radius: 15px; max-height: 466px">
          <div class="card-body">
            <h3 class="mb-4 fs-1">Uloguj se</h3>

            <form action="functions/logInUser.php" method="post" enctype="multipart/form-data">


              <div class="mb-3">
                <input type="text" class="form-control form-control-lg fs-3" name="username" placeholder="Username" required/>
              </div>


              <div class="mb-3">
                <input type="password" class="form-control form-control-lg fs-3" name="password" placeholder="Password" required/>
              </div>


              <button class="btn w-100 mb-3 fs-4 text-white">Login</button>


              <div class="fs-5">
                <p class="mobile-p">Kafeterija Savez Login</p>
              </div>

              <?php

              if(isset($_SESSION['error']) == true)
              {
                echo "<p class=" . "'error'" . '>' .  $_SESSION['error'] . "</p>";
                unset($_SESSION["error"]);
              }

              if(isset($_SESSION['success']) == true)
              {
                echo "<p class=" . "'success'" . '>' .  $_SESSION['success'] . "</p>";
                unset($_SESSION["success"]);
              }

              ?>

            </form>

          </div>
      </div>

    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>

</html>
