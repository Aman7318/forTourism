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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Solway&display=swap" rel="stylesheet">
    <title>About Us</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            min-height: 150vh;
            background-color: aqua;
            font-family: 'Solway', serif;
        }
        section{
            position: relative;
            width: 100%;
            height: 176vh;
            background: url("temple.jpg");
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
            clip-path: circle(212vh at 50% -89vh);
            background-color: aqua;
        }
        .content{
          font-size: 75px;
          font-weight: bolder;
          
        }
        .contain{
          position: absolute;
          top: 132%;
          margin: 0px 15%;
          padding: 0;
          height: 150px;
          width: 75%;
          background-color: aqua;
          justify-content: center;
          align-items: center;
          font-size: 32px;
        }
        
    </style>
  </head>
  <body>
    <section>
        <div class="content">
            <p>About Us</p>
        </div>
    </section>
    <div class="contain">
      <p>Hey, hope you all are doing well !</p><p>I am Aman Pal and this is the demo of a tourism site. I will be very glad for your valuable feedback for this site. Please go to the <a href="Contact Us.php" class="text-decoration-none"> contact us</a> page and post your feedback.</p>
      
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