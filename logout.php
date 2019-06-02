<?php
session_start();
?>
<?php
$_SESSION['email']=""; 
$con=mysqli_connect("localhost","root","","db_assignment");
if(isset($_POST['lout']))
{
    session_destroy();
    header("Location: login.php");
}
?>
