<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>LOGIN</title>
</head>
<style>
     body{
         overflow-x:hidden;
     }
     .main_content{
         text-align:center;
         width:50%;
         height:40%;
         margin:10px auto;
         background-color:lightgray;
         border:2px solid gray;
         padding:40px 50px;
     }
     .header{
         border:0px solid #000;
         margin-bottom:5px;
     }
     #login{
         width:60%;
         align:center;
         border-radius:30px;
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
    <div class="row">
     <div class="col-sm-12">
     <div class="main_content">
     <div class="header">
        <h3 style="text-align:center;"><strong>Welcome back!!</strong></h3><hr>
    </div>
    <div class="l-part">
       <form action="" method="post">
       <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="email" style="width:100%;height:20%" name="mail" class="form-control" placeholder="Email" required="required">
          </div></br>
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input type="password" style="width:100%;height:20%;" name="passwd" class="form-control" placeholder="Password" required="required">
          </div></br>  
          <a style="float:left;text-decoration:none" href="forgot_password.php" data-toggle="tooltip" title="Reset Password">Forgot?</a>
          <a style="float:right;text-decoration:none" data-toggle="tooltip" href="login.php">Don't have an account?</a></br></br>
          <center><button id="login" class="btn btn-info btn-lg" name="login">Login</button>
         <?php include("signedin.php"); ?> 
</form>
</div>
</div>
</div>
</div>
</body>
</html>