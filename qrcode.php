<?php
//require "connection.php";
include_once "phpqrcode/qrlib.php";
$item=$_GET['name'];
$price=$_GET['price'];
echo $item;
echo $price; echo "</br>";
$code=$item.$price;
echo $code;
//echo "hello";
$code1=QRcode::png ($code,'test.png','L',200,200);
//header('location:qrcode.html');
echo "<img src='{$code1}' alt='image'></img>";

 ?>
