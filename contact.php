<?php
if($_POST["message"]) {
    mail("jamesadamchambers@btinternet.com", "Form to email message", $_POST["message"], "From: jamesadamchambers@btinternet.com");
}
?>

<html>
  
  <head>
    <title>Causeway Coast Mini Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo|Open+Sans+Condensed:300">
    <link rel="stylesheet" href="css/styles.css">
    <style>
      .fa {
                                                                padding: 20px;
                                                                font-size: 30px;
                                                                width: 70px;
                                                                text-align: center;
                                                                text-decoration: none;
                                                                margin: 5px 2px;
                                                                border-radius: 50%;
                                                              }
                                                              
                                                              .fa:hover {
                                                                  opacity: 0.7;
                                                              }
                                                              
                                                              .fa-facebook {
                                                                background: #3B5998;
                                                                color: white;
                                                              }
                                                              
                                                              .fa-twitter {
                                                                background: #55ACEE;
                                                                color: white;
                                                              }
                                                              
                                                              .fa-youtube {
                                                                background: #bb0000;
                                                                color: white;
                                                              }
                                                              
                                                              .fa-flickr {
                                                                background: #f40083;
                                                                color: white;
                                                              }
                                                                    body {
                                                                                font: 20px Open Sans Condensed, sans-serif;
                                                                                line-height: 1.8;
                                                                                color: #f5f6f7;
                                                                            }
                                                                            p {font-size: 16px;}
                                                                            .margin {margin-bottom: 45px;}
                                                                            .bg-1 { 
                                                                                background-color: #1abc9c; /* Green */
                                                                                color: #ffffff;
                                                                            }
                                                                            .bg-3 { 
                                                                                background-color: #e8ecf8; /* Light Blue */
                                                                                color: #555555;
                                                                            }
                                                                            .bg-2 { 
                                                                                background-color: #ffffff; /* White */
                                                                                color: #555555;
                                                                            }
                                                                            .bg-4 { 
                                                                                background-color: #f8f8f8; /* Black Gray */
                                                                                color: #555555;
                                                                            }
                                                                            .container-fluid {
                                                                                padding-top: 70px;
                                                                                padding-bottom: 70px;
                                                                            }
                                                                            .navbar {
                                                                                padding-top: 15px;
                                                                                padding-bottom: 15px;
                                                                                border: 0;
                                                                                border-radius: 0;
                                                                                margin-bottom: 0;
                                                                                font-size: 20px;
                                                                                letter-spacing: 5px;
                                                         
                                                                            }
                                                                            .navbar-nav  li a:hover {
                                                                                color: #1abc9c !important;
                                                                       
                                                                            }
                                                              
                                                     				.nav-text {
                                                                              margin-top: 45px;
                                                                            }
                                              
                                              .nav-text-box {
                                                padding-right: 20px;
                                              }
              
              .black-text {
                color: black;
              }
    </style>
  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html"><img src="images\logo.png" alt="Logo" height="100" width="100" class="logo"></a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
          <ul class="list-inline nav-text navbar-nav text-right navbar-right">
            <li class="">
              <a href="index.html" class="nav-text-box">HOME </a>
            </li>
            <li>
              <a href="ccmc_weekend.html" class="nav-text-box">CAUSEWAY COAST MINI WEEKEND</a>
            </li>
            <a href="#">
            </a>
            <li>
              <a href="#">
              </a>
              <a href="#" class="nav-text-box">CALENDAR</a>
            </li>
            <li>
              <a href="about.html" class="nav-text-box">ABOUT</a>
            </li>
            <li>
              <a href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Footer -->
    <div class="section bg-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Contact Us</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-left">If you find out more about us then do not hesitate to get in touch. You
              can do this in a number of ways including using the contact us form below
              or visiting or by visitng our Facebook page which is linked at the bottom
              of the page
              <br>
              <br>
              <br>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <center></center>
          </div>
        </div>
        <center>
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal text-center" role="form" action="contact.php" method="GET">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-default btn-lg">Submit</button>
              </form>
            </div>
          </div>
        </center>
      </div>
    </div>
    <footer class="container-fluid bg-4 text-center">
      <a href="www.facebook.com/northernminis" class="fa fa-5x fa-facebook">
      </a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-flickr"></a>
      <h4>© Causeway Coast Mini Club</h4>
    </footer>
  </body>

</html>