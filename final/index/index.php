<?php
$conn=mysqli_connect("localhost","root","","db_assignment");

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body {
	background: white;

	font-size: 15px;
}
#wrap {
  margin: 50px 100px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}

input[type="text"] {
  height: 50px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 500px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
button
 	{
 		width: 50px;
 		height: 50px;
 		background-color: black;
 		border-radius: 30px;
 		position: absolute;
        transition: opacity .5s ease;
        color:white;
        float: right;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        border: none;
        opacity: 0.4;
        display: inline-block;
 	}
 button:hover {
  opacity: 0.8;
}	
button:focus
{
	outline: none;
}
input:focus
{
	outline: none;
}

</style>	
</head>


<body>
	<img src="logo.png" width="80" height="80"> 
  <div id="wrap">
  <form autocomplete="off" class="des" method="POST">
  <input id="search" name="qs" type="text" placeholder="Type to search ">
  <button id="search_submit" class="glyphicon glyphicon-search"  type="submit" name="sub"> </button>  <br><br>
  </form>
  </div> 

        <?php
        if (isset($_POST['sub']) && !empty($_POST['qs'])) {
        $q=$_POST['qs'];
        $sql="select * from INFO where PLACES like '%$q%' or INFORMATION like '%$q%' ";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {
        	echo "<article> <a href='#'>".$row['PLACES']."</a><br>".
                  $row['INFORMATION']."<br><br>
                  </article>";
        	
        }} 
        else
        {
        	echo "no results found";
        }
    }
    

        ?>
</body>
</html>