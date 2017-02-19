<?php
require("../process/Connection.php");
include("header.php");
if (!empty($_SESSION)) {
    if ($_SESSION['user_type'] == 'employee') {
        if (empty($_POST)) {
            ?>
            <html>
            <head>

            </head>
            <body style="background-color: #333;">
            <div class="M-clr"></div>

            <section class=" w3-container M-Section-No-Style" style="margin-top:5em;">
                <!-- job application -->
                <div class="w3-container">
                    <div class="w3-container"
                         style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
                        <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
                            <li>
                                <div>
                                    <form class="w3-form col-sm-10 col-md-10 col-lg-10">
                                        <input class="w3-input" placeholder="SEARCH" type="search">
                                    </form>
                                </div>
                            </li>
                            <li style="padding-top: 0.5em;" class="col-sm-2 col-md-2 col-lg-2">
                                <button class=" btn-small M-button-Grey-to-white M-UniversalBtn btn-sm">
                                    <a class="M-Universal-Link" href="#">SEARCH</a></button>
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
                    <h1 class="text-center" style=" margin-top:1em;">Apply for Job!</h1>
                    <h3 class="text-center">Fill in the details in order to win the chance to work on this job</h3>
                    <div style=" padding-top:3em; alignment-adjust:middle !important;">
                        <ul class="M-No-Style-List w3-container">
                            <li class=" col-md-8 col-md-offset-2">
                                <form class="w3-form w3-container col-md-12 "
                                      style="border:2px solid green; border-radius:2px;" method="post"
                                      action="Apply-Job.php?jobID=<?php echo $_GET['JobID']; ?>">
                                    <div class="clearfix"></div>
                                    <br>
                                    <label>Name Of Job:</label>
                                    <div class="clearfix"></div>
                                    <br>
                                    <input type="text" name="name_job" class="w3-input M-Green-Inputs-Forms"
                                           placeholder="Job name will be shown by database here" aria-disabled="true" disabled="disabled"
                                            value="<?php echo $_GET['JobName'];?>" style="border:1px solid green;">
                                    <div>

                                        <div class="clearfix"></div>
                                        <br>
                                        <label>Mention Your Milestone:</label>
                                        <div class="clearfix"></div>
                                        <br>
                                        <input type="text" name="milestone"
                                               placeholder="how much of project will you deliver in the following price and time "
                                               class="w3-input M-Green-Inputs-Forms" style="border:1px solid green;">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div>
                                        <!--  <div class="clearfix"></div>
      <br>
                                          <label>Price Type:</label>
                                          <div class="clearfix"></div>

                                          <br>
                                          <select style="height:3em; overflow:hidden;" class="M-Green-Inputs-Forms col-md-12">
                                              <option>Fixed Price</option>
                                              <option>Hourly Price</option>
                                          </select>

                                      </div>-->
                                        <div class="clearfix"></div>
                                        <br>
                                        <label>Select Price :<span class="M-Fade-Menu"></span></label>
                                        <div class="clearfix"></div>

                                        <br>
                                        <div>
                                            <ul class="M-No-Style-List col-md-12">
                                                <li class="M-LiLeft M-Styling-Li">
                                                    <p class="M-Fade-Menu">Select Price in the job's budget by client  (in dollars)</p>
                                                    <input type="number" name="price" placeholder="Select"
                                                           class="M-Green-Inputs-Forms"><span><strong> $</strong></span></li>

                                            </ul>
                                        </div><!-- /price range div  -->
                                        <div class="clearfix"></div>

                                        <label style="padding-bottom:1em; padding-top:1em;">Description:</label>
        <textarea class="w3-input" name="desc" placeholder="Describe yourself and your skills in order to win the job"
                  rows="5"
                  style="border:1px solid green;"></textarea>
                                        <div>
                                            <div class="clearfix"></div>

                                            <br>
                                            <label>Enter Card Number</label>
                                            <div class="clearfix"></div>

                                            <br>
                                            <input style="height:3em;" name="card_number"
                                                   class="col-sm-12 col-md-12 col-lg-12 M-Green-Inputs-Forms"
                                                   placeholder="credit card number">
                                            <div class="clearfix"></div>

                                            <br>
                                            <!--
                                           <label style="padding-bottom:2em; padding-top:1em; padding-left:-1em;"><h3>Payment Method:</h3></label>
                                           <ul class="M-No-Style-List col-md-12">
                                           <li  class="M-LiLeft M-Styling-Li">
                                           <input type="radio"  name="PAYMENT">Visa Card</li>
                                           <li  class="M-LiLeft M-Styling-Li">
                                           <input type="radio"  name="PAYMENT">Master Card</li>
                                           <li  class="M-LiLeft M-Styling-Li">
                                           <input type="radio"  name="PAYMENT">Skrill</li>
                                           </li>
                                           </ul>-->

                                        </div>

                                        <div style=" margin-top:1em;">
                                            <button type="submit"
                                                    class="btn btn-block M-UniversalBtn M-button-orange-to-white btn-sm"
                                                    style=" width:10em;  margin-top:1em; font-size: small;"><a
                                                    class="M-Universal-Link">Apply</a></button>
                                            <br>
                                        </div>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </section><!-- /job application -->

            <div class="M-clr"></div>
            </body>
            </html>
            <?php

            include("footer.php");
            ?>
            <?php
        } else {
            $haveNameOfJob = $_POST['name_job'];
            $haveLoggedInuserID = $_SESSION['USER_ID'];
            $haveJobID= $_GET['jobID'];
            $haveMileStone = $_POST['milestone'];
            $haveJobPrice = $_POST['price'];
            $haveJobDescription = $_POST['desc'];
            $haveCardNumber = $_POST['card_number'];
            // inserting values to the database
            $insertingDatatotheDatabaseQuery = $conn->query("INSERT INTO job_application (job_id,user_id,name_job,milestone,price,description,card_number)
 VALUES ('$haveJobID','$haveLoggedInuserID','$haveNameOfJob','$haveMileStone','$haveJobPrice','$haveJobDescription','$haveCardNumber')");
               if($insertingDatatotheDatabaseQuery  == TRUE){
                  ?> <script>
                   window.alert("You have Sucessfully Applied for this job ");
                   window.location.href = 'jobs.php';
                   </script>
              <?php }





       }
    } else { ?>
        <script>
            window.alert("You are logged in as an client . Please log in as employee to apply on  the Job");
            window.location.href = '../views/signin.php';
        </script>
    <?php }

} else {
    ?>
    <script>
        window.alert("You need to login first as a employee to apply on the Job ");
        window.location.href = '../views/INDEX.php';
    </script>
<?php }

?>
