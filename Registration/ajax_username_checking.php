<?php
   	$db = mysqli_connect('localhost', 'root', '', 'profilla');
     $user = mysqli_real_escape_string($db, $_POST['email_id']);
     //echo $user;
      $sql = "SELECT * FROM registration WHERE email='$user' ";
      $result = mysqli_query($db,$sql);
    //  echo mysqli_num_rows($result);
      if(mysqli_num_rows($result)>0)
      {
        echo '<span class="username">* Email id already registered</span>';
      }
      else {
        echo '<span class="username">* Email id Available</span>';
      }

 ?>
 <style media="screen">
     .username{
    color: red;
    font-size: 12px;
    }
 </style>
