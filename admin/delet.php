<?php
session_start();
include_once('../db.php');
$id=$_GET['id'];
 $q="DELETE FROM `blog` WHERE id=$id";
 if(mysqli_query($con,$q))
 {
   $_SESSION['delet']='Post successfully deleted.';
   header('location:http://localhost/blogpost/admin/dashboard.php');
 }
 else {
   $_SESSION['fail']='Post not deleted.';
   header('location:http://localhost/blogpost/admin/dashboard.php');
 }
?>
