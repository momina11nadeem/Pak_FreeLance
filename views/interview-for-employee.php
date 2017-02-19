
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
        <h6 class="text-center">You have to fill the answers to the following question to win the job.</h6>
        <div style=" padding-top:3em; alignment-adjust:middle !important;">
            <ul class="M-No-Style-List w3-container" style="margin-top:2em;">
                <li class="M-LiLeft col-md-8 col-md-offset-2">
                    <form class="w3-form w3-container col-md-12 "
                          style="border:2px solid green; border-radius:2px; font-family:Cambria;"
                          action="" name="for_employee"
                          method="">
                        <div class="clearfix"></div>
                        <br>

                        <label class="M-Universal-Label">What is level of your command on the skills required for this
                            job?</label>
                        <div class="clearfix"></div>
                        <br>

                        <div class=" col-sm-12 col-md-12 col-lg-12"><!-- command level radios -->
                            <ul class="M-No-Style-List" style="font-family:Cambria; font-size:16px; margin-top:1em;">
                                <li class="M-LiLeft M-Styling-Li">
                                    <input type="radio" class=" M-Styling-Li" name="command-level">Basic
                                </li>
                                <li class="M-LiLeft  M-Styling-Li">
                                    <input type="radio" class=" M-Styling-Li" name="command-level">Intermediate
                                </li>
                                <li class="M-LiLeft  M-Styling-Li">
                                    <input type="radio" class="  M-Styling-Li" name="command-level">Expert
                                </li>
                            </ul>
                        </div><!-- /command level radios -->
                        <div><!-- time -->
                            <div class="clearfix"></div>
                            <br>

                            <label class="M-Universal-Label">For how much time you are working on these skills ?</label>
                            <div class="clearfix"></div>
                            <br>

                            <select style="height:3em; overflow:hidden; font-family:Cambria; font-size:16px;"
                                    class="M-Green-Inputs-Forms col-sm-12 col-md-12 col-lg-12" name="time_on_skills">
                                <option>--Select--</option>
                                <option>Less than 6 months</option>
                                <option>More than 6 months</option>
                                <option>Less than 1 year</option>
                                <option>More than 1 year</option>
                                <option>Less then 2 years</option>
                                <option>More than 2 years</option>
                                <option>Less then 3 years</option>
                                <option>More than 3 years</option>
                                <option>Less then 4 years</option>
                                <option>More than 4 years</option>
                                <option>Less then 5 years</option>
                                <option>More than 5 years</option>

                            </select>
                        </div><!-- /time -->
                        <div><!-- why hire -->
                            <div class="clearfix"></div>
                            <br>

                            <label class="M-Universal-Label">Why shoul I hire you ?</label>
                            <div class="clearfix"></div>
                            <br>

                            <textarea type="text" class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid green;
                            overflow: scroll;" rows="4" name="why_hire"></textarea>
                        </div><!-- /why hire -->
                        <div><!-- screening -->
                            <div class="clearfix"></div>
                            <br>
                            <label> screening questions by client</label>
                            <div class="clearfix"></div>
                            <br>
                            <?php



                            ?>


                            <p></p>
                            <label> write our answer below</label>

                            <p class="M-Fade-Menu"></p>
                            <textarea rows="5" class="M-Green-Inputs-Forms col-sm-12 col-md-12"
                                      name="screen_question"></textarea>
                        </div><!-- /screening -->

                        <div><!-- previously -->
                            <div class="clearfix"></div>
                            <br>

                            <label class="Universal-Label">Describe your previous projects and your task regarding that
                                projects ?</label>
                            <div class="clearfix"></div>
                            <br>

                            <textarea class="w3-input"
                                      placeholder="Describe the projesct you have previously worked on and what was the part you were playing in "
                                      rows="5" style="border:1px solid green; overflow: scroll;"
                                      name="previous_project"></textarea>
                        </div><!-- /previously -->

                        <div>
                            <br>
                            <button type="submit" class="btn btn-block M-UniversalBtn M-button-orange-to-white" style=" width: 10em;font-size: small;">
                                <a style="font-family: Arial" class="M-Universal-Link" href="" >Submit</a></button>
                            <br>
                        </div>
                    </form>
                </li>
                <!--
            <li class="M-LiLeft w3-container" style="border:1px solid green; margin-top:0em; height:20em; width:25%; margin-left:4em;">
            <h3><i class="fa fa-1x fa-angle-double-right"></i> Interview Details</h3>
            <p class="M-Universal-Text" style="padding-top:2em;"><i class=" fa fa-1x fa-angle-right"></i> For Best Understanding between Employee and Client</p>
            <p class="M-Universal-Text"><i class=" fa fa-1x fa-angle-right"></i> Employee Name:<span>Zeeshan</span></p>
            <p class="M-Universal-Text"><i class=" fa fa-1x fa-angle-right"></i> Client Name:<span>Zaheer</span></p>
            <a class="M-Universal-Link" style="text-decoration:none !important;" href="Client Profile.html"><button class="btn btn-block M-button-orange-to-white M-UniversalBtn btn-lg " style="width:4em; height:3em;"><p class="M-Universal-Text">View Profile</p></button></a>

            </li>
                -->
                
                
            </ul>
        </div>
    </div>
    </div>

</section><!-- /job posting -->
</body>
</html>
<div class="M-clr"></div>
<?PHP include("footer.php");  ?>