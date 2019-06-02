<?php
include 'connection.php';
include 'insertcom.php';
$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];
$sql="insert into msg (name , email, message) values ('$name','$email','$message')";
$res=mysqli_query($conn,$sql);
echo "message successfully posted";
?>
