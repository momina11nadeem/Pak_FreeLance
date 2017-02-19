
<?PHP require("../process/Connection.php");
include("header.php");
?>
<html>


<body style="background-color: #333;">
<div class="M-clr" ></div>

<section class=" w3-container M-Section-No-Style" style="margin-top:5em;"><!-- job posting -->
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

    <div class="w3-container " style="padding-bottom:3em;">
        <h1 class="text-center" style=" margin-top:2em;">Job Interview!</h1>
        <br>
        <h6 class="text-center">Answer are filled by the employee</h6>
        <div style=" padding-top:3em; alignment-adjust:middle !important;">
            <ul class="M-No-Style-List w3-container" style="margin-top:2em;">
                <li class="M-LiLeft" style="width: 70%;" >
                    <form class="w3-form w3-container col-md-12 " style="border:2px solid green; border-radius:2px; font-family:Cambria;">
                        <label style="padding-bottom:1em; padding-top:1em;" class="M-Universal-Label">What is level of your command on the skills required for this job?</label>
                        <div><!-- command level radios -->
                           <p class="text-justify">Answer</p>
                        </div><!-- /command level radios -->
                        <div><!-- time -->
                            <label style="padding-bottom:1em; padding-top:1em !important;" class="M-Universal-Label">For how much time you are working on these skills ?</label>
                            <p class="text-justify">Answer</p>

                            
                            
                        </div><!-- /time -->
                        <div><!-- why hire -->
                            <label style="padding-bottom:1em; padding-top:1em !important;" class="M-Universal-Label">Why shoul I hire you ?</label>
                            <p class="text-justify">Answer</p>
                        </div><!-- /why hire -->
                        <div><!-- screening -->
                            <label style="margin-top:2em;">Screening Questions</label>
                            <br>
                            <pclass="text-justify">Questions Paragraph from db</p>
                            <p class="text-justify">Answers para from db</p>
                        </div><!-- /screening -->

                        <div><!-- previously -->
                            <label style="padding-bottom:1em; padding-top:1em;" class="Universal-Label">Describe your previous projects and your task regarding that projects ?</label>
                            <p class="text-justify">Answer</p>
                        </div><!-- /previously -->

                       
                    </form>
                </li>
                
            <li class="M-LiLeft w3-container" style=" margin-top:0em; height:20em; width:25%; margin-left: 4em;">
             <!--   <a href="Invite-To-Work.php" style="text-decoration: none;"><button class=" btn-block  M-button-GREEN-to-White M-UniversalBtn" style="height: 2.8em;"><a style="font-family: Arial; font-size: medium;" class="M-Universal-Link">Invite To Work</a></button></a>

                <br>-->
                <a href="#" style="text-decoration: none;"><button class=" btn-block  M-button-Red M-UniversalBtn" style="height: 2.8em;"><a style="font-family: Arial; font-size: medium;" class="M-Universal-Link">Report Employee</a></button></a>

                <br>
                <button class="btn-block M-button-orange-to-white M-UniversalBtn" style="width: 100% !important; height: 2.8em !important; "><a style="font-family: Arial; font-size: medium;" class="M-Universal-Link">Hire Now</a></button>

                <br>

            </li>
            </ul>
        </div>
    </div>
    </div>

</section><!-- /job posting -->
</body>
</html>
<div class="M-clr"></div>
<?PHP include("footer.php");  ?>

