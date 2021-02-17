<?php
  include("includes/connection.php");
  if(isset($_POST['signup']))
  {
      $firstname = htmlentities(mysqli_real_escape_string($con,$_POST['firstname']));
      $lastname = htmlentities(mysqli_real_escape_string($con,$_POST['lastname']));      
      $pass = htmlentities(mysqli_real_escape_string($con,$_POST['passwd']));
      $email = htmlentities(mysqli_real_escape_string($con,$_POST['mail']));
      $country = htmlentities(mysqli_real_escape_string($con,$_POST['country']));
      $gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
      $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['dat']));
      $status="verified";
      $posts="no";
      $newgid=sprintf("%05d",rand(0,999999));
      $username=strtolower($firstname."_".$lastname."_".$newgid);
      $check_username_query="select user_name from users where user_mail='$email'";
      $run_username=mysqli_query($con,$check_username_query);
      if(strlen($pass)<9)
      {
          echo "<script>alert('Password should be minimum 9 characters')</script>";
          exit();
      }
      $check_email="select * from users where user_mail='$email'";
      $run_email=mysqli_query($con,$check_email);
      $check=mysqli_num_rows($run_email);
      if($check==1)
      {
          echo "<script>alert('This Email already exists.Signup with another email!!')</script>";
          echo "<script>window.open('signup.php','_self')</script>";
          exit();
      }
      $profile_pic="images/head.png";
      $insert="insert into users(f_name,l_name,user_name,describe_user,Relationship,user_pass,user_mail,user_country,gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account) 
               values ('$firstname','$lastname','$username','Hello Chit-Chat!!This is my default status','...','$pass','$email','$country','$gender','$birthday','$profile_pic','cover/cover.jpg',NOW(),'$status','$posts','Iwanttoputadingintheuniverse.')";
      $query=mysqli_query($con,$insert);
      if($query)
      {
        echo "<script>alert('Well Done! You are in')</script>";
        echo "<script>window.open('login.php','_self')</script>";
      }         
      else{
          echo "<script>alert('Registration failed!Try Again.')</script>";
          echo "<script>window.open('signup.php','_self')</script>";
      }
  }