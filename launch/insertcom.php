<html>
<head>
<style>
.des-rep
{
	width: 600px;
	height: 150px;
	background-color: #fffff0;
	box-shadow: 4px 4px #d3d3d3;
}
#des-date
{
	padding: 5px;
	margin: 8px;
	font-size: 14px;
	font-weight: bolder;
}
#edit-mess
{
	padding: 5px;
	font-family: comic-sans;
	margin: 8px;

}
</style>
</head>
</html>
<?php
include 'connection.php';
function setComments($conn)
{
	if (isset($_POST['com'])) {
		$aid=$_POST['id'];
        $ddate=$_POST['date'];
        $ttxt=$_POST['txt'];
        $sql="insert into comments (USER_ID, CDATE, MESSAGE ) values ('$aid', '$ddate', '$ttxt')";
        $res=mysqli_query($conn,$sql);
	}
}
function getComments($conn)
{
	$sql='select * from comments order by CDATE desc';
	$res=mysqli_query($conn,$sql);

	if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
    	echo "<div  class='des-rep'> <div id='des-date'>".$row['USER_ID'];
    	echo "<pre>                                            ".$row['CDATE']."</pre> </div>";
    	echo "<div id='edit-mess'>".$row['MESSAGE']."</div> </div> <br>";
    }
}
}

