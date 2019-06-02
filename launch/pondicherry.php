<!DOCTYPE html>
<html>
<title>Pondicherry</title>
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
      <h3>Welcome to Pondicherry</h3>
     
    </div>

    

    
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="data:image/jpeg;base64,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" style="width:100%">
        <span class="w3-display-bottomleft w3-padding" style="color:black">Pondicherry</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://static.toiimg.com/thumb/32243872/Past-perfect-A-walk-through-Pondicherry.jpg?width=748&height=499" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://cdn1.tripoto.com/media/filter/tst/img/567364/Image/1527591987_1472119675_beach_promenade_in_pondicherry.jpg" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1NL6LJKPK3SZasEHXTTIk_VZ9gMSz_2FL3FHnOQ5a7Sde8KBl" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs19MhgPodk2v1qsLKisxqTJXU6ZByu9AHR3qg2ma9kFPryGHdIA" style="width:100%">
            <span class="w3-display-bottomleft w3-padding" style="color:black"></span>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Pondicherry</h3>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.557564799505!2d79.83398691436449!3d11.935848039986736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5363d39d9f2115%3A0x9755fa1b745cca7a!2sChief+Secretariat+Government+Of+Puducherry!5e0!3m2!1sen!2sin!4v1542988915319" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
