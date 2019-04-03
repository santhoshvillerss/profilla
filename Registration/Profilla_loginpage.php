<?php include('logindatabase.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--- Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag ---------->

    <div class="my-0">
      <a class="navbar-brand"  href="Profilla_homepage.php"><img id="hp" class="rounded border" src="../images/news.jpg" alt="" width="45px" height="45px"></a>
      <!-- <img id="hp"  src="news.jpg" alt=""> -->
      <style media="screen">
      #hp  {
            float: left;
             margin: 5px 5px 0 5px;
             width:45px;
             height:45px;
            }
      </style>
    </div>

    <style media="screen">
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
  background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url('sports.jpg')  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
    </style>

    <section class="login-block">
        <div class="container">
      <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Login Now</h2>
            <form class="login-form" method="post">

              <?php include('username_error_list.php'); ?>

      <div class="form-group">
        <label for="exampleInputEmail1"  class="text-uppercase">Username</label>
        <input type="text" class="form-control" name="email" value="" placeholder="Example@gmail.com" >

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"  class="text-uppercase">Password</label>
        <input type="password" name="password" class="form-control" value="">
      </div>


        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Remember Me</small>
        </label>
        <button type="submit" name="login_user" class="btn btn-login float-right">Submit</button>
      </div>

    </form>
    <!-- <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div> -->
        </div>
        <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" style="height:500px;" src="../images/sports.jpg" alt="../images/sports.jpg" width="1000px;" >
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>sports</h2>
                <p>While sports are known for producing the most remarkable athletes, colorful characters, influential leaders and memorable heroes</p>
            </div>
      </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" style="height:500px;width:1000px;" src="../images/Entertainment.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>Entertainment</h2>
                <p>Latest entertainment industry news, upcoming celebrities, blockbuster movies, and hit television shows.</p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" style="height:500px;" src="../images/Politics.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>Political</h2>
                <p>Political Issues Quotes from BrainyQuote, an extensive collection of quotations by famous authors, celebrities, and newsmakers.</p>
            </div>
        </div>
      </div>
                </div>

        </div>
      </div>
    </div>
    </section>
  </body>
</html>
