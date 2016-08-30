<?php
require "connection.php";
include "phpqrcode/qrlib.php";
date_default_timezone_set('Asia/Kolkata');$date2=date('Y-m-d');
session_start();
$user2=$_SESSION['username'];
$query=mysqli_query($conn,"select id , emailid from restaurants where emailid='$user2' LIMIT 1");
  //var_dump($query);
  while($res=mysqli_fetch_array($query))
  {
    $id=$res['id'];
}
//echo $id;
  $query=mysqli_query($conn,"select restaurants.id,item.rest_id,item.item_name,item.cost,item.description,item.url,item.status from restaurants,item where item.rest_id=$id and restaurants.id = $id and item.status =0");
  $count=0;
  while($res=mysqli_fetch_array($query))
  {
    $count ++;
    $dishname=$res['item_name'];
    $price=$res['cost'];
    $des=$res['description'];
    $image1=$res['url'];
    //QRcode::png($dishname);
    //echo "<img src='$qrcode'/>";
    if($image1 == NULL){
      echo "<tr><td>$count</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>No Image</td><td> ";
      //echo "<a href='qrcode.php?name={$dishname},price={$price}'>click here</a></td></tr>";
      //echo "<img src='QRcode::png({$dishname})' height='200px'; width='200px';></img>";
      //echo "<img src='{$image1}' height='200px'; width='200px';></img>";

    }
      else {
        echo "<tr><td>$count</td><td>{$dishname}</td><td>{$price}</td><td>{$des}</td><td>{$image1}</td><td>";
        //echo "<a href='qrcode.php?name={$dishname},price={$price}'>click here</a></td></tr>";
      }
  }






 ?>
