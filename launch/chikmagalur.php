<!DOCTYPE html>
<html>
<title>Chikmaglur</title>
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

<!-- Navigation Bar -->
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
      <h3>Welcome to Chikmaglur</h3>
     
    </div>

    

    
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://images.thrillophilia.com/image/upload/s--N1mpmost--/c_fill,f_auto,fl_strip_profile,h_446,q_auto,w_750/v1/images/photos/000/116/850/original/1503337282_211744531Chikmagalur_Jhari_Falls_Main_(1).jpg.jpg?1503337282" style="width:100%">
        <span class="w3-display-bottomleft w3-padding" style="color:black">Chikmaglur</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://emages.eventshigh.com/2016/8/4/img_e06803a46e11f0dc4e48a6d21cdfe0c0_1470295577987_original.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://d27k8xmh3cuzik.cloudfront.net/wp-content/uploads/2017/12/Mullayanagiri.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://images.thrillophilia.com/image/upload/s--0fJ3_M1E--/c_fill,f_auto,fl_strip_profile,h_600,q_auto,w_975/v1/images/photos/000/036/279/original/chik5_.jpg.jpg?1458195715" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.trawell.in/admin/images/upload/856324774Chikmagalur_Kavikal_gandi.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Chikmaglur</h3>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22594.83153686928!2d76.36483621950315!3d13.44130561337746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbaa6b25228a2d7%3A0xa4cb37da76b04942!2schikmagalur!5e0!3m2!1sen!2sin!4v1542989819510" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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

</footer>

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
