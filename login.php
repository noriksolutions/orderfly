<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
 $user1=$_POST['email'];
 $passwd=$_POST['password'];
 $hash=md5($passwd);
 $query=mysqli_query($conn,"select rest_name,password,status,dis_status from restaurants where emailid='$user1' AND password='$hash'");
 if(mysqli_num_rows($query) > 0){
 while($res=mysqli_fetch_array($query)){
 $_SESSION['username']=$user1;
   if($res['status'] == 0 && $res['dis_status'] == 0){
     header('location:profile.php');
  }else if($res['status'] == 1){
    header('location:profile.php');
  }else {
    $Message = urlencode("Invalid Username or Password");
header("Location:index.php?Message=".$Message);
die;
    //$_SESSION['errMsg']="Invalid Username or Password";
    }
  }
}else {
  $Message = urlencode("Invalid Username or Password ");
header("Location:index.php?Message=".$Message);
die;
  // $_SESSION['errMsg']="Invalid Username or Password";
  // header('location:index.php');
  }

}
else {
  $Message = urlencode("Invalid Username or Password ");
header("Location:index.php?Message=".$Message);
die;
  //$_SESSION['errMsg']="Invalid Username or Password";
  //header('location:index.php');
  // echo "<script type='text/javascript'>alert('failed');</script>";
}
mysqli_close($conn);
?>
