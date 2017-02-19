<?php
require ("../process/Connection.php");
include("header.php"); ?>

<html>

<body style="background-color: #333;">

<div class="M-clr"></div>
<!-- detailed view of job  -->
<section class="w3-container" style="background-color:white; padding-bottom:3em; margin-top:5em;">
 <div class="w3-container">
<div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;"> 
<ul style="list-style-type:none !important; text-decoration:none !important; padding-top:1em;">
<li>
<div>
<form class="w3-form col-sm-10">
<input class="w3-input" placeholder="SEARCH" type="search">
</form>
</div>
</li>
<li style="padding-top:0.5em;" class="col-sm-2">
 <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a style="font-family: Arial" class="M-Universal-Link">SEARCH</a></button></li>
 </li>

 
 
 <?php if(!empty($_SESSION)) { ?>

  <li class="col-sm-12 col-md-12 col-lg-12" style="margin-top:1em;">
   <div class="w3-container">
    <center>
     <ul class="Responsive-nav">
      <li><a class="active" href="#home">Dashboard</a></li>
      <li><a href="#news">Jobs</a></li>
      <li><a href="#about">Transactions</a></li>
      <li><a href="Client Profile.php">Profile</a></li>
      <li><a href="#about">Settings</a></li>
     </ul>
    </center>

   </div>
  </li>
 <?php }

 else {?>

 <?PHP } ?>



 <!--<li class="pull-right">
 <div>
 <form style="color:white !important;">
 <ul class="M-No-Style-List" style="padding-top:0.2em; display:inline;">
 <li class="M-LiLeft" style="padding-top:0.7em; padding-right:0.6em;">Career level</li>
 <li class="M-LiLeft"><input type="radio" name="level" class="w3-radio"> Entry </li>
 <li class="M-LiLeft"><input type="radio" name="level" class="w3-radio" style=" margin-left:0.2em;"> Intermediate </li>
 <li class="M-LiLeft"><input type="radio" name="level" class="w3-radio" style="margin-left:0.2em;"> Expert</li>

 </ul>
 </form>
 </div>

 </li>-->
<!--  <li class="pull-right" style="padding-right:1em;">
<button class="btn btn-lg M-button-Job-Post-WHITE btn-block" style="border-radius:1.5px; width:15em;">Post A Job <span style="background-color:orange; color:white; border-radius:2px; height:4em; width:6em !important;" class="text-center"> Its FREE. </span></button>
</li>-->
</ul>
</div><h2 class="text-center">Contact Us</h2>
<ul class="M-No-Style-List" style="padding-top:4em;">
<li style="border:2px solid green; " class="M-LiLeft col-md-8 col-md-offset-2"><!-- 1st li of main ul -->
<form class="w3-form">

<label style="margin-top:1em;">Your Email Id:</label>
<input type="email" class="w3-input" style="border:1px solid green; margin-top:1em;" required>
<label style="margin-top:1em;">Your Message:</label>
<textarea class="w3-input" rows="10" style="border:1px solid green; margin-top:1em; overflow: scroll;" required></textarea>
<label style="margin-top:1em;">Attatchment:</label>
<input type="file" style="margin-top:1em;">
<button class="btn btn-block M-button-orange-to-white btn-sm M-UniversalBtn" style="margin-top:2em;"><a style="font-family: Arial; font-size: large;" class="M-Universal-Link">Send Mail !</a></button>
</form>

</li><!-- 1st li of main ul  -->


</ul><!-- /main ul -->
</div>
</section>

<div class="M-clr"></div>


</body>
</html>
<?php
include ("footer.php");

?>