<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Chit-Chat</title>
</head>
<style>
   body{
       overflow-x:hidden;
   }
   #signup
   {
       width:60%;
       border-radius:30px;
       border:1px solid #1da1f2;

   }
   #login
   {
       width:60%;
       border-radius:30px;
       color:#1da1f2;
       background-color:#fff;
       
   }
   #login:hover
   {
       width:60%;
       border-radius:30px;
       color:#1da1f2;
       background-color:#fff;
       border:2px solid #1da1f2;
       
   }
   </style>
<body>
    <div class="row">
       <div style="background-color:darkgray;padding-bottom:20px;border:1px solid gray" class="col-sm-12">
           <div class="no1">
               <center><h1 style="font-size:400%;color:black"><b><i>Chit-Chat</i></b></h1></center>
            </div>
        </div>
    </div>
    <div style="background-color:black" class="row">
      <div style="padding-left:0.5%;padding-top:5px" class="col-sm-6" width=50%>
         <img src="images/mainpage.jpg" alt="photo" width=600px height=100%>
      </div>
      <div class="col-sm-6" width=50%>
       <h2 style="color:gray"><b>Join Chit-Chat today and connect to people across the Globe!!</b></h2>
       <br>
       <form method="post" action="">
          <button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button></br></br>
          <?php
              if(isset($_POST["signup"]))
              {
                  echo "<script>window.open('signup.php','_self')</script>";
              }
          ?> 
          <button id="login" class="btn btn-info btn-lg" name="login">Login</button></br></br>
          <?php
              if(isset($_POST["login"]))
              {
                  echo "<script>window.open('login.php','_self')</script>";
              }
          ?>
    </div>

</body>
</html>