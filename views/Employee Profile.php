<?PHP

require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">
<div class=" clearfix" ></div>
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
                <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm" style="margin-top: 0.6em;"><a style="font-family: Arial; font-size:small;" class="M-Universal-Link">SEARCH</a></button></li>
                </li>
                <li class="col-sm-12 col-md-12 col-lg-12" style="margin-top:1em;">
                    <div class="w3-container">
                        <center>
                            <ul class="Responsive-nav">
                                <li><a  href="dashboard-jobs.php">Jobs</a></li>
                                <li><a href="employee-payments.php">Payments</a></li>
                                <li><a href="employee-self.php">My Profile</a></li>
                                <li><a href="employee-editing.php">Profile Settings</a></li>
                            </ul>
                        </center>

                    </div>
                </li>

            </ul>
        </div>
    </div></section><!-- /Green section with search bar -->
<div class="clearfix"></div>
<!-- detailed view of job  -->
<section class="w3-container" style="background-color:white;">
    <div class="w3-container">
<br><br><br>
<ul class="M-No-Style-List  w3-container"><!-- main ul  -->
<li class="M-LiLeft" style="border:2px solid green; width: 70%;"><!-- 1st li of main ul  -->
<ul class="M-No-Style-List w3-container">
<!--<li class="M-LiLeft"><img src="images/0f9a3455d7426be109f7211307f0f19b.png" class="w3-circle"></li>-->
<li class="M-LiLeft"><h2>Name</h2>

<h4>Web Developer</h4>
</li>
</ul>
<hr>
<div class="col-md-12" style="margin-top:2em;">
    <h3>Skills</h3>
        <p>web, content writting</p>
    <hr>
<h3>Overview</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<br><br>
</div>

</li><!-- 1st li of main ul  -->
<li class="pull-right" style="width: 22%;"><!-- 2nd li of main ul -->

<a href="Invite-To-Work.php" style="text-decoration: none;"><button class=" btn-block  M-button-GREEN-to-White M-UniversalBtn" style="width: 100% !important; height: 2.7em !important; border-radius: 1px; ">Invite To Work</button></a>

<br>
<a href="#" style="text-decoration: none;"><button class=" btn-block  M-button-Red M-UniversalBtn" style="width: 100% !important; height: 2.8em !important; border-radius: 1px; ">Report Employee</button></a>

<br>
    <button class="btn-block M-button-orange-to-white M-UniversalBtn" style="width: 100% !important; height: 2.7em !important; border-radius: 1px;"><h6>Hire Now</h6></button>

    <br>
   <a href="interview-for-client.php" style="text-decoration: none;"> <button class="btn-block M-button-Blue M-UniversalBtn" style="width: 100% !important; height: 2.7em !important; border-radius: 1px; ">Interview Employee</button>
</a>
      
      
       <br>
</li><!-- /2nd li of main ul   -->


</ul><!-- /main ul -->
</div>
    <br><br><br>
</section>

<div class=" clearfix"></div>
</body>
</html>


<?PHP 
include("footer.php");
?>
