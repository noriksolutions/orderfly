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


  $query=mysqli_query($conn,"select id , username from user where username='$user2' LIMIT 1");
  //var_dump($query);
  while($res=mysqli_fetch_array($query))
  {
    $id=$res['id'];
}
//echo $id;
  $query=mysqli_query($conn,"select user.id,dishes.user_id,dishes.item_name,dishes.cost,dishes.description,dishes.url,dishes.status from user,dishes where dishes.user_id=user.id and dishes.status =0");
  while($res=mysqli_fetch_array($query))
  {
    $dishname=$res['item_name'];
    $price=$res['cost'];
    $des=$res['description'];
    $image1=$res['url'];
    echo "<tr><td>{}</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>{$image1}<td></tr>";
  }






 ?>
