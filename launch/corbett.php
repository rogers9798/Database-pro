<!DOCTYPE html>
<html>
<title>Corbett</title>
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
      <h3>Welcome to Corbett</h3>
     
    </div>

    

    
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://images.thrillophilia.com/image/upload/s--67kp8qGL--/c_fill,f_auto,fl_strip_profile,h_600,q_auto,w_975/v1/images/photos/000/109/417/original/1489143022_corbett_national_park_2.png.jpg?1489143021" style="width:100%">
        <span class="w3-display-bottomleft w3-padding" style="color:black">Corbett</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="data:image/jpeg;base64,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" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://image3.mouthshut.com/images/Restaurant/Photo/-75431_7860.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Bengal-Tiger_Corbett_Uttarakhand_Dec-2013.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93hFgpaLPfkCQ71ssZO-_gCXkspfpKqS4syPIGXEjUl6lggoZ" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Corbett</h3>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.531287359335!2d78.77247161464226!3d29.53001844964541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a24ffffffffff%3A0x3017b72d3d253fd7!2sJim+Corbett+National+Park!5e0!3m2!1sen!2sin!4v1542989661667" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
