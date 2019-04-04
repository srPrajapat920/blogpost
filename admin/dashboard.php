<?php
session_start();
if(isset($_SESSION['pass'])){

}
else{
    header('location:http://localhost/blogpost/admin/index.php');
}

include_once('../db.php');
 $data=get_data('blog'); ?>

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

              <a class="blog-nav-item" href="../about.php">About</a>
              <a class="blog-nav-item" href="logout.php" >  <h5 style=" color:white; font-family: Roboto, Arial, sans-serif;">logout</h5></a>
            </nav>

          </div>
        </div>

    <div class='container'>

  <h1>Dashboard</h1><br>
<h3 bg-color=green;>user:---<?php echo $_SESSION['user'];?></h3>
  <br>
  <?php
  if(isset($_SESSION['delet'])){
 echo "<p class='alert alert-success'>".$_SESSION['delet']."</p>";
 unset($_SESSION['delet']);

}
elseif(isset($_SESSION['fail'])){
echo "<p class='alert alert-danger'><strong>".$_SESSION['fail']."</strong></p>";
 unset($_SESSION['fail']);
}

  ?>
  <table class=' table table-striped'>
    <tr>
      <th>index</th>
        <th>title</th>
          <th>option</th>
        </tr>
<?php for ($i=0; $i <count($data); $i++) { ?>
  <tr>
   <td>
<?php echo $i+1; ?>
   </td>
   <td>
  <?php echo $data[$i]['title'] ; ?>
   </td>
   <td>
  <a href='edit.php?id=<?php echo $data[$i]['id']; ?>' class='btn btn-info'>edit</a>
     <a href='delet.php?id=<?php echo $data[$i]['id'];?>' class='btn btn-info'>delete</a>
  </td>
   </tr>
<?php
}
?>
</table>
<a href='new.php' class='btn btn-primary'>new post</a>
</div>
   <?php include_once('../script-panal.php'); ?>
  </body>
  </html>
