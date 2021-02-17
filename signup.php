<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SIGN UP</title>
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
     #signup{
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
        <h3 style="text-align:center;"><strong>Join Chit-Chat</strong></h3><hr>
        </div>
     <div class="l-part" style="text-align:center;">
       <form method="post" action="">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
             <input type="text" style="width:100%;height:20%" name="firstname" id="firstname" class="form-control" placeholder="First name" required="required">
          </div></br>
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
             <input type="text" style="width:100%;height:20%;" name="lastname" id="lastname" class="form-control" placeholder="Last name" required="required">
          </div></br> 
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input type="password" style="width:100%;height:20%" name="passwd" id="passwd" class="form-control" placeholder="Password" required="required">
          </div></br>
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="email" style="width:100%;height:20%" name="mail" id="mail" class="form-control" placeholder="Email" required="required">
          </div></br>
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
             <select name="country" style="width:100%;height:20%" id="country" class="form-control" required="required">
                <option>India</option>
                <option>Pakistan</option>
                <option>America</option>
                <option>Other</option>
            </select>
            </div></br>
            <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
             <select name="gender" style="width:100%;height:20%" id="gender" class="form-control" required="required">
               <option>Male</option>
               <option>Female</option>
               <option>Prefer not to say</option>
            </select>
          </div></br>
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             <input type="date" style="width:100%;height:10%" name="dat" id="dat" class="form-control input-md" required="required" placeholder="Birthday">
          </div></br>
          <a style="float:right text-decoration:none" data-toggle="tooltip" href="login.php">Already have an account?</a></br></br>
          <center><button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button>
          <?php include("insert_user.php");?>
          </form>
     </div>
     </div>
     </div>
</body>
</html>