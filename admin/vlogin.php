<?php
SESSION_START();
if($con=mysqli_connect('localhost','root')){
  if(mysqli_select_db($con,'blog-db')){
}
}
else{
  echo"fail";
}
$q="SELECT * FROM admin where username ='".$_POST['user']."'";


if($result=mysqli_query($con,$q)){
  $value=mysqli_fetch_assoc($result);
$user=$value['username'];
$pass=$value['password'];
if($_POST['pass']==$pass){
  $_SESSION['user']=$user;
  $_SESSION['pass']=$pass;
header('location:http://localhost/blogpost/admin/dashboard.php');
}
else{
    $_SESSION['error']="invalide password";
    header('location:http://localhost/blogpost/admin/index.php');
}
}
else {
    $_SESSION['error']="invailide username and password";
    header('location:http://localhost/blogpost/admin/index.php');
}

?>
