<?php
include "nav.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <title>Travel | Tourism</title>
    <style>
      body{
        background-color: #97c4a1;
      }
        .welc{
            font-size: 3.5rem;
            position: absolute;
            left: 10px;
            bottom: 35%;
            text-shadow: 2px 3px yellowgreen;
        }
        header::before{
            background: url("front2.jpg") no-repeat center center/cover;
            content: "";
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 62%;
            z-index: -1;
        }
        .cards{
          position: absolute;
          top: 62%;
          bottom: -2%;
          display: block;
        }
        section{
          width: 100vw;
          display: block;
        }
        .img-fluid{
          height: 160px;

        }
        .card-body{
          margin-top: -16px;
          margin-bottom: -14px;
        }
        .check{
          font-size: 17px;
          font-weight: bold;
          margin: 0.2rem;
          padding: 0px;
        }
        .card-title {
          margin-bottom: 0rem;
        }
        .cardlink{
          text-decoration: none;
          
        }
    </style>
  </head>
  <body>
    <header>
      <?php
      if(isset($_SESSION['username'])){
        echo '<h1 class="fw-bold text-white">Nice to see you here <p class="fw-bolder">'.$_SESSION['username'].'</p></h1>
              <p class="welc fw-bold text-light">Welcome to the World of Tourism !</p>';
      }
      else{
        echo '<p class="welc fw-bold text-light">Welcome to the World of Tourism !</p>';
      }
      ?>
      </header>
    <!-- Optional JavaScript; choose one of the two! -->

    <section class="cards bg-success p-2 text-dark bg-opacity-25">
      <div class="container">
          <div class="row">
              <div class="col-6">
                  <h4 class="check mb-2">Click on your Favourite Country to check about it.</h4>
              </div>
              <div class="col-6 text-right">
                  <a class="btn btn-primary btn-sm mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="btn btn-primary btn-sm" href="#carouselExampleIndicators2" role="button" data-slide="next">
                      <i class="fa fa-arrow-right"></i>
                  </a>
              </div>
              <div class="col-12">
                  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
  
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="row">
  
                                  <div class="col-md-4 mb-0">
                                    <a href="https://www.holidify.com/places/dubai" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="dubai.jpg" >
                                          <div class="card-body">
                                              <h5 class="card-title">Dubai</h5>
                                              <p class="card-text">Dubai is a city and emirate in the United Arab Emirates known for luxury, ultramodern architecture.</p>
  
                                          </div>
  
                                      </div>
                                    </a>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.planetware.com/italy/best-places-to-visit-in-italy-i-1-37.htm" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="italy.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">Italy</h5>
                                              <p class="card-text">Italy, a European country with a long Mediterranean coastline, has left a powerful mark on Western culture.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.thrillophilia.com/countries/japan" class="cardlink text-dark" target="_blank">
                                      <div class="card"5>
                                          <img class="img-fluid" alt="100%x280" src="japan.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">Japan</h5>
                                              <p class="card-text">Japan, island country lying off the east coast of Asia. It consists of a great string of islands.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
  
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row">
  
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.tripadvisor.in/Tourism-g293953-Maldives-Vacations.html" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="maldives.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">Maldives</h5>
                                              <p class="card-text">Maldives  is an archipelagic country in the Indian subcontinent of Asia, situated in the Indian Ocean.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.holidify.com/places/paris/" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="paris.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">Paris</h5>
                                              <p class="card-text">Latin Quarter, it is 5th arrondissement is home to the Sorbonne university and student-filled cafes.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.myswitzerland.com/en-in/" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="switzerland.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">Switzerland</h5>
                                              <p class="card-text">It is a landlocked country at the confluence of Western and Southern Europe.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
  
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="row">
  
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.gousa.in/" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="usa.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">USA</h5>
                                              <p class="card-text">The United States of America, is a country primarily located in North America.</p>
  
                                          </div>
  
                                        </a>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.tourism-of-india.com/" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="hotel taj.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">India</h5>
                                              <p class="card-text">India, is a country in South Asia. It is the seventh-largest country by area.</p>
  
                                          </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <a href="https://www.londontourism.ca/" class="cardlink text-dark" target="_blank">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="london.jpg">
                                          <div class="card-body">
                                              <h5 class="card-title">London</h5>
                                              <p class="card-text">London, is a 21st-century city with history stretching back to Roman times.</p>
                                          </div>
                                      </div>
                                  </div>
                                </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>