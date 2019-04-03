<?php
  session_start();
 ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
       var url = 'https://newsapi.org/v2/top-headlines?sources=business-insider&apiKey=d77b6d5571b645b58069a809d441d139';
    
    // var url = 'https://newsapi.org/v2/top-headlines?' +
    //         'sources=bbc-news&' +
    //         'apiKey=d77b6d5571b645b58069a809d441d139';
    // Replace ./data.json with your JSON feed
    fetch(url).then(response => {
      return response.json();
    }).then(data => {
      // Work with JSON data here
      var json = JSON.stringify(data.articles);
      console.log(data);
            $.ajax({
    type: 'POST',
    url: 'BBCnews.php',
    data: {json: json},
    dataType: 'text',
            success:function(html)
            {
              $('#availability').html(html);
            }
})
.done( function( data ) {
    console.log('done');
    //console.log(data);
})
.fail( function( data ) {
    console.log('fail');
    console.log(data);
});
      //window.alert("helo");
    }).catch(err => {
      // Do something for an error here
    });
    </script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
                     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

                     <div class="navbar-nav ml-auto" >

                       <li style=" position: Absolute; top: 30px; right : 300px; "><a href="Bookmarks.php" class="btn btn-secondary mx-4"  data-toggle="tooltip" data-placement="bottom" title="Bookmarks"><i class="fas fa-bell"></i></a></li>


                       <li class="nav-item dropdown" style=" position: Absolute; top: 30px; right : 100px; ">
                         <a class="nav-link dropdown-toggle" style="font-size: 13px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo "<strong>".$_SESSION['username']."</strong>"; ?>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <!-- <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <div class="dropdown-divider"></div> -->
                           <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                           <a class="dropdown-item" style="font-size: 13px;" href="logout.php">LogOut <i class="fas fa-sign-out-alt"></i></a>
                         </div>
                       </li>

                </nav>
    <!-- <p>hello</p>
      <h1>hello</h1> -->
      <span id="availability"></span>
  </body>
</html>
