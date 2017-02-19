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
    <div class=" clearfix"></div>

    <div style=" border:2px solid #060; border-radius:2px; margin-left:0em; margin-top:3em; width:100%; padding-bottom:1em;" class="w3-container"><!--  2nd container -->
      <ul style="list-style-type:none !important; padding-bottom:3em;" class="w3-container">
        <li>
          <h3 class="text-center" style="background-color:#999; margin-bottom:2em;">Transactions</h3>
        </li>
        <li>
          <div>
            <center>
              <table class="table table-bordered text-center" style="margin-top:3em;">
                <thead>
                <tr>
                  <th class="text-center">Name Of Employee</th>

                  <th class="text-center">Name Of Job</th>
                  <th class="text-center">Filled Interview Link</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="#" class="M-Universal-Link">David</a></td>
                  <td><span ><a  href="#" class="M-Universal-Link">Job Name</a></span>

                  </td>
                  <td><a href="#" class="M-Universal-Link">View Answers</a>
                  </td>

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