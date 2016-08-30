<?php
include "connection.php";
include "functions.php";
$user2=$_SESSION['username'];
session_start();

  $query=mysqli_query($conn,"select id , emailid from restaurants where emailid='$user2' LIMIT 1");
  //var_dump($query);
  while($res=mysqli_fetch_array($query))
  {
    $id=$res['id'];
}
echo $id;


if(isset($_POST['submit']))
{
  $dishname=$_POST['dishname'];
  $price=$_POST['price'];
  $desc=$_POST['description'];
//  $image2=$_POST['image1'];

  //$image_func=image_upload($conn,$image);
  $query =  mysqli_query($conn,"insert into  item (rest_id,item_name,cost,description,status)values('$id','$dishname','$price','$desc','0')");
  var_dump($query);
  if($query){
    header("location:add_dishes.php");
  }
  else {
    echo "<script type='text/javascript'>alert('error in insertion 001');</script>";
  }

}
else {
echo "<script type='text/javascript'>alert('error in submission 002');</script>";
}


 ?>
