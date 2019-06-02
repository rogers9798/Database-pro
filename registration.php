<?php
$con = mysqli_connect("localhost","root","","db_assignment");
$pass = md5("$_POST[password]");
$sql="INSERT INTO registration 
      VALUES ('$_POST[name]',
              '$_POST[age]',
              '$_POST[email]',
              '$_POST[contact]',
              '$_POST[password]',
              '$_POST[gender]')";
$res = mysqli_query($con,$sql);
if($res)
{ 
header('Location:reg_suc.php');
}
mysqli_close($con);
?>
