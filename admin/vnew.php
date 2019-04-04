<?php
session_start();
if($con=mysqli_connect('localhost','root')){
  if(mysqli_select_db($con,'blog-db')){


}
}
else{
  echo"fail";
}
$ntitle=$_POST['title'];
$nsdec=$_POST['sdec'];
$nimage= $_FILES['image'];
echo $nimage['name'];
  $target="../image/".$nimage['name'];

$name=$nimage['name'];
$q="INSERT INTO `blog`(`id`, `title`, `sdec`, `image`) VALUES (NULL,'".$ntitle."','".$nsdec."','".$name."')";
if(mysqli_query($con,$q)){
  move_uploaded_file($nimage['tmp_name'],$target);
  $_SESSION['upload']='new post successfully added';
  header('location:http://localhost/blogpost/admin/new.php');
}
else {
  $_SESSION['fail']='upload failed !';
  header('location:http://localhost/blogpost/admin/new.php');
}
