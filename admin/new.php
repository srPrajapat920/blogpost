<?php session_start();?>
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
        </div><br>

    <div class='container'>
<h1>New post</h1><br>
  <form action="vnew.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <labal><h4>Enter title</h4></labal><br>
    <input type='text' name='title' class='form-control'/><br>
    <labal><h4>Enter discription</h4></labal><br>
    <textarea name="sdec" class='form-control' ></textarea><br>
    <labal><h4>Chose file</h4></labal><br>
    <input type='file' name="image" class='form-control-file'/><br>
    <input  type="submit" class="btn btn-primary" value="submit"/>

</div>
  </form>
  <?php
  if(isset($_SESSION['upload'])){
 echo "<p class='alert alert-success'>".$_SESSION['upload']."</p>";
 unset($_SESSION['upload']);
}
elseif(isset($_SESSION['fail'])){
echo "<p class='alert alert-danger'><strong>".$_SESSION['fail']."</strong></p>";
 unset($_SESSION['fail']);
}
  ?>
</div>
  <?php include_once('../script-panal.php'); ?>
  </body>
  </html>
