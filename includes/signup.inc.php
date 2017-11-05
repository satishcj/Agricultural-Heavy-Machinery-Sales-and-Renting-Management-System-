<?php

if (isset($_POST['submit'])) {
   

   include_once 'dbh.inc.php';

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   //Error Handler
   if (empty($name) || empty($email) || empty($password)) {
   		header("Location: ../Registration.php?Registration=empty");
    	exit();
   } else {
   		//check if input is valid
   		if (!preg_match("/^[a-zA-z]*$/",$name )) {
   				header("Location: ../Registration.php?Registration=invalid");
   				exit();
   		} else {
   			//check if email is valid
   			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   				header("Location: ../Registration.php?Registration=email");
   				exit();
   			} else {
   				$sql = "SELECT * FROM users WHERE user_name=$name";
   				$result = mysqli_query($conn, $sql);
   				$resultcheck = mysqli_num_rows($result);
   				 if ($resultcheck > 0) {
   				 	header("Location: ../Registration.php?Registration=usertaken");
   						exit();
   				 } else {
   				 	//Hasing the password
   				 	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
   				 	//insert the user into the database
   				 	$sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$name','$email','$hashedpassword');";
   				 	mysqli_query($conn, $sql);
   				 		header("Location: ../Registration.php?Registration=success");
   						exit();
   				 }
   			}
   		}
   }
   

} else {
	header("Location: ../Registration.php");
    exit();
}