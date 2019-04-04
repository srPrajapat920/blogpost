<?php
session_start();
if($con=mysqli_connect('localhost','root')){
  if(mysqli_select_db($con,'blog-db')){


}
}
else{
  echo"fail";
}
$id=$_POST['id'];
$ntitle=$_POST['title'];
$nsdec=$_POST['sdec'];
$nimage= $_FILES['image'];
echo $nimage['name'];
  $target="../image/".$nimage['name'];
$name='image/'.$nimage['name'];
$name=$nimage['name'];
$q="UPDATE `blog` SET `title`='$ntitle',`sdec`='$nsdec',`image`='$name' WHERE id=$id";

if(mysqli_query($con,$q)){
  move_uploaded_file($nimage['tmp_name'],$target);
  $_SESSION['edit']=' Post edit successfully';
  header('location:http://localhost/blogpost/admin/edit.php?id='.$_POST['id']);
}
else {
  $_SESSION['fail']='edit failed !';
  header('location:http://localhost/blogpost/admin/edit.php?id='.$_POST['id']);
}
