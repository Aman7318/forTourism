<?php
include "nav.php";
include "dbconnect.php";
session_start();
if(isset($_SESSION['username'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Already logged in!</strong> '.$_SESSION['username'].' is logged in, please log out for another login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
}
else{
    session_unset();
    session_destroy();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT name, password FROM register WHERE email = '$mail';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($pass == $row['password']){
            session_start();
            $_SESSION['username'] = $row['name'];
            header("location:index.php");
        }
        else{
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Ooops!</strong> Wrong Password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login | Sign up</title>
    <style>
        /* Style the video: 100% width and height to cover the entire window */
        #myVideo {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
        /* Add some content at the bottom of the video/page */
        .container {
            position: absolute;
            display: flex;
            flex-direction: column;
            top: 24%;
            right: 7%;
            width: 35%;
            background: none;
            color: #110a0a;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }
        .container form {
            width: 100%;
        }
        .form-label {
            font-size: 22px;
            font-family: 'Cabin', sans-serif;
        }
    </style>
</head>
<body>
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="vid1.mp4" type="video/mp4">
    </video>
    <!-- Optional: some overlay text to describe the video -->
    <div class="container bg-none">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control bg-transparent" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control bg-transparent" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>