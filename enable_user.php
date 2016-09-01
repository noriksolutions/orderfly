<?php
include "connection.php";
session_start();
$user2=$_SESSION['username'];
$query=mysqli_query($conn,"select * from restaurants where dis_status=1 and status=0");
while($res=mysqli_fetch_array($query))
{
  $count ++;
  $restname=$res['rest_name'];
  $phone=$res['phoneno'];
  $email=$res['emailid'];
echo "<tr><td>$count</td><td>RID.$count</td><td>{$restname}</td><td>{$phone}</td><td>{$email}</td><td><a href='enable.php?name=$email'><i class='fa fa-fw fa-plus'></i></a></td><td> ";


  }
 ?>
