<?PHP require("../process/Connection.php");
session_start();
include("header.php");
$haveJOBID = $_GET['job_id'];
if (!empty($_POST)) {
    $haveScreeningQuestions = $_POST['question4'];
    $haveLoggedInUserID = $_SESSION['USER_ID'];

//    var_dump($haveJOBID); die ;
    $haveSQLQuery =  "INSERT INTO `interview_questions` (`user_id`, `job_id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`) VALUES ('$haveLoggedInUserID', '$haveJOBID', NULL, NULL, NULL, '$haveScreeningQuestions', NULL, NULL)";
//    var_dump($haveSQLQuery); die ;
    $haveInsertionQuery = $conn->query($haveSQLQuery);
//     var_dump($haveInsertionQuery );


    if($haveInsertionQuery == TRUE){
        ?>
        <script>
            window.alert("Interviews Question sent ");
            window.location.href = 'jobs.php';
        </script>


        <?php
    }else{ ?>
        <script>
        window.alert("Our system got some problem . Please try again later ");
        window.location.href = 'jobs.php';
        </script>
<?php
    }

} else {

    ?>

    <html>


    <body style="background-color: #333;">
    <div class="M-clr"></div>

    <section class=" w3-container M-Section-No-Style" style="margin-top:5em;"><!-- job posting -->
        <div class="w3-container">
            <div class="w3-container"
                 style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
                <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
                    <li>
                        <div>
                            <form class="w3-form col-sm-10">
                                <input class="w3-input" placeholder="SEARCH" type="search">
                            </form>
                        </div>
                    </li>
                    <li style="padding-top:0.5em;" class="col-sm-2">
                        <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><h6>SEARCH</h6></button>
                    </li>
                    </li>
                    <?php

                    if (!empty($_SESSION)) {//outer if
                        if ($_SESSION['user_type'] == 'employee') {//if1

                            include("employee-green-menu.php");
                        }//if1
                        elseif ($_SESSION['user_type'] == 'client') {//if2

                            include("client-green-menu.php");


                        }//if2
                    }//outer if


                    ?>
                </ul>
            </div>
        </div>


        <div class="w3-container " style="padding-bottom:3em;">
            <h1 class="text-center" style=" margin-top:2em;">Job Interview!</h1>
            <br>
            <h6 class="text-center">The answers to the questions will be filled by employee .
                You can only ask a screening question int this from below.
                You just have to submit the form to the employee</h6>
            <div style=" padding-top:3em; alignment-adjust:middle !important;">
                <ul class="M-No-Style-List w3-container" style="margin-top:2em;">
                    <li class="M-LiLeft col-md-8 col-md-offset-2">
                        <form class="w3-form w3-container col-md-12 "
                              style="border:2px solid green; border-radius:2px; font-family:Cambria;"
                              action="interview-for-client.php?job_id=<?php echo $haveJOBID?>" method="post">
                            <label style="padding-bottom:1em; padding-top:1em;" class="M-Universal-Label">What is level
                                of your command on the skills required for this job?</label>
                            <div class=" col-sm-12 col-md-12 col-lg-12"><!-- command level radios -->
                                <ul class="M-No-Style-List"
                                    style="font-family:Cambria; font-size:16px; margin-top:1em;">
                                    <li class="M-LiLeft M-Styling-Li">
                                        <input type="radio" class=" M-Styling-Li" name="command-level" disabled>Basic
                                    </li>
                                    <li class="M-LiLeft  M-Styling-Li">
                                        <input type="radio" class=" M-Styling-Li" name="command-level" disabled>Intermediate
                                    </li>
                                    <li class="M-LiLeft  M-Styling-Li">
                                        <input type="radio" class="  M-Styling-Li" name="command-level" disabled>Expert
                                    </li>
                                </ul>
                            </div><!-- /command level radios -->
                            <div><!-- time -->
                                <label style="padding-bottom:1em; padding-top:1em !important;"
                                       class="M-Universal-Label">For how much time you are working on these skills
                                    ?</label>
                                <select style="height:3em; overflow:hidden; font-family:Cambria; font-size:16px;"
                                        class="M-Green-Inputs-Forms col-sm-12 col-md-12 col-lg-12" disabled>
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
                                <label style="padding-bottom:1em; padding-top:1em !important;"
                                       class="M-Universal-Label">Why shoul I hire you ?</label>
                                <textarea type="text" class="col-sm-12 col-md-12 col-lg-12"
                                          style="border:1px solid green; overflow: scroll;" rows="4"
                                          disabled></textarea>
                            </div><!-- /why hire -->
                            <div><!-- screening -->
                                <label style="margin-top:2em;">Would you like to ask screening questions ?</label>
                                <p class="M-Fade-Menu">Candidate will answer this question when applying to your
                                    job.</p>
                                <textarea name="question4" style="margin-top:2em;" rows="5"
                                          class="M-Green-Inputs-Forms col-sm-12 col-md-12"></textarea>
                            </div><!-- /screening -->
                            <br>
                            <div class="clearfix"></div>
                            <br>
                            <div><!-- time div -->
                                <label>Set time period of your project</label>
                                <div class="clearfix"></div>
                                <br>
                                <input class="M-Green-Inputs-Forms col-sm-12 col-md-12" type="date">
                            </div><!-- /time div -->
                            <div><!-- previously -->
                                <label style="padding-bottom:1em; padding-top:1em;" class="Universal-Label">Describe
                                    your previous projects and your task regarding that projects ?</label>
                                <textarea class="w3-input"
                                          placeholder="Describe the projesct you have previously worked on and what was the part you were playing in "
                                          rows="5" style="border:1px solid green; overflow: scroll;"
                                          disabled></textarea>
                            </div><!-- /previously -->

                            <div>
                                <div class="clearfix"></div>
                                <br><br>
                                <button type="submit" class="btn btn-block M-UniversalBtn M-button-orange-to-white "
                                        style=" width: 10em; font-family: Arial; ">Submit
                                </button>
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
    <?PHP include("footer.php");
} ?>

