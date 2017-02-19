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
    <li style="padding-top:0.5em;" class="col-sm-2">
     <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a style="font-family: Arial" class="M-Universal-Link">SEARCH</a></button></li>
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

 <h2 class="text-center">Your Receipt</h2>
 <br><br><br>
<ul class="M-No-Style-List w3-container" >
<li style="border:2px solid green;" class="col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" ><!-- 1st li of main ul -->
<div class="w3-container">
   <h4 class="text-center"><strong >Receipt / Invoice</strong></h4>
<br><br>
    <div class="row">
        <div class="pull-left">
        <h6><strong>Client:</strong></h6>
            <p class="text-left">Zeeshan</p>
        </div>

        <div class="pull-right">

            <h6><strong>Employee:</strong></h6>
            <p class="text-right"  >Danyal</p>
        </div>

    </div><!-- /row -->
    <div class="clearfix"></div>
    <hr>
    <div class="row">
        <div class="pull-left">
            <h6><strong>Title of Job:</strong></h6>
            <p class="text-left">name of the job from db</p>
        </div>

        <div class="pull-right">

            <h6><strong>Payment Type</strong></h6>
            <p class="text-right" >Fixed</p>
        </div>
</div><!-- /row -->
    <div class="clearfix"></div>

    <hr>
    <div class="row">
        <div class="pull-left">
            <h6><strong>Price</strong></h6>
            <p class="text-left">10000<span> PKR-</span> <span> /hr</span></p>
        </div>
<!--
        <div class="pull-right">

            <h6><strong>Total Price</strong></h6>
            <p class="text-right">10000 <span> PKR</span></p>
        </div>-->

    </div><!-- /row -->
<div class="clearfix"></div>

    <hr>
    <div>

        <form>
            <button class="btn M-button-orange-to-white M-UniversalBtn"><a style="font-family: Arial; font-size: medium;" class="M-Universal-Link">Send Payment</a></button>
        </form>
    </div>


</div><!-- /w3-container -->


</li><!-- 1st li of main ul  -->

</ul><!-- /main ul -->
</div>
</section>

<div class="M-clr"></div>
</body>
</html>
 <?PHP  include("footer.php");  ?>
