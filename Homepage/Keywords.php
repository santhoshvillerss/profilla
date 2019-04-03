<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

  <body>

    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Bookmarks.php"><img class="rounded border border-success" src="../images/news.jpg" alt="" width="45px" height="45px"><h1 class="lead" style="font-size: 11px; color:#003566;">PROFILLA</h1></a>
    </nav> -->
    <div id="availability">

    </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <?php
      $line = $_GET['id'];
      //echo $line;
      echo '
      <script type="text/javascript">
      $( document ).ready(function() {
      $.ajax({
           url: "http://api.cortical.io/rest/text/keywords?retina_name=en_associative",
           method: "POST",
           contentType: "application/json",
           headers: {"api-key": "b0102210-27d7-11e9-bb65-69ed2d3c7927" },
           processData: false,
           data: "'.$line.'",
           success:function(data){
                var json = JSON.stringify(data);
                console.log(data);
                      $.ajax({
              type: "POST",
              url: "NewsScrapping.php",
              data: {json: json},
              dataType: "text",
                      success:function(html)
                      {
                        $("#availability").html(html);
                      }
            });
          }
        });
        });
      </script>';
      ?>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
