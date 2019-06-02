<?php
// Start the session
session_start();
?>
<?php
$_SESSION['email']=""; 
$con=mysqli_connect("localhost","root","","db_assignment");
if(isset($_POST['submit']))
{
     
    $query='select * from registration where email="'.$_POST['email'].'" and password="'.$_POST['password'].'"';
     $result=mysqli_query($con,$query);
     if($result)
     { 
        $temp_var=0;
        while($row=mysqli_fetch_array($result))
         { 
                       $temp_var=1;
          $_SESSION['email'] = $row['email'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['temp']="";
          header('Location:index.php');
        }
        if($temp_var==0)
        {
            echo '<script>alert("WRONG USERNAME OR PASSWORD");</script>';
        }
     }
 }
 ?>