<?php

    session_start();

	$email=$_POST['email'];
	$password=$_POST['password'];

	include 'connection.php';

	$q = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

	if($con->query($q))
	{
        $result = $con->query($q);
		//echo " Data Inserted";
        if($result->num_rows > 0)
        {
            header('Location: profile.php');
            $_SESSION['user'] = $email;
            //echo "data inserted";   
        }
	}
	else{
		echo "Error";
	}
?>