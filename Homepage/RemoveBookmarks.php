<?php
session_start();
$email = $_SESSION['username'];
$email = str_replace("@gmail.com","",$email);
 $txt = $_POST['reference4'];



 //
 $db = mysqli_connect('localhost', 'root', '', 'profilla');
 $query = "SELECT * FROM wishlist WHERE News='$txt' ";
 $results = mysqli_query($db, $query);
 if (mysqli_num_rows($results) == 1)
 {
       $query = "UPDATE wishlist SET Count=Count-1 WHERE News='$txt'";
       $results = mysqli_query($db, $query);
 }
 // else
 // {
 //   $count = 1;
 //   $query = "INSERT INTO wishlist (News, Count)
 //         VALUES('$txt' ,'$count')";
 //   mysqli_query($db, $query);
 // }







 $data = file("../news/$email.txt");
 $out = array();
 foreach($data as $line) {
     if(trim($line) != $txt) {
         $out[] = $line;
     }
 }
 $fp = fopen("../news/$email.txt", "w+");
 flock($fp, LOCK_EX);
 foreach($out as $line) {
     fwrite($fp, $line);
 }
 flock($fp, LOCK_UN);
 fclose($fp);
?>
