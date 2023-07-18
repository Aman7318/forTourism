<?php
include "nav.php";
session_start();
if (isset($_SESSION['username'])) {
  session_unset();
  session_destroy();
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Bye !</strong> you are logged out, <a href="login.php">login</a> again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
} else {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Ohh!</strong> You were not logged in, <a href="login.php">login</a> now.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
// header("location:login.php");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>logged out</title>
  <style>
    .container::before {
      content: "";
      background: url("bye.jpg") no-repeat center center/cover;
      position: absolute;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100%;
      z-index: -1;
    }

    .container p {
      font-size: 92px;
      font-weight: bold;
      color: blue;
      margin: 50px 0px;
      padding: 0 23%;
    }
  </style>
</head>

<body>
  <div class="container">
    <p>See you Soon !</p>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>