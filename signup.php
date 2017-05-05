<?php
  session_start();

  if(isset($_SESSION['user']))
  {
      header('Location: profile.php');
  }
else{
    
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <style type="text/css">
        body
        {
                background: url('../user-info/images/meeting-cyp-2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
        }
        .signup
        {
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
        input
        {
                margin-bottom: 20px;
        }
         h3
        {
                text-transform: uppercase;
                margin-bottom: 30px;
        }
        .member
        {
                position: absolute;
                top: 30%;
                left: 15%;
/*                border: 1px solid beige;*/
                transform: translate(-40%,-15%);
                padding: 5px;
                text-align: center;
                
            
        }
        .lists
        {
            text-transform: uppercase;
            color: red;
           font-size:  20px;
        }
        h4
        {
            color: wheat;
            
        }
        li{
            text-transform: capitalize;
            text-align: center;
            background: wheat;
        }
        .up{
                text-decoration: none;
                color: #fff;
                background:#4eb74e;
                border-radius: 4px;
                padding: 7px 14px;
                margin-left: 16px;
            }
        .up:hover{
                background:#449D44;
                text-decoration: none;
                color: #fff;
            }
        @media screen and (max-width:760px){
            .member{
                position: absolute;
                top: 10%;
                left: 25%;
                transform: translate(-30%,-20%);
            }
        }
        
            
    </style>
    
    <body>
      
      
       <section class="member">
         
         <div class="dropdown">
             <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Registered Members
             <span class="caret"></span></button>
             
<!--          <h4><b>Registered Members</b></h4>-->
          
           <ul class="dropdown-menu">
              <?php
               
                   include 'connection.php';

                   $q = "SELECT * FROM `user`";

                   if($con->query($q))
                   {
                       $results = $con->query($q);

                       while($row = $results->fetch_assoc())
                       {
                           ?>
                               <li><b> <?php echo $row["name"]; ?> </b></li>
                          <?php
                       }
                   }
                   else{

                   }
               ?>
              
             
           </ul>
        </div>
       </section>
       
       
       
        <section class="signup">
           <h3><b>Sign up</b></h3>
            <form action="checksignup.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Type your name *" required>
                    <input type="email" class="form-control" name="email" placeholder="Type your email *" required>
                    <input type="password" class="form-control" name="password" placeholder="Type your password *" required>
                    <input type="submit" class="btn btn-primary pull-right" id="login" value="Sign up">
                    <p class="pull-left">Already registered?</p>
                    <a href="login.php" class="pull-left up ">Log In</a>
                </div>
            </form>
        </section>
    </body>
</html>