<?PHP
require("../process/Connection.php");
include("header.php"); ?>
    <html xmlns="http://www.w3.org/1999/html">
    <body style="background-color: #333;">
    <div class="M-clr"></div>
    <section class="w3-container" style="background-color:white !important; margin-top:5em; padding-bottom:3em;">
        <div class="w3-container"><!-- 1st container -->
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
                        <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a
                                    style="font-family: Arial" class="M-Universal-Link" href="#"
                                    name="Search">SEARCH</a></button>
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
            <div class=" clearfix"></div>

            <div style=" border:2px solid #060; border-radius:2px; margin-left:0em; margin-top:3em; width:100%; padding-bottom:1em;"
                 class="w3-container"><!--  2nd container -->
                <ul style="list-style-type:none !important; padding-bottom:3em;" class="w3-container">
                    <li>
                        <h3 class="text-center" style="background-color:#999; margin-bottom:2em;">JOBS</h3>
                    </li>
                    <li>
                        <div>
                            <center>
                                <table class="table table-bordered" style="margin-top:3em;">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Job Title</th>

                                        <th class="text-center">Proposals</th>
                                        <th class="text-center">Hired Employee</th>
                                        <th class="text-center">Interviews</th>
                                        <th class="text-center">Project Files by Employee</th>


                                        <th class="text-center">Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $haveLoggedInUserID = $_SESSION['USER_ID'];
                                    //                                    var_dump($haveLoggedInUserID); die;
                                    $haveJobsQuery = $conn->query("SELECT * FROM `jobs` WHERE user_id =$haveLoggedInUserID");//ha pe status active walo condition b lagani hai bad meh
                                    //            var_dump($haveJobsDataArray);
                                    while ($haveJobsDataArray = $haveJobsQuery->fetch_array()) {

                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $haveJobsDataArray['title']; ?></td>
                                            <?php
                                            $haveJobID = $haveJobsDataArray['id'];
                                            $haveJobAppllicationQuery = $conn->query("SELECT * FROM `job_application` WHERE job_id =$haveJobID");

                                            ?>
                                            <td class="text-center">
                                                <?php while ($haveJobApplicationProposalArray = $haveJobAppllicationQuery->fetch_array()) {
                                                    $haveApplicantUSerId  =  $haveJobApplicationProposalArray['user_id'];
                                                    $haveJobApplicantNameQuery = $conn->query("SELECT * FROM `users` WHERE id=$haveApplicantUSerId");

                                                    $haveJobApplicantname =  $haveJobApplicantNameQuery->fetch_array();
//                                                   var_dump($haveJobApplicantname );
                                                    ?>
                                                    <span><a href="application-from-employee.php?application_id=<?php echo $haveJobApplicationProposalArray['id']; ?>&emp_name= <?php echo $haveJobApplicantname['full_name']?>&job_name=<?php echo $haveJobsDataArray['title'];?>"
                                                             class="M-Universal-Link"><?php echo $haveJobApplicantname['full_name'] ?></a></span>
                                                    <br>
                                                <?php }//JOB APPLICATION PROPOSAL ?>
                                            </td>

                                            <td class="text-center"><a href=" Employee Profile.php"
                                                                       class="M-Universal-Link">Not Available</a></td>
                                            <td class="text-center"><a href="interview-client-answered.php"
                                                                       class="M-Universal-Link">View filled
                                                    interview</a>
                                            </td>
                                            <td class="text-center"><a href="project-file-for-client.php"
                                                                       class="M-Universal-Link">View File</a></td>
                                            <td class="text-center">
                                                <div>
                                                    <span class="col-sm-12 text-center"><a class="M-Universal-Link" href="../process/JobsContoller.php?jobAction=DeleteJOB&job_id=<?php echo $haveJobID; ?>">Delete Post</a></span>
                                                </div>
                                                <br>
                                                <div>
                                                    <span class="col-sm-12 text-center"><a class="M-Universal-Link">Make Public</a></span>
                                                </div>
                                                <div>
                                                    <span class="col-sm-12 text-center"><a class="M-Universal-Link"> Edit Post </a></span>
                                                </div>


                                            </td>
                                        </tr>
                                    <?php }// JOBS DATA ARRAY ?>

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

include("footer.php");
?>