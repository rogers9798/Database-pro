<?php
session_start();
include 'connection.php';
include 'insertcom.php';
    
        
        if (isset($_POST['sub']) || !empty($_POST['qs']))
         {
        $q=$_POST['qs'];
        
        $sql="select * from INFO where PLACES like '%".$q."%' ";
 $sql1="select * from INFO where City like '%".$q."%'";
        $ex=mysqli_query($conn,$sql);
$ex1=mysqli_query($conn,$sql1);
        $num=mysqli_num_rows($ex);
$num1=mysqli_num_rows($ex1);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {  

          echo "<script>window.location = '$q.php?link=$q'</script>";
   
        }} 
elseif ($num1>0)
{ $sq="select PLACES from INFO where City like '%".$q."%'";
   $exq=mysqli_query($conn,$sq);
   $rowq=mysqli_fetch_assoc($exq);
$pl=$rowq['PLACES'];
echo "<script>window.location = '$pl.php?link=$pl'</script>";
        
}

else
        {
        	echo "no results found-test";
        }
    }

    ?>
