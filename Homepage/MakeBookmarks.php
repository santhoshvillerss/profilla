<?php
session_start();
$txt = $_POST['reference4'];

$db = mysqli_connect('localhost', 'root', '', 'profilla');
$query = "SELECT * FROM wishlist WHERE News='$txt' ";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1)
{
      $query = "UPDATE wishlist SET Count=Count+1 WHERE News='$txt'";
      $results = mysqli_query($db, $query);
}
else
{
  $count = 1;
  $query = "INSERT INTO wishlist (News, Count)
        VALUES('$txt' ,'$count')";
  mysqli_query($db, $query);
}



$email = $_SESSION['username'];
$email = str_replace("@gmail.com","",$email);
$myfile = fopen("../news/$email.txt", "a") or die("Unable to open file!");
//echo $txt;
$txt = $txt ."\r\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
