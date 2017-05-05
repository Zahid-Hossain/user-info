<?php
  session_start();

  if(isset($_SESSION['user']))
  {
      header('Location: profile.php');
  }
  else
  {
      
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <style type="text/css">
            body{
                background: url('../user-info/images/pexels-photo-115045.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }
            .user{
                text-align: center;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 500px;
                background: rgba(164, 165, 165, 0.58);
                padding: 40px;
                border: 1px solid beige;
            }
            input{
                margin-bottom: 20px;
            }
            h3{
                text-transform: uppercase;
                margin-bottom: 30px;
            }
            .up{
                text-decoration: none;
                color: #fff;
                background:#2b73b1;
                border-radius: 4px;
                padding: 7px 14px;
                margin-left: 16px;
            }
            .up:hover{
                background:#286090;
                text-decoration: none;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <section class="user">
           <h3><b>Log in</b></h3>
            <form action="checklogin.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email *" name="email" required>
                    <input type="password" class="form-control" placeholder="Enter your password *" name="password" required>
                    <input type="submit" class="btn btn-success pull-right" id="login" value="Log In">
                    <p class="pull-left">Not member yet?</p>
                    <a href="signup.php" class="pull-left up ">Sign up</a>
                    
                </div>
                
            </form>
        </section>
    </body>
</html>