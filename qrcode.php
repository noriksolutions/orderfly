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
$code1=QRcode::png ($code);
//header('location:qrcode.html');
echo "<img src='{$code1}' height='200px'; width='200px' alt='image'></img>";

 ?>
