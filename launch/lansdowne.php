<!DOCTYPE html>
<html>
<title>Lansdowne</title>
<?php
date_default_timezone_set('Asia/Kolkata');
include 'connection.php';
include 'insertcom.php';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tab.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<?php
 
?>
<body class="w3-light-grey">

<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
<a href="../index.php" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class=" w3-margin-right">Home</i></b></a>
  <a href="../about.php" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class=" w3-margin-right">About us</i></b></a>
  <a href="#contact" class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class=" w3-margin-right">Contact</i></b></a>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1400px">

  <img class="w3-image" src="logo.png" width="200" height="200">
<div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i></button>
   </div>

    

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Welcome to Lansdowne</h3>
     
    </div>

    

    
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://spiderimg.amarujala.com/assets/images/2016/09/20/lansdowne_1474358524.jpeg" style="width:100%">
        <span class="w3-display-bottomleft w3-padding" style="color:black">Lansdowne</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://img.etimg.com/photo/62983326/make-the-most-of-your-extended-weekend-lansdowne-in-uttarakhand-or-gandikota-in-andhra-pradesh.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="data:image/jpeg;base64,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" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.holidify.com/images/bgImages/LANSDOWNE.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.trawell.in/admin/images/upload/676730518Lansdowne_StJohns_Church_Main.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Lansdowne</h3>
    <p>
<?php
      
       $_SESSION['link']=$_GET['link'];
       $q=$_SESSION['link'];
       
       $sql="select * from INFO where PLACES like '%".$q."%' or City like '%".$q."%'";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {

   
        	echo "<article> <a href='#'>"."<br>".$row['PLACES']."</a><br><br>".
                  $row['heading']."<br>".
                  "</article>";
                 
        	
        }
} 
        else
        {      echo "<script>window.location = 'output.php'</script>";
        	
        }
    


    

        ?>


</p>
  </div>

<!-- tabs -->
  <div class="w3-container">
    <h3>Explore Nature</h3>
    <p>
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'food')" id="defaultOpen">Food</button>
  <button class="tablinks" onclick="openCity(event, 'cult')">Culture</button>
  <button class="tablinks" onclick="openCity(event, 'plac')">Places to visit</button>
<button class="tablinks" onclick="openCity(event, 'loc')">Location</button>
</div>


<div id="food" class="tabcontent">
  <h3>Food</h3>
  <p>

<?php
       
       $_SESSION['link']=$_GET['link'];
       $q=$_SESSION['link'];
       
       $sql="select * from INFO where PLACES like '%".$q."%' or City like '%".$q."%'";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {

   
        	echo "<article> "."<br><br>".
                  $row['food']."<br>".
                  "</article>";
              
        	
        }
} 
        else
        {      echo "<script>window.location = 'output.php'</script>";
        	
        }
    
    


        ?>


</p>
  </div>
<div id="cult" class="tabcontent">
  <h3>Culture</h3>
  <p>

<?php
       
       $_SESSION['link']=$_GET['link'];
       $q=$_SESSION['link'];
       
       $sql="select * from INFO where PLACES like '%".$q."%' or City like '%".$q."%'";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {

   
        	echo "<article> <a href='#'>"."<br>".
                  $row['culture']."<br>".
                  "</article>";
              
        	
        }
} 
        else
        {      echo "<script>window.location = 'output.php'</script>";
        	
        }
    
    


        ?>


</p>
  </div>
<div id="plac" class="tabcontent">
  <h3>Places to visit</h3>
  <p>

<?php
       
       $_SESSION['link']=$_GET['link'];
       $q=$_SESSION['link'];
       
       $sql="select * from INFO where PLACES like '%".$q."%' or City like '%".$q."%'";
        $ex=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($ex);
        if ($num>0)
            {
        while($row=mysqli_fetch_assoc($ex))
        {

   
        	echo "<article> <a href='#'>"."<br>".
                  $row['places_v']."<br>".
                  "</article>";
              
        	
        }
} 
        else
        {      echo "<script>window.location = 'output.php'</script>";
        	
        }
    
    


        ?>


</p>
  </div>

<div id="loc" class="tabcontent">
  <h3>Location</h3>
  
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19577.886720068716!2d78.68609845097444!3d29.83790072655374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390982c695b9d285%3A0xeda7376a09e6937f!2sLansdowne+Market+Rd%2C+Lansdowne%2C+Uttarakhand+246155!5e0!3m2!1sen!2sin!4v1542989320335" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
<br><br>


  
 
  
  
  <!-- Contact -->
  <div class="w3-container">
    <h2>Contact</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Delhi<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: 9968068330<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: siddhu.15798@hmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<footer class="w3-container w3-padding-30 w3-dark-grey">
  
    
  
  <div class="w3-black w3-center w3-padding-20">Powered by Coders</div>


<script>
// Tabs
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
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
document.getElementById("defaultOpen").click();
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
