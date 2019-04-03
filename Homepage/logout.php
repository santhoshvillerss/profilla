<?php
//Include GP config file
session_start();

//Unset token and user data from session
unset($_SESSION['username']);


//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location: ../Registration/Profilla_homepage.php");
?>
