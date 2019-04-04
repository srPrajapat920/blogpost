<?php
function get_data($table)
{
  global $con;
  $data= array();
$q="SELECT * FROM ".$table."";

$result=mysqli_query($con,$q);

  while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
  }
return $data;
}

function get_data_value($key,$val,$table)
{
  global $con;
  $data= array();
  $q="SELECT * FROM ".$table." where ".$key."=".$val."";

  $result=mysqli_query($con,$q);

  while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
  }
  return $data;
}

?>
