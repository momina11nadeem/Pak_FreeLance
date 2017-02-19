<?PHP

require("../process/Connection.php");

include("header.php");
?>
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
                    <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><h6>SEARCH</h6></button></li>
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
<!-- detailed view of employee -->
<section class="w3-container" style="background-color:white; padding-bottom:3em;">
<ul class="M-No-Style-List  w3-container" style="padding-top:5em;"><!-- main ul  -->
<li class="M-LiLeft" style="border:2px solid green; width:70%; padding-top:1em; padding-bottom:1em; height:auto !important;"><!-- 1st li of main ul  -->
<ul class="M-No-Style-List">
<!--<li class="M-LiLeft"><img src="images/0f9a3455d7426be109f7211307f0f19b.png" class="w3-circle"></li>-->
<li class="M-LiLeft"><h2 style="font-family:Cambria;">Name</h2>
<h4 style="font-family:Cambria;">To invite <span>Allen</span> to your posted job just send a message.</h4>
<p>Remember this will only sent to this employee , you have to send detailes of your job</p>

</li>


</ul>
<div class="col-md-12" style="margin-top:3em;">
<form class="w3-form w3-container" action="#" method="post">
<h3 style="font-family:Cambria; font-family:Cambria;">Fill In Details</h3>

<label style="padding-top:2em; padding-bottom:2em;">Write a message to the freelancer</label>
<textarea style="border:1px solid green;" class="w3-input M-Green-Inputs-Forms" type="text" rows="5" placeholder="I'd like to invite you to apply to my job. Please review this job post and apply if you're available.
">
</textarea>

<h3 style="margin-top:2em;">Describe Your Job Post</h3>
<label style="margin-top:2em;">Name Of Your Job Posting </label>

<input style="border:1px solid green; margin-top:1em; height:3em;"  type="text" class="w3-input M-Green-Inputs-Forms" placeholder="name of the job you posted" >
<label style="margin-top:2em; margin-bottom:2em;">Job Catagory</label>
<div class="row">
<select style=" width:97%;overflow:scroll !important;height:3em; margin-left:1em;" class="M-Green-Inputs-Forms"> 
<option>Web Development</option>
<option>Accounts and finance</option>
<option>SEO & Marketing</option>
<option>Writting</option>
<option>Web Development</option>
<option>Web Development</option>

</select>
</div>
<div>
<label style="margin-top:2em;">Skills:</label>
<textarea style="margin-top:2em; border:1px solid green;" class="w3-input col-lg-12 col-sm-12 col-md-12 M-Green-Inputs-Forms" rows="5" placeholder="what type of skills you want from employee" ></textarea>
</div>
<div>
<label style="margin-top:2em;">Payment:</label>
<select style="margin-top:2em; overflow:scroll !important;height:3em;" class="col-lg-12 col-sm-12 col-md-12 M-Green-Inputs-Forms">
<option>Pay by the hour</option>
<option>Pay a fixed price</option>
</select>
</div>
<div>
<label style="margin-top:2em;">Desired Experiance Level:</label>
<br>
<div style="margin-top:1em;">
<input type="radio"  name="level" value="Entry Level">Basic
<input type="radio"  name="level" value="Intermediate" style="margin-left:1em;">Intermediate
<input type="radio" name="level" value="Expert" style="margin-left:1em;">Expert
</div>

</div>
<div><!--Duration Div  -->
<div>
<label style="margin-top:2em;">Duration of your job:</label>
</div>
<select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;">
<option>more than 6 months</option>
<option>3 to 6 months</option>
<option>1 to 3 months</option>
<option>Less than 1 month</option>
<option>Less than 1 week</option>

</select>
</div><!-- /Duration Div  -->

<div><!--Commitment Div-->
<div>
<label style="margin-top:2em;">Commitment required for this job:</label>
</div>
<select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;">
<option>More than 30 hrs/week</option>
<option>Less than 30 hrs/week</option>
<option>I don't know yet </option>

