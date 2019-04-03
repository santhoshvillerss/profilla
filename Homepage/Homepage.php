<?php
session_start();
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <style media="screen">
                  body{background:url() no-repeat center/cover;font-family: 'Poppins', sans-serif; height:150vh; }
              html	{font-size:14px}

              /*  BURGER MENU
              ========================================== */
              .menu {
                width: 50px;
              height: 7px;
              position: absolute;
              z-index: 21;
              right: 1%;
              }
              .menu span {
              position: relative;
              margin-top: 9px;
              margin-bottom: 9px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              position: absolute;
              top: 50%;
              left: 50%;
              margin-left: -15px;
              margin-top: -1.5px;
              }
              .menu span, .menu span::before, .menu span::after {
              display: block;

              width: 26px;
              right: 0;
              height: 3px;
              background-color: orange;
              outline: 1px solid transparent;
              -webkit-transition-property: background-color, -webkit-transform;
              -moz-transition-property: background-color, -moz-transform;
              -o-transition-property: background-color, -o-transform;
              transition-property: background-color, transform;
              -webkit-transition-duration: 0.3s;
              -moz-transition-duration: 0.3s;
              -o-transition-duration: 0.3s;
              transition-duration: 0.3s;
              }
              .menu span::before, .menu span::after {
              position: absolute;
              content: "";
              }
              .menu span::before {
              top: -9px;
              width:20px
              }
              .menu span::after {
              top: 9px;width: 33px;

              }
              .menu.clicked span {
              background-color: transparent;
              }
              .menu.clicked span::before {
              -webkit-transform: translateY(9px) rotate(45deg);
              -moz-transform: translateY(9px) rotate(45deg);
              -ms-transform: translateY(9px) rotate(45deg);
              -o-transform: translateY(9px) rotate(45deg);
              transform: translateY(9px) rotate(45deg);    width: 33px;
              }
              .menu.clicked span::after {
              -webkit-transform: translateY(-9px) rotate(-45deg);
              -moz-transform: translateY(-9px) rotate(-45deg);
              -ms-transform: translateY(-9px) rotate(-45deg);
              -o-transform: translateY(-9px) rotate(-45deg);
              transform: translateY(-9px) rotate(-45deg);
              }
              .menu.clicked span:before, .menu.clicked span:after {
              background-color: #ffffff;
              }
              .menu:hover {
              cursor: pointer;
              }
              /*  NAV
              ========================================== */

              #nav {
              background: #211316;
              position: fixed;
              z-index: 20;
              top: 0;
              right: 0;
              height: 100%;
              max-width: 250px;
              width: 100%;
              padding: 100px 40px 60px 40px;
              overflow-y: auto;
              -webkit-transform: translateX(100%);
              -moz-transform: translateX(100%);
              -ms-transform: translateX(100%);
              -o-transform: translateX(100%);
              transform: translateX(100%);
              -webkit-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
              -moz-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
              -o-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
              transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
              }
              #nav.show {
              -webkit-transform: translateX(0px);
              -moz-transform: translateX(0px);
              -ms-transform: translateX(0px);
              -o-transform: translateX(0px);
              transform: translateX(0px);
              }
              #nav.show ul.main li {
              -webkit-transform: translateX(0px);
              -moz-transform: translateX(0px);
              -ms-transform: translateX(0px);
              -o-transform: translateX(0px);
              transform: translateX(0px);
              opacity: 1;
              }
              .menu.clicked {
              position: fixed;
              z-index: 99;
              }
              #nav.show ul.main li:nth-child(1) {
              transition-delay: 0.15s;
              }
              #nav.show ul.main li:nth-child(2) {
              transition-delay: 0.3s;
              }
              #nav.show ul.main li:nth-child(3) {
              transition-delay: 0.45s;
              }
              #nav.show ul.main li:nth-child(4) {
              transition-delay: 0.6s;
              }
              #nav.show ul.main li:nth-child(5) {
              transition-delay: 0.75s;
              }
              #nav.show ul.main li:nth-child(6) {
              transition-delay: 0.9s;
              }
              #nav.show ul.main li:nth-child(7) {
              transition-delay: 1.05s;
              }
              #nav.show ul.main li:nth-child(8) {
              transition-delay: 1.2s;
              }
              #nav.show ul.main li:nth-child(9) {
              transition-delay: 1.35s;
              }
              #nav.show .about, #nav.show .social, #nav.show ul.sub {
              -webkit-transform: translateY(0px);
              -moz-transform: translateY(0px);
              -ms-transform: translateY(0px);
              -o-transform: translateY(0px);
              transform: translateY(0px);
              opacity: 1;
              transition-delay: .85s;
              }

              @media (min-width: 667px) {
              #nav {
              padding: 120px 30px 70px 20px;
              }
              }
              #nav ul.main {
              list-style-type: none;
              }
              #nav ul.main li {
              -webkit-transform: translateX(40px);
              -moz-transform: translateX(40px);
              -ms-transform: translateX(40px);
              -o-transform: translateX(40px);
              transform: translateX(40px);
              opacity: 0;
              -webkit-transition: all 0.3s ease;
              -moz-transition: all 0.3s ease;
              -o-transition: all 0.3s ease;
              transition: all 0.3s ease;
              float: none;
                list-style: circle;
              color: #fff
              }
              #nav ul.main li:last-of-type {
              margin-bottom: 0px;
              }
              #nav ul.main li a {
              color: #ffffff;

              text-decoration: none;
              text-transform: uppercase;
              font-size: 1rem;
              display: block;
              padding: 10px 0;
              -webkit-transition: all 0.3s ease;
              -moz-transition: all 0.3s ease;
              -o-transition: all 0.3s ease;
              transition: all 0.3s ease;
              }
              #nav ul.main li a span {
              color: #b7ac7f;
              }
              #nav ul.main li a:hover {
              color: #b7ac7f;
              }
              #nav ul.sub {
              list-style-type: none;
              margin-top: 40px;
              -webkit-transform: translateY(30px);
              -moz-transform: translateY(30px);
              -ms-transform: translateY(30px);
              -o-transform: translateY(30px);
              transform: translateY(30px);
              opacity: 0;
              -webkit-transition: all 0.4s ease;
              -moz-transition: all 0.4s ease;
              -o-transition: all 0.4s ease;
              transition: all 0.4s ease;
              }
              #nav ul.sub li {
              margin-bottom: 10px;
              }
              #nav ul.sub li:last-of-type {
              margin-bottom: 0px;
              }
              #nav ul.sub li a {
              color: #ffffff;
              font-family: "Raleway", sans-serif;
              letter-spacing: 1px;
              font-size: 0.9rem;
              text-decoration: none;
              -webkit-transition: all 0.3s ease;
              -moz-transition: all 0.3s ease;
              -o-transition: all 0.3s ease;
              transition: all 0.3s ease;
              }
              #nav ul.sub li a:hover {
              color: #b7ac7f;
              }
              .menu:hover span{}

              /*  OVERLAY
              ========================================== */
              .overlay {
              position: fixed;
              top: 0;
              left: 0;
              z-index: 7;
              width: 100%;
              height: 100%;
              -webkit-transition: all 0.3s ease-in-out;
              -moz-transition: all 0.3s ease-in-out;
              -o-transition: all 0.3s ease-in-out;
              transition: all 0.3s ease-in-out;
              background-color: #603e82;
              opacity: 0;
              visibility: hidden;
              }
              .overlay.show {
              opacity: 0.8;
              visibility: visible;
              }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



              <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
          <!--- Include the above in your HEAD tag ---------->

          	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">



                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="Homepage.php"><img class="rounded border border-success" src="../images/news.jpg" alt="" width="45px" height="45px"><h1 class="lead" style="font-size: 11px; color:#003566;">PROFILLA</h1></a>


                <!-- <div class="dropdown-menu" style=" position: Absolute; top: 20px; right :0px; " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div> -->


                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

                <div class="navbar-nav ml-auto" >

                  <li style=" position: Absolute; top: 30px; right : 300px; "><a href="Bookmarks.php" class="btn btn-secondary mx-4"  data-toggle="tooltip" data-placement="bottom" title="Bookmarks"><i class="fas fa-bell"></i></a></li>


                  <li class="nav-item dropdown" style=" position: Absolute; top: 30px; right : 100px; ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo "<strong>".$_SESSION['username']."</strong>"; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                      <a class="dropdown-item" href="logout.php">LogOut <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                  </li>

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
                  <script type="text/javascript">
                  function Business(){window.location.href = "Business.php";}
                  function Sports(){window.location.href = "Sports.php";}
                  function World(){window.location.href = "World.php";}
                  function Politics(){window.location.href = "Politics.php";}
                  function Science(){window.location.href = "Science.php";}
                  function Entertainment(){window.location.href = "Entertainment.php";}
                  </script>
                <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->
                <div class="menu my-0"> <span></span> </div>
                <nav id="nav">
                    <ul class="main">
                        <li><a style="cursor: pointer;" onclick="return Business();">Business</a></li>
                        <li><a style="cursor: pointer;"  onclick="return Sports();">Sports</a></li>
                        <li><a style="cursor: pointer;"  onclick="return World();">World</a></li>
                        <li><a style="cursor: pointer;"  onclick="return Politics();">Politics</a></li>
                        <li><a style="cursor: pointer;"  onclick="return Science();">Science</a></li>
                        <li><a style="cursor: pointer;"  onclick="return Entertainment();">Entertainment</a></li>
                    </ul>
                </nav>
                <div class="overlay"></div>
                <!-- <a class="nav-item nav-link" href="#"><i class="fas fa-user"></i> Sign Up</a>
                <a class="nav-item nav-link mx-2" href="#"><i class="fas fa-sign-in-alt"></i> Login</a> -->
                <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
                </div>
                <!-- </div> -->
                </nav>



          <script>
          $('.menu, .overlay').click(function () {
          	$('.menu').toggleClass('clicked');

          	$('#nav').toggleClass('show');

          });
          </script>



          <?php
              include('homepage_news.php');
           ?>

  </body>
</html>