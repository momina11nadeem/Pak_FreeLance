<?php
require ("../process/Connection.php");
include ("header.php");

?>



<html>
          <body style="background-color: #333;">
          <div class="M-clr"></div>

          <section class=" w3-container M-Section-No-Style" style="margin-top:5em;">
              <div class="w3-container">
                  <!-- job posting -->
                  <div class="w3-container"
                       style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
                      <ul
                          style="list-style-type:none !important; text-decoration:none !important; padding-top:1em;">
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
                                          <li><a  href="dashboard-jobs.php">Dashboard</a></li>
                                          <li><a href="employee-payments.php">Payments</a></li>
                                          <li><a href="employee-self.php">My Profile</a></li>
                                          <li><a href="edit-profile.php">Profile Settings</a></li>
                                      </ul>
                                  </center>

                              </div>
                          </li>

                      </ul>
</div>


<div class="w3-container ">
    <br>
    <h1 class="text-center">Enter your details !</h1>
    <br><br><br>
    <div
        style=" alignment-adjust:middle !important;">
        <ul class="M-No-Style-List w3-container col-md-12">
            <li class="col-md-8 col-md-offset-2" style="border:2px solid green;">
                <form class="w3-form w3-container col-md-12 "
                      action="../process/JobsContoller.php?jobAction=PostJob" method="post">
                    <label><h3>Name:</h3></label>
                    <h6 class="text-justify">momina</h6>

                    <br>
                    <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>

                    <input type="text" class="form-control"
                           placeholder="Enter your name " name="name"
                           style="height: 3em; border: 1px solid green; border-radius: 1px;">
                    <div>
                        <br>
                        <label><h3>
                                Occupation</h3></label>

                        <h6 class="text-justify">Accountant</h6>

                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                        <input type="text" class="form-control"
                               placeholder="Enter your occupation" name="f-name"
                               style="height: 3em; border: 1px solid green; border-radius: 1px;">
                        <br>

                    </div>
                    <div>
                        <label><h3>
                                Skills</h3></label>
                        <h6 class="text-justify">Business report making</h6>

                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                        <input type="text" class="form-control"
                               placeholder="Enter you skills " name="skill"
                               style="height: 3em; border: 1px solid green; border-radius: 1px;">
                        <br>

                    </div>
                    <div>
                        <label><h3>
                                Company</h3></label>
                        <h6 class="text-justify">UOL</h6>

                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                        <input type="text" class="form-control"
                               placeholder="Enter your company" name="f-name"
                               style="height: 3em; border: 1px solid green; border-radius: 1px;">


                    </div>
                    <br>
                    
                    
                    <div>

                        <label><h3>Credit Card No.</h3></label>
                        <h6 class="text-justify">5454545454445</h6>

                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                        <input type="number"  name="card" class="col-sm-12 col-md-12 col-lg-12" style="border: 1px solid green; height:3em;">

                    </div>

                    <div style="margin-top: 1em;">

                        <label><h3>CNIC No.</h3></label>
                        <h6 class="text-justify">5454545454445</h6>
                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                        <input type="number" name="Cnic-card"class="col-sm-12 col-md-12 col-lg-12"style="border: 1px solid green;height:3em; " >

                    </div>

                    <div style="margin-top: 1em;" >

                        <label><h3>Mobile No.</h3></label>
                        <h6 class="text-justify">54545485525454</h6>
                        <br>
                        <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>

                        <input type="number" name="mobile-number"class="col-sm-12 col-md-12 col-lg-12" style="border: 1px solid green;height:3em; " >

                    </div>



                    <label><h3>
                            Description:</h3></label>
                    <h6 class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</h6>

                    <br>

                    <p>Edit/update below <i class="fa fa-1x fa-pencil"></i></p>
                  <textarea class="w3-input" name="desc"
                            placeholder="Description "
                            rows="5"
                            style="overflow:scroll !important; border:1px solid green;"></textarea>
                    <br><br>
                    <button type="submit"
                            class="btn btn-block M-button-orange-to-white M-UniversalBtn" style="width: 10em;">
                        <a style="font-family: Arial; font-size: large;" class="M-Universal-Link">Submit</a></button>

                </form>
            </li>
            <!--  <li class="M-LiLeft M-Styling-Li"
                  style="border:1px solid green; margin-top:0em; width:25%; margin-left:3em; height:20em;">
                <h3><i class="fa fa-1x fa-angle-double-right "></i>Why Posting
                  Job?</h3>
                <p style="padding-top:2em; word-spacing:0.5em !important;">A job
                  post allows freelancers to get a clearer and more detailed
                  sense of your project.

                  Sometimes the freelancer you invite is too busy or doesn't
                  respond. In case that happens, with your job post already
                  created, you'll be able to easily invite other qualified
                  freelancers to work on your project.</p>
              </li>-->
        </ul>
    </div>
</div>
</div>
<br><br>
</section><!-- /job posting -->
</body>
</html>

<?php

include("footer.php");
?>
         