<?php

  session_start();

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

    include 'connection.php';

    $qq =  "SELECT * FROM `user` WHERE `email` = '$email'";

    if($con->query($qq))
    {
       $result = $con->query($qq);
        
       // print_r($result);
        
        if($result->num_rows > 0)
        {
            echo "You are already registered";
        }
        else
        {
            $q = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
            
            if($con->query($q))
            {
                header('Location: profile.php');
                $_SESSION["user"] = $email;	
            }
        }
    }
    else
    {
    
    }
?>