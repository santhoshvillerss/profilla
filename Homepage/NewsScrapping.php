<?php
$user = $_POST['json'];
$someArray = json_decode($user, true);
$elementCount  = count($someArray);
$line = "";
for($i=0;$i<$elementCount;$i++)
{
  $line = $line." ".$someArray[$i];
}
// echo $dummy;
//echo $someArray;
//print_r($elementCount);
// $line = "Thats all";
echo "
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
 <script type='text/javascript'>
 var url = 'https://newsapi.org/v2/everything?q=".$line."&apiKey=d77b6d5571b645b58069a809d441d139';
 fetch(url).then(response => {
   return response.json();
 }).then(data => {
   var json = JSON.stringify(data.articles);
   console.log(data);
         $.ajax({
 type: 'POST',
 url: 'Bookmarknews.php',
 data: {json: json},
 dataType: 'text',
         success:function(html)
         {
           $('#availability').html(html);
         }
       })
     })

 </script>";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title></title>
</head>
<body>
  <span id="availability"></span>
</body>
</html>
