<?php
require "connection.php";
date_default_timezone_set('Asia/Kolkata');$date2=date('Y-m-d');
session_start();
$user2=$_SESSION['username'];

//
// function remove_dishes($conn,$id)
// {
//   $query=mysqli_query($conn,"update dishes set status = 1 where id= $id");
//   if($query)
//   {
//     echo 'sucess';
//   }
//   else {
//     echo 'failed';
//   }
// }

// function show_dishes($conn,$username)
// {
//   $userid=user_id($conn,$user2);
//   $query=mysqli_query($conn,"select id.user,username.user,id.dishes,dishname.dishes,price.dishes,description.dishes,status.dishes from user,dishes where user_id.dishes='$userid' and status.dishes = 0 ");
//   while($row=mysqli_fetch_array($query))
//   {
//     $dishname=$res['dishname'];
//     $price=$res['price'];
//     $des=$res['description'];
//     $image1=$res['url'];
//     echo "<tr><td>{}</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>{$image1}<td></tr>";
//   }
// }




 ?>
