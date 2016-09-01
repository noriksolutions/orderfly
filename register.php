<?php
include "connection.php";
// $mess=$_GET['message'];
// echo 'Registration failed';
if(isset($_POST['submit']))
{
  //$username=$_POST['fullname'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $hash=md5($pass);
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $rest=$_POST['rest_name'];
  $query=mysqli_query($conn,"insert into restaurants(rest_name,password,status,emailid,phoneno,address,dis_status) values ('$rest','$hash',0,'$email','$phone','$address',0)");
  //  var_dump($query);
  if($query)
  {
    //echo 'sucess';
    header('location:index.php');
    }
  else {
    $message = urlencode("Registration failed");
header("Location:index.php?message=".$message);
  }
}

 ?>
