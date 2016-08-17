<?php
include "connection.php";
if(isset($_POST['submit']))
{
  $username=$_POST['fullname'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $query=mysqli_query($conn,"insert into user(username,password,status,block,emailid,phone,address) values ('$username','$pass',0,0,'$email','$phone','$address')");
  //  var_dump($query);
  if($query)
  {
    //echo 'sucess';
    echo "<script type='text/javascript'>alert('registration successful');</script>";
    echo "<a href='index.php'>Login Page</a>";
    }
  else {
    echo "<script type='text/javascript'>alert('registration failed');</script>";
  }
}

 ?>
