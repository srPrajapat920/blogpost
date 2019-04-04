<?php
include_once('db.php');
$val=$_GET['id'];
$data=get_data_value('id',$val,'blog');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include_once('head-site.php'); ?>
  </head>
  <body>
    <?php include_once('header.php');?><br>
    <div class='container'>
    <h2><?php echo$data[0]['title']?></h2><br>
    <img src='image/<?php echo$data[0]['image']?>' class='img  img-thumbmail img-square'height="500px"; width='500px';/>
    <br>
    <p style="margin-top:20px;"; ><?php echo$data[0]['sdec']?></p>

   <?php include_once('script-site.php'); ?>
 </div>
  </body>
  </html>
