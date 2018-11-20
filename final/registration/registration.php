?<php
$con = mysqli_connect("locahost","root","","dbms");
$sql="INSERT INTO registration 
      VALUES ('$_POST[name]',
              '$_POST[age]',
              '$_POST[email]',
              '$_POST[contact]',
              '$_POST[password]',
              '$_POST[gender]')";
$res = mysqli_query($sql,$con);
mysql_close($con)
?>