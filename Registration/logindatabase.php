<?php
	session_start();

	// variable declaration
	$firstname = "";
	$lastname = "";
	$email    = "";
	$password_1 = "";
	$password_2 = "";
	$phonenumber = "";
	// $gender = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'profilla');
// connect to database


	// REGISTER USER
	if (isset($_POST['reg_user']))
	{
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		if(!empty($_POST['gender'])) {

        $gender=$_POST['gender'];
			}
		$rawdate = htmlentities($_POST['date']);
    $date = date('Y-m-d', strtotime($rawdate));
		$phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);

		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if ($date=="1970-01-01") { array_push($errors, "Date is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form

		if (count($errors) == 0) {
			// $password = md5($password);
			$query = "SELECT * FROM registration WHERE email='$email' ";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1)
			{
						$username = "";
						array_push($errors, "Gmail id already registered");
		  }
		}

		if (count($errors) == 0) {
			$gcheck = substr($email, -10);
			$gcheck = strtolower($gcheck);
			if($gcheck !== "@gmail.com")
			{
				$gcount = strlen($email);
				// echo substr($email,0,$gcount-10);
				array_push($errors, "Gmail id should end with <strong>@gmail.com</strong>");
			}
		}


		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO registration (firstname, lastname, email, password, date, gender, phonenumber)
					  VALUES('$firstname','$lastname', '$email', '$password', '$date','$gender' ,'$phonenumber')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $email;

			$emailduplicate = str_replace("@gmail.com","",$email);
			$myfile = fopen("../news/$emailduplicate.txt", "a") or die("Unable to open file!");
			$emailduplicate = $emailduplicate ."\r\n";
			fwrite($myfile, $emailduplicate);
			fclose($myfile);
			// $_SESSION['success'] = "You are now logged in";

			 header('location: ../Homepage/homepage.php');
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = "";
		$password = "";
		$errors = array();
		$db = mysqli_connect('localhost', 'root', '', 'profilla');
		if(!empty($_POST['email'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
		}
		if(!empty($_POST['password'])) {
	      $password = mysqli_real_escape_string($db, $_POST['password']);
		}


		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $email;
				// $_SESSION['success'] = "You are now logged in";
				header('location: ../Homepage/homepage.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}

?>
