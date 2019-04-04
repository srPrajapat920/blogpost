if(mysqli_query($con,$q)){

  $_SESSION['upload']='new student  successfully added';
  header('location:http://localhost/clgmnt/addstudent.php');
}
else {
  $_SESSION['fail']='upload failed !';
  header('location:http://localhost/clgmnt/addstudent.php');
}
