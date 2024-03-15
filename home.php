<!DOCTYPE html>
<html>
<title>Bojjabi's Cream</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body {font-family: "Times New Roman", Georgia, Serif;
	background: #191824;
	background-image: url(img/background.png);
  background-repeat: no-repeat;
    background-size: cover;
}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 10px;
}
p{
	font-size: 20pt;
}
</style>
<?php include('header.php'); ?>

<body>
<?php include('navbar.php'); ?>
<!-- Navbar (sit on top) -->


<!-- Header -->


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="img/Everest.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="300" height="400">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Bojjabi's Cream</h1><br>
      
      <p>Bojjabi’s Cream, an online ice cream shop which aims to bring joy to children and adults right to their door steps.</p>
	  <div>
	  <br>
	  <br>
	  <p>Serving the finest, freshest ice cream and shakes using only the highest quality ingredients.</p>
	  <img src="img/Choco-milkshake.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="400" height="500">
    </div>
  </div>
  </div>
  <hr>
  
  


  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>If there's something missing, please just let us know. We'd love to hear from you!</p>
    <p class="w3-text-blue-grey w3-large"><b>Bojjabi's Cream, Wood District, Corporate Woods cor. South Corporate Avenues, Filinvest City, Alabang, Muntinlupa, 1781</b></p>
    <p>You can also contact us by phone 00553123-2323 or email BojjabisCream@gmail.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>


</body>
</html>