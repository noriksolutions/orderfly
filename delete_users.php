<?php
include "connection.php";
$name1=$_GET['name'];
$query1="UPDATE restaurants set dis_status= '1' where rest_name='$name1'";
$q=mysqli_query($conn,$query1);
//$query1="insert into restaurants (dis_status) values (1) ";
if($q){
  header('location:Manage_users.php');
}


 ?>
