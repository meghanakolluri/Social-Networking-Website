<?php 
include("includes/connection.php");
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" aria-expanded="false" ></button>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <a href="home.php" class="navbar-brand">Chit-Chat</a>
     </div>
     <div class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
           <?php
              $user=$_SESSION['$user_mail'];
              $get_user="select * from users where user_mail='$user'";
              $run_user=mysqli_query($con,$get_user);
              $row=mysqli_fetch_array($run_user);
              $user_id=$row['user_id'];
              $user_name=$row['user_name'];
              $first_name=$row['f_name'];
              $last_name=$row['l_name'];
              $describe_user=$row['describe_user'];
              $Relationship=$row['Relationship'];
              $user_pass=$row['user_pass'];
              $user_mail=$row['user_mail'];
              $user_country=$row['user_country'];
              $user_gender=$row['gender'];
              $user_birthday=$row['user_birthday'];
              $user_image=$row['user_image'];
              $user_cover=$row['user_cover'];
              $user_reg_date=$row['user_reg_date'];
              $user_status=$row['status'];
              $recovery_account=$row['recovery_account'];
              $user_posts="select * from posts where user_id='$user_id'";
              $run_posts=musqli_query($con,$user_posts);
              $posts=mysqli_num_rows($run_posts);
            ?>
            <li><a href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "$first_name";?></li>
            <li><a href='home.php'>Home</a></li>
            <li><a href='home.php'>Find People</a></li>
            <li><a href='messages.php?u_id=new'>Messages</a></li>
            <?php
               echo "
                     <li class='dropdown'>
                       <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' ariahaspopup='true' aria-expanded='false'><span class='glyphicon glyphicon-chevron-down'></span></a>
                       <ul class='dropdown-menu'>
                            <li>
                              <a href='my_post.php?u_id=$user_id'>My Posts<span class='badge badge-secondary'>$posts</span></a>
                           </li>
                           <li>
                               <a href='edit_profile.php?u_id=$user_id'>Edit Account</a>
                           </li>
                           <li role='separator' class='divider'</li>
                           <li>
                              <a href='logout.php'>Logout</a>
                           </li>

                        </ul>
                     </li>"
               ?>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class='dropdown'>
                <form class='navbar-form navbar-left' method='get' action="results.php">
                   <div class="form-group">
                     <input type="text" class="form-control" name="user_query" placeholder="search">
                  </div>
                  <button type="button" class="btn btn-info" name="search">Search</button>
               </form>
            </li>
         </ul>
      </div>
   </div>
</nav>