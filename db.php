<?php
if($con=mysqli_connect('localhost','root')){
  if(mysqli_select_db($con,'blog-db')){

  
}
}
else{
  echo"fail";
}
include_once('db-setup.php');



?>
