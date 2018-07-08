<?php
session_start();
ob_start();
session_destroy();
?>

<html>
<title>URPlaylist</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
    <form method="post" action="php/Login.php">
        <button type="submit" class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">Log In</button>
    </form> 
  <div class="w3-center">
  <h4>PICK YOUR PLAYLIST AND</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Listen Something that matters</h1>
    <div class="w3-padding-32">
        <form method="post" action="php/register.php">
            <button type="submit" class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="font-weight:900;">JOIN NOW</button>
        </form> 
    
    </div>
  </div>
</header>


<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Play</h3><br>
  <i class="fa fa-youtube-play w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>You can choose</p>
  <p>The videos you want</p>
  <p>From Youtube and store</p>
  <p>it in your Playlist</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Search</h3><br>
  <i class="fa fa-file-audio-o w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>You can search for</p>
  <p>Your favorite videos</p>
  <p>From your Playlist</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Adjust</h3><br>
  <i class="fa fa-gear w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>You will be able to</p>
  <p>Edit or Remove</p>
  <p>Any video You want</p>
  <p>From your Playlist</p>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>URPlaylist</h3>
  <p>Powered by </p>
  <p>ejabja</p>
</footer>


</body>
</html>
