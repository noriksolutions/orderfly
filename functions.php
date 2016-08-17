<?php
require "connection.php";
date_default_timezone_set('Asia/Kolkata');$date2=date('Y-m-d');
session_start();
$user2=$_SESSION['username'];
$query=mysqli_query($conn,"select id , emailid from user where emailid='$user2' LIMIT 1");
  //var_dump($query);
  while($res=mysqli_fetch_array($query))
  {
    $id=$res['id'];
}
//echo $id;
  $query=mysqli_query($conn,"select user.id,dishes.user_id,dishes.item_name,dishes.cost,dishes.description,dishes.url,dishes.status from user,dishes where dishes.user_id=$id and user.id = $id and dishes.status =0");
  $count=0;
  while($res=mysqli_fetch_array($query))
  {
    $count ++;
    $dishname=$res['item_name'];
    $price=$res['cost'];
    $des=$res['description'];
    $image1=$res['url'];
    if($image1 == NULL){
      echo "<tr><td>$count</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>No Image<td></tr>";
    }
      else {
        echo "<tr><td>$count</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>{$image1}<td></tr>";
      }
  }







 ?>
