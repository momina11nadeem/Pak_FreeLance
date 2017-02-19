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
    <br><br><br>
    <div class="M-clr"></div>
    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
      <h1 class="text-center">Welcome to your dashboard !</h1>
      <br><br>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>

      </p>
    </header>
<br><br>

</div><!-- 1st container -->
</section>
<div class="M-clr"></div>

</body>
</html>
<?php

include ("footer.php");
?>