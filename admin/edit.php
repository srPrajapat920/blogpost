<?php
session_start();
include_once('../db.php');
$val=$_GET['id'];
$data=get_data_value('id',$val,'blog');
?>
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

    <div class='container'>

  <form action="vedit.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name='id' value="<?php echo$data[0]['id'];?>"/>
    <labal><h4>Enter title</h4></labal><br>
    <input type='text' name='title' value="<?php echo$data[0]['title'];?>"class='form-control'/><br>
    <labal><h4>Enter discription</h4></labal><br>
    <input type='textarea' name='sdec' value="<?php echo$data[0]['sdec'];?>"class='form-control'/><br>
    <labal><h4>Chose file</h4></labal><br>
    <img src='../image/<?php echo $data[0]['image']?>'style="max-width:180px;"/><br><br>
    <input type='file' name='image' value="<?php echo$data[0]['image'];?>"/><br>
  <input  type="submit" class="btn btn-primary" value="submit"/>
</div>
  </form>
</div>
  <?php
  if(isset($_SESSION['edit'])){
  echo "<p class='alert alert-success'>".$_SESSION['edit']."</p>";
   unset($_SESSION['edit']);
  }
  elseif(isset($_SESSION['fail'])){
  echo "<p class='alert alert-danger'><strong>".$_SESSION['fail']."</strong></p>";
 unset($_SESSION['fail']);
  }include_once('../script-panal.php');  ?>

  </body>
  </html>
