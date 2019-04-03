<?php
session_start();
$email = $_SESSION['username'];
$email = str_replace("@gmail.com","",$email);
 ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Homepage.php"><img class="rounded border border-success" src="../images/news.jpg" alt="" width="45px" height="45px"><h1 class="lead" style="font-size: 11px; color:#003566;">PROFILLA</h1></a>
  </nav>
  </body>
</html>
<?php
$myfile = fopen("../news/$email.txt", "r") or die("Unable to open file!");
if ($myfile) {
    $i = 0;
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $line = preg_replace('~[\r\n]+~', '', $line);
        if($i==1 && $line==false)
        {
          echo "<div style='margin-top: 100px;' class='container'>";
          echo "<div class='jumbotron'>";
          echo "<center><h1>NO BOOKMARKS</h1></center>";
          echo "</div>";
          echo "</div>";
        }
        if($i!=0 && $line==true)
        {
        //   echo var_dump($line);
          echo "<div style='margin-top: 100px;' class='container'>";
          echo "<div class='jumbotron'>";
             echo "<div><a id='one' href='keywords.php?id=".$line."'   onchange='Bookmark(this.id)' style='color: black;'><h1 class='display-4' align='center' style='font-size:30px;' ><strong>".$line."</strong></h1></a></div>";
             echo "<div  class='my-2 pretty p-switch p-slim'>
                    <input type='checkbox' checked id='".$line."' onchange='Bookmark(this.id)' />
                    <div class='state p-danger'>
                        <label>Wishlist</label>
                    </div>
                </div>";
          echo "</div>";
          // <a href="#" data-json="{ 'id':'1', 'foo':'bar', 'something':'else' }">Click</a>



          echo "</div>";
        }
        $i++;
    }
    fclose($myfile);
}
?>
<script type="text/javascript">

function Bookmark(id) {
  var reference4 = document.getElementById(id).id;
  //  alert(reference4);
  if(document.getElementById(reference4).checked == true)
  {
       $.ajax({
         url:"MakeBookmarks.php",
         method:"POST",
         data:{reference4:reference4},
         dataType:"text",
       });
  }
  else
  {
    $.ajax({
      url:"RemoveBookmarks.php",
      method:"POST",
      data:{reference4:reference4},
      dataType:"text",
    });
  }
 }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
