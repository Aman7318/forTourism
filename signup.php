<?php
include "nav.php";
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
            margin: 0% 10%;
            width: 80%;
            background: none;
            color: #110a0a;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }
        .container .row{
            width: 100%;
        }

        .container form {
            width: 100%;
        }

        .form-label {
            font-size: 22px;
            font-family: 'Cabin', sans-serif;
        }

        .container .msg {
            font-size: 50px;
            font-weight: bold;
            color: whitesmoke;
            padding: 15% 0%;
        }
        .container .log{
            font-size: 24px;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <!-- The video -->
    <video autoplay muted loop id="myvideo">
        <source src="vid2.mp4" type="video/mp4">
    </video>

    <!-- Optional: some overlay text to describe the video -->
    <div class="container bg-none">
        <div class="row">
            <div class="msg col">
                <p>Stay connected to be <br>Updated</p>
            </div>
            <div class="col">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control bg-transparent" name="name" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control bg-transparent" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control bg-transparent" name="pass" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Re-type Password</label>
                        <input type="password" class="form-control bg-transparent" name="repass" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
                <p class="log">Already a member? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
    <?php
        include "dbconnect.php";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['pass'] == $_POST['repass']){
                $name = $_POST['name'];
                $mail = $_POST['email'];
                $password = $_POST['pass'];
                $sql = "SELECT * FROM `register` WHERE `email` = '$mail'";
                $result = mysqli_query($conn, $sql);
                $rowcount=mysqli_num_rows($result);
                if($rowcount>0){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Already Registered!</strong> ('.$mail.') already exist you can login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
                else{
                    $sql = "INSERT INTO `register` (`name`, `email`, `password`) VALUES ('$name', '$mail', '$password');";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Registered successfully!</strong> Now you can log in.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    }
                    else{
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Error ocured!</strong> due to
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'.$mysqli_error($result);
                    }
                }
            }
            else{
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Ooops!</strong> Passwords do not matched.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }
        }
    ?>

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