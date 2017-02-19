<?php
include("header.php");
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
</head>
<body style="background-color: #333;">
<div class="M-clr" ></div>
<section class="w3-container" style="background-color:white !important; margin-top:5em;">
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
                    <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a style="font-family: Arial" class="M-Universal-Link">SEARCH</a></button>
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


</section><!-- /Green section with search bar -->
<div class="M-clr"></div>
<!-- detailed view of job  -->
<section class="w3-container" style="background-color:white; padding-bottom:3em;">
    <br><br><br>
<ul class="M-No-Style-List w3-container " style="padding-top:3em;"><!-- main ul  -->
<li class="M-LiLeft " style="border:2px solid green; width:70%; padding-top:1em; padding-bottom:1em;"><!-- 1st li of main ul  -->
<ul class="M-No-Style-List w3-container">
<!--<li class="M-LiLeft"><img src="images/0f9a3455d7426be109f7211307f0f19b.png" class="w3-circle"></li>-->
<li class="M-LiLeft"><h3 style="font-family: Arial"><strong>Name</strong></h3>
<h5 style="font-family: Arial">Company Name</h5>

</li>
    <!--
<li class=" pull-right" style="padding-right:2em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>More Details:</h4>
<p><i class="fa fa-1x fa-angle-right"></i>Owns IT Tech Industries</p>
<p><i class="fa fa-1x fa-angle-right"></i>University of Cambridge</p>


</li>
-->
</ul>
<hr>
<div class="col-md-12" style="margin-top:2em;">
<h3 style="font-family: Arial">Overview</h3>
<p style="font-family: Arial">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<br>
</div>

</li><!-- 1st li of main ul  -->

<li class="pull-right" style="width:25%;"><!-- 2nd li of main ul -->


<div>
<a class="M-Universal-Link" href="Email-User.php" name="">
    <button class=" btn-block btn-sm M-button-GREEN-to-White M-UniversalBtn" style="padding-bottom:0em !important; height: 2.3em; font-size:large; font-family: Arial">
        Mail Client</button></a>
</div>
<div style="margin-top:2em;">
<a class="M-Universal-Link" href="#">
    <button class=" btn-block btn-sm M-button-Red M-UniversalBtn" style="padding-bottom:0em !important; font-family: Arial; font-size:large; height: 2.3em;">Report Client</button></a>
</div>
    <!--
<div style=" border:1px solid green; margin-top:3em !important; padding-bottom:1em;"><!-- about client --
<ul class="M-No-Style-List"><!-- inner client list --
<li  style="margin-top:0.5em;"><h3><i class="fa fa-1x fa-clock-o"></i> Client Work History</h3></li>
<li  style="margin-top:0.5em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Jobs Posted:</h4></li>
<li  style="margin-top:0.5em;"><p><i class="fa fa-1x fa-angle-right"></i>15</p></li>
<li style="margin-top:0.5em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Hired Employees:</h4></li>
<li style="margin-top:0.5em;" ><p><i class="fa fa-1x fa-angle-right"></i>3</p></li>
<!--<li  style="margin-top:0.5em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Profile Link:</h4></li>
<li  style="margin-top:0.5em;"><p><i class="fa fa-1x fa-angle-right"></i>URL</p></li>-->
<!--  <li style="margin-top:2em; padding-bottom:1em;"><button class="btn btn-block M-button-orange-to-white M-UniversalBtn btn-sm "><h6>View Profile</h6></button></li>
--

</ul><!-- /inner client list --

</div><!-- /about client --
-->
</li><!-- /2nd li of main ul   -->


</ul><!-- /main ul -->
</div>
</section>

<div class="M-clr"></div>
</body>
</html>
<?php
include("footer.php");
?>
