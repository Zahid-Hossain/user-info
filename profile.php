<?php
  session_start();
  
    if(isset($_SESSION['user']))
    {
        //echo "yes";
    }
    else{

        header('Location: login.php');
    }
?>
   

   <html>
    <head>
        <title>profile</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <a href="logout.php">Log out</a>
    </body>
</html>