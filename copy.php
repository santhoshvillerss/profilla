<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  <body>
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
                  <div id='".$someArray[$i]['description']."' onclick='myFunction1(this.id)' class='pretty p-switch p-slim'>
                     <input type='checkbox' />
                     <div class='state p-danger'>
                         <label>Bookmark</label>
                     </div>
                 </div>
                 </td>
                </tr>
              </table>";
           echo "</div>";
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
  </body>
</html>