</select>
</div><!-- /Commitment Div  -->
<!--
<div><!--type Div--
<div>
<label style="margin-top:2em;">Type Of The Project:</label>
</div>
<select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;">
<option>Ongoing Project</option>
<option>One-time Project</option>
<option>I am not sure</option>

</select>
</div><!-- /type Div  --
-->
<div><!-- specify -->
<label style="margin-top:2em;">Specify the project details:</label>
<textarea  style="margin-top:2em; border:1px solid green;"class="w3-input col-lg-12 M-Green-Inputs-Forms" rows="5" placeholder="describe the project and how it fits into your overall business/goals or needs."></textarea>
</div><!-- /specify -->
<div><!-- File div  -->
<label style="margin-top:2em;">Attatch a file :</label>
<input type="file">
<div><!-- screening -->
<label style="margin-top:2em;">Would you like to ask screening questions ?</label>
<p class="M-Fade-Menu">Candidate will answer this question when applying to your job.</p>
<textarea style="margin-top:2em;" rows="5" class="M-Green-Inputs-Forms col-sm-12 col-md-12" ></textarea>
</div><!-- /screening -->

<div><!-- visibility  -->
<label style="margin-top:2em;">Set The Visibility of Job:</label>
<h5>Who can find and apply to this job ?</h5>
<p class="M-Fade-Menu">The freelancer you've invited may not be available, so we recommend making your job post public so other qualified freelancers can find and apply.</p>

<select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em; margin-bottom:3em !important;">
<option>Visible and open  to any member of the site</option>
<option>Visible only to the user i have invited to this job</option>

</select>
</div><!-- /visibility  -->
<div class="M-clr"></div>
<div >
<button class="M-button-orange-to-white btn btn-block btn-lg"  type="submit" >Post & Send Invitation</button>
</div>
</form>
</div>
</li><!-- 1st li of main ul  -->
<li class="pull-right" style="width:25%; font-family:Cambria;"><!-- 2nd li of main ul -->


<div>
<a class="M-Universal-Link" href="Employee Profile.html"><button class=" btn-block  M-button-GREEN-to-White M-UniversalBtn"><h5>Hire Now !</h5></button></a>
</div>
<div style="margin-top:2em;">
<a class="M-Universal-Link" href="Reports.html"><button class=" btn-block  M-button-Red M-UniversalBtn"><h5>Report Employee</h5></button></a>
</div>
<div style="padding-top:0.5em; margin-top:3em !important; border:1px solid green;"><!-- about client -->
<ul class="M-No-Style-List w3-container" style="padding-bottom:1.5em !important;"><!-- inner client list -->
<li  style="margin-top:1em;"><h3 style="font-family:Cambria;"><i class="fa fa-1x fa-angle-double-right"></i> Need Help ?</h3>  
<br>
<h5 style="font-family:Cambria; word-spacing:0.5em;"><strong>Why Creating Job Post ?</strong></h5>
<p style="font-family:Cambria; word-spacing:0.5em;">A job post allows freelancers to get a clearer and more detailed sense of your project.

Sometimes the freelancer you invite is too busy or doesn't respond. In case that happens, with your job post already created, you'll be able to easily invite other qualified freelancers to work on your project.</p>

<br>
<h5 style="font-family:Cambria; word-spacing:0.5em;"><strong>Public vs. Invite-Only Jobs</strong></h5>
<br>
<p style="font-family:Cambria; word-spacing:0.5em; margin-top:1em;">

Making your post public so that anyone can find your job allows you to receive proposals from freelancers who are available and willing to work on your project.

Invite-only jobs will not receive proposals from the marketplace, but you can invite as many qualified freelancers as you like.</p>

</li>

</ul><!-- /inner client list -->

</div><!-- /about client -->

</li><!-- /2nd li of main ul   -->


</ul><!-- /main ul -->
</div>
</section>
</body>
</html>

<div class="M-clr"></div>
<?PHP include("footer.php"); ?>
