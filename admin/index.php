
<?php
session_start();
include_once('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include_once('../head-panal.php'); ?>
  </head>
  <body>
    <div class="blog-masthead">
        <h1 style='padding-top: 15px;padding-left: 15px;color:white;'>Admin panal</h1>

          <div class="container">

            <nav class="blog-nav" style="float:right;">
                <a class="blog-nav-item" href="../index.php">Home</a>
              <a class="blog-nav-item" href="dashboard.php">Dashboard</a>

              <a class="blog-nav-item" href="../about.php">About</a>
              <a class="blog-nav-item" href="logout.php" >  <h5 style=" color:white; font-family: Roboto, Arial, sans-serif;">logout</h5></a>
            </nav>

          </div>
        </div>
    <div class="container" style="margin-top:200px;margin-left:400px;">

       <form class="form-group" method="post" action="vlogin.php">
         <h2 class="form-group-heading">Please log in</h2>
         <label>user name</label>
         <input type="text"  name='user' style="width: 400px;"class="form-control" placeholder="username"  autofocus><br>
        <div class='form-group'>
           <label>Password</label>
         <input type="password"  name='pass' style="width: 400px;" class="form-control" placeholder="Password" >
</div>
         <button class="btn btn-primary" type="submit">Sign in</button>
       </form>
      <?php if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        SESSION_DESTROY();
      } ?>

     </div> <!-- /container -->
   <?php include_once('../script-panal.php'); ?>
  </body>
  </html>
