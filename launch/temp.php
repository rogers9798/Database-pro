<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<?php
include 'connection.php';
include 'insertcom.php';
?>
<body class="w3-light-grey">


<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-map-marker w3-margin-right"></i></b></a>
  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey"><i class="fa fa-search"></i></a>
</div>


<header class="w3-display-container w3-content w3-hide-small" style="max-width:1400px">

  <img class="w3-image" src="goa/goa-beach1.jpg" alt="London" width="1400" height="400">
<div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
   </div>

    

   
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Welcome to Goa </h3>
     
    </div>

    

    
</header>


<div class="w3-content" style="max-width:1100px;">

  
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="goa/goa1.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding" style="color:black">GOA</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="goa/goa2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black">Morjim</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="goa/goa3.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black">Candolim & Calangute</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="goa/goa4.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black">Colva beach</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="goa/goa5.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black">Mobor</span>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="w3-container">
    <h3>Explore Nature</h3>
    <p>
<?php
       session_start();
        $_SESSION['link']=$_GET['link'];
        $q=$_SESSION['link'];
        $sql="select * from INFO where PLACES like '%$q%' or city like '%$q%'";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {

   
        	echo "<article> <a href='#'>"."<br>".$row['PLACES']."</a><br>".
                  $row['heading']."<br>".$row['info']."<br>".
                  "</article>";
                 echo $row['para'];
        	
        }
} 
        else
        {      echo "<script>window.location = 'output.php'</script>";
        	
        }
    
    

        ?>


</p>
  </div>

  
 
  
  
 
  <div class="w3-container">
    <h2>Contact</h2>
    <p>Let us book your next trip!</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  

</div>


<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>

<script>

function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
