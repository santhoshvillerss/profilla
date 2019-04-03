<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  <body>
    <!-- <div class='pretty p-switch p-slim'><input type='checkbox' /><div class='state p-danger'><label>Bookmark</label></div>; -->
<?php
         $user = $_POST['json'];
         $someArray = json_decode($user, true);
         $elementCount  = count($someArray);
         //print_r($elementCount);
         echo "<div style='margin-top: 100px;' class='container'>";
         for($i=0;$i<$elementCount;$i++)
         {
           if($someArray[$i]['content']!="The latest five minute news bulletin from BBC World Service.")
           {
           echo "<div class='jumbotron'>";

              echo "<div><a href='".$someArray[$i]['url']."' style='color: black;'><h1 class='display-4' align='center' style='font-size:30px;' ><strong>".$someArray[$i]['title']."</strong></h1></a></div>";
              echo "<table>
                <tr>
                  <td><img  src='".$someArray[$i]["urlToImage"]."' alt='' width='230px' height='230px' style=''></td>
                  <td><p style='font-size:20px;'>".$someArray[$i]['description']."</p></br><p>".$someArray[$i]['content']."</p></br>
                  <div  class='pretty p-switch p-slim'>
                     <input type='checkbox' id='".$someArray[$i]['description']."' onchange='Bookmark(this.id)' />
                     <div class='state p-danger'>
                         <label>Bookmark</label>
                     </div>
                 </div>
                 </td>
                </tr>
              </table>";
           echo "</div>";

           $email = "ravikumar";
           $myfile = fopen("../news/$email.txt", "r") or die("Unable to open file!");
           if ($myfile) {
               while (!feof($myfile)) {
                   $line = fgets($myfile);
                   // echo $line."</br>";
                  // echo $line." ".$someArray[$i]['description']."\n";
                    $line = trim(preg_replace('/\s\s+/', ' ', $line));
                    $line = preg_replace('~[\r\n]+~', '', $line);
                    $line = preg_replace("/[\n\r]/","",$line);
                    $line = str_replace(array("\n", "\r"), '', $line);
                   if($line==$someArray[$i]['description'])
                   {
                     // var_dump($someArray[$i]['description']);
                     // var_dump($line);
                     // echo "<br>";
                      ?>
                      <script type="text/javascript">
                         document.getElementById('<?php echo $someArray[$i]['description'] ?>').checked = true;
                      </script>
                      <?php
                   }
               }
               fclose($myfile);
           }


           }
         }
         echo "</div>";




?>
<style type="text/css">
td
{
padding:0 15px 0 15px;
}
</style>
<div id="summa">
  <script type="text/javascript">

  function Bookmark(id) {
    var reference4 = document.getElementById(id).id;
      //alert(reference4);
    if(document.getElementById(reference4).checked == true)
    {
         $.ajax({
           url:"Bookmarks.php",
           method:"POST",
           data:{reference4:reference4},
           dataType:"text",
         });
    }
    else
    {
      $.ajax({
        url:"UndoBookmarks.php",
        method:"POST",
        data:{reference4:reference4},
        dataType:"text",
      });
    }
   }
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</div>
  </body>


</html>
