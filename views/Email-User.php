<?PHP
require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">

<div class="M-clr"></div>
<!-- detailed view of job  -->
<section class="w3-container" style="background-color:white; padding-bottom:3em; margin-top:5em;">
 <div class="w3-container">
  <div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
   <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
    <li>
     <div>
      <form class="w3-form col-sm-10">
       <input class="w3-input" placeholder="SEARCH" type="search">
      </form>
     </div>
    </li>
    <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
     <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm" style="margin-top: 0.6em;"><a style="font-family: Arial; font-size:small;" class="M-Universal-Link">SEARCH</a></button></li>
    </li>
    
    
    <?php

    if(!empty($_SESSION)) {//outer if
     if ($_SESSION['user_type'] == 'employee') {//if1

      include("employee-green-menu.php");
     }//if1
     elseif($_SESSION['user_type'] == 'client'){//if2

      include ("client-green-menu.php");



     }//if2
    }//outer if



    ?>
   </ul>
  </div>
 </div>

 <h2 class="text-center">Email User</h2>
 <br><br><br>
<ul class="M-No-Style-List w3-container" >
<li style="border:2px solid green;" class="col-md-8 col-md-offset-2"><!-- 1st li of main ul -->
<form class="w3-form">
<label>To:</label>
<input type="email" placeholder="email of the recipient" class="w3-input" style="border:1px solid green;" required>
<label style="margin-top:1em;">From:</label>
<input type="email" class="w3-input" style="border:1px solid green;" required>
<label style="margin-top:1em;">Message:</label>
<textarea class="w3-input" rows="10" style="overflow:scroll !important; border:1px solid green; " required></textarea>
<label style="margin-top:1em;">Attatchment</label>
<input type="file" >
<button class="btn btn-block M-button-orange-to-white btn-sm" style="margin-top:2em;"><a style="font-family: Arial; font-size: large;" class="M-Universal-Link">Send Mail !</a></button>
</form>

</li><!-- 1st li of main ul  -->

</ul><!-- /main ul -->
</div>
</section>

<div class="M-clr"></div>
</body>
</html>
 <?PHP  include("footer.php");  ?>
