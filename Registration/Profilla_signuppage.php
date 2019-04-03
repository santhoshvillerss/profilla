<?php include('logindatabase.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <style media="screen">
    body {
   /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed; */
   background: url('../images/newspaper.jpg') fixed;
   /* background-color: red; */
  background-size: cover;
}

*[role="form"] {
  max-width: 530px;
  padding: 15px;
  margin: 0 auto;
  border-radius: 0.3em;
  background-color: #d6d6c2;
}

*[role="form"] h2 {
  font-family: "Times New Roman", Times, serif;
  font-size: 40px;
  font-weight: 600;
  color: #e63900;
  margin-top: 5%;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 4px;
}


    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include the above in your HEAD tag ---------->

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include the above in your HEAD tag ---------->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#email").keyup(function(){
                var email = $(this).val();
                $.ajax({
                  url:"ajax_username_checking.php",
                  method:"POST",
                  data:{email_id:email},
                  dataType:"text",
                  success:function(html)
                  {
                    $('#availability').html(html);
                  }
                });
            });
            // $('#email').keyup(function(){
            //     $('#email').css("background-color", "pink");
            // });
        });
    </script>



    <div class="my-0">
      <a class="navbar-brand"  href="Profilla_homepage.php"><img id="hp" class="rounded border" src="../images/news.jpg" alt="" width="45px" height="45px"></a>
      <!-- <img id="hp"  src="news.jpg" alt=""> -->
      <style media="screen">
      #hp  {
            float: left;
             margin: 5px 5px 0 5px;
             width:45px;
             height:45px;
            }
      </style>
    </div>
    <div class="container my-2">
                <form class="form-horizontal"  method="post" role="form">
                    <h2>Registration</h2>
                    <?php include('username_error_list.php'); ?>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="firstname" value="<?php echo $firstname; ?>" id="firstName" placeholder="First Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Gmail* </label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="<?php echo $email; ?>" id="email" placeholder="Example@gmail.com" class="form-control" name= "email">
                            <span id="availability"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" name="password_1" value="<?php echo $password_1; ?>" id="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                        <div class="col-sm-9">
                            <input type="password" name="password_2" value="<?php echo $password_2; ?>" id="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" value="<?php echo $date; ?>" id="birthDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                        <div class="col-sm-9">
                            <input type="phoneNumber" name="phonenumber" value="<?php echo $phonenumber; ?>" id="phoneNumber" placeholder="Phone number" class="form-control">
                            <span class="help-block">Your phone number won't be disclosed anywhere </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Gender</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">*Required fields</span>
                        </div>
                    </div>
                    <center><button type="submit" name="reg_user" style="background-color: #e63900; width:150px;" class="btn"><div style="color:white;">Register</div></button></center>
                </form> <!-- /form -->
            </div> <!-- ./container -->


            <script type="text/javascript">
                  //             $(function(){
                  // $.validator.setDefaults({
                  //   highlight: function(element){
                  //     $(element)
                  //     .closest('.form-group')
                  //     .addClass('has-error')
                  //   },
                  //   unhighlight: function(element){
                  //     $(element)
                  //     .closest('.form-group')
                  //     .removeClass('has-error')
                  //   }
                  // });

                  // $.validate({
                  //   rules:
                  //   {
                  //       password: "required",
                  //     birthDate: "required",
                  //     weight: {
                  //         required:true,
                  //         number:true
                  //     },
                  //     height:  {
                  //         required:true,
                  //         number:true
                  //     },
                  //     email: {
                  //       required: true,
                  //       email: true
                  //     }
                  //   },
                  //     messages:{
                  //       email: {
                  //       required: true,
                  //       email: true
                  //     }
                  //   },
                  //       password: {
                  //         required: " Please enter password"
                  //       },
                  //       birthDate: {
                  //         required: " Please enter birthdate"
                  //       },
                  //       email: {
                  //         required: ' Please enter email',
                  //         email: ' Please enter valid email'
                  //       },
                  //       // weight: {
                  //       //   required: " Please enter your weight",
                  //       //   number: " Only numbers allowed"
                  //       // },
                  //       // height: {
                  //       //   required: " Please enter your height",
                  //       //   number: " Only numbers allowed"
                  //       // },
                  //     // }
                  //
                  // });
                  });
            </script>


  </body>
</html>
