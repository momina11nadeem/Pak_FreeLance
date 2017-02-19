<?php
require ("../process/Connection.php");
include("header.php"); ?>
<html>
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
                    <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><h6>SEARCH</h6></button> </li>
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
<ul class="M-No-Style-List col-md-12"><!-- main ul  -->

    <br>
    <h3 class="text-center">Your Profile </h3>
    <br><br>
<li class="col-md-12 " style="border:2px solid green;">
<!-- 1st li of main ul  -->
<ul class="M-No-Style-List w3-container">
    <br>
<!--<li class="M-LiLeft"><img src="images/0f9a3455d7426be109f7211307f0f19b.png" class="w3-circle"></li>-->
<li class="M-LiLeft"><h2>Name</h2>
<h4>Web Developer</h4>
<hp><i class=" glyphicon glyphicon-map-marker"></i> Country</p>

</li>
    <li class=" pull-right" style="padding-right:2em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>More Details:</h4>
        <p><i class="fa fa-1x fa-angle-right"></i>Owns IT Tech Industries</p>


    </li>

</ul>
    <hr>
<div class="col-md-12" style="margin-top:2em;">
<h3>Overview</h3>
<p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<br><br>
</div>
<br><br>
</li><!-- 1st li of main ul  -->
    <!--
<li class="pull-right" style="width:25%; max-height:auto !important; min-height:20em !important; height:auto !important; border:1px solid green;"><!-- 2nd li of main ul --

<!--
<div>
<button class=" btn-block btn-sm M-button-GREEN-to-White M-UniversalBtn">Mail Client</button>
</div>
<div style="margin-top:2em;">
<button class=" btn-block btn-sm M-button-Red M-UniversalBtn">Report Client</button>
</div>--
<div style="padding-top:1em; padding-bottom:1em;"><!-- about client --
<ul class="M-No-Style-List"><!-- inner client list --
<li style="margin-top:1em;"><h3><i class="fa fa-1x fa-clock-o"></i>Your History</h3></li>
<li style="margin-top:1em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Jobs You Worked On</h4></li>
<li style="margin-top:1em;"><p><i class="fa fa-1x fa-angle-right"></i>15</p></li>
<li style="margin-top:1em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Hired Employees:</h4></li>
<li style="margin-top:1em;"><p><i class="fa fa-1x fa-angle-right"></i>3</p></li>
<li style="margin-top:1em;"><h4><i class="fa fa-1x fa-angle-double-right"></i>Profile Link:</h4></li>
<li style="margin-top:1em;"><p><i class="fa fa-1x fa-angle-right"></i>URL</p></li>
<!--<li style="margin-top:1em;"><button class="btn btn-block M-button-orange-to-white M-UniversalBtn btn-lg "><p class="M-Universal-Text">View Profile</p></button></li>--


</ul><!-- /inner client list --

</div><!-- /about client --

</li><!-- /2nd li of main ul   --
    -->


</ul><!-- /main ul -->
</div>
</section>
</body>
</html>
<div class="M-clr"></div>
<?php  include("footer.php"); ?>    
