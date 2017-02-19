<?PHP
require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">
<div class="M-clr" ></div>
<section class="w3-container" style="background-color:white !important; margin-top:5em; padding-bottom:3em;">
  <div class="w3-container"><!-- 1st container -->
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
    <div class=" clearfix"></div>
    
    

    <div style=" border:2px solid #060; border-radius:2px; margin-left:0em; margin-top:3em; width:100%; padding-bottom:1em;" class="w3-container"><!--  2nd container -->
      <ul style="list-style-type:none !important; padding-bottom:3em;" class="w3-container">
        <li>
          <h3 class="text-center" style="background-color:#999;">Payments</h3>
        </li>
        <li>
          <div>
            <center>
              <table class="table table-bordered text-center" style="margin-top:3em;">
                <thead>
                <tr>

                  <th class="text-center">Name Of Client</th>
                  <th class="text-center"> Job Invitations</th>
                  <th class="text-center">Links to invites</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><span ><a  href="Client Profile.php" class="M-Universal-Link">John</a></span>


                  <td>fully functional site in wordpress</td>
                  <td><a href="Single.php" class="M-Universal-Link">View Job</a></td>
                </tr>
              
                </tbody>
              </table>
            </center>
          </div>

        </li>
      </ul>

    </div><!-- /2nd container -->
    


   </div><!-- 1st container -->
</section>
<div class="clearfix"></div>

</body>
</html>
<?php

include ("footer.php");

?>