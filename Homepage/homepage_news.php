<?php
 ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript">
    var url = 'https://newsapi.org/v2/everything?sources=bbc-news&apiKey=d77b6d5571b645b58069a809d441d139';
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
    <!-- <p>hello</p>
      <h1>hello</h1> -->
      <span id="availability"></span>
  </body>
</html>
