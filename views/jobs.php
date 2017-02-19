<?php
require_once('../process/Connection.php');
include("header.php"); ?>
    <html xmlns="http://www.w3.org/1999/html">

    <body style="background-color: #333;">
    <?php

        $haveJobsQuery = $conn->query("SELECT * FROM jobs  WHERE  is_deleted = 0 ORDER BY id  DESC ");//ha pe status active walo condition b lagani hai bad meh

    ?>

    <div class="M-clr"></div>
    <section class="w3-container" style="margin-top: 5em; background-color: white;">
        <div class="w3-container">
            <div class="w3-container"
                 style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
                <ul
                    style="list-style-type:none !important; text-decoration:none !important; padding-top:1em;">
                    <li>
                        <div>
                            <form class="w3-form col-sm-10 col-md-10 col-lg-10">
                                <input class="w3-input" placeholder="SEARCH" type="search">
                            </form>
                        </div>
                    </li>
                    <li style="padding-top:0.5em;" class="col-sm-2 col-md-2 col-lg-2">
                        <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm">
                            <a style="font-family: Arial" class="M-Universal-Link">SEARCH</a></button></li>
                    </li>
                    <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <form style=" margin-top:1em !important;">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="pull-left" style="margin-top:0.4em;">
                                        <label style="color:white;">Job Catagory</label>
                                        <select class="col-md-12" style=" height:2em;">

                                            <?php $queryForCatagory = $conn->query("SELECT * from catagory WHERE is_deleted = 0");
                                            while ($haveCatagoryDataArray = $queryForCatagory->fetch_array()) {
                                                ?>
                                                <option
                                                    value="<?php echo $haveCatagoryDataArray['id']; ?>"><?php echo $haveCatagoryDataArray['cat_name'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="pull-left" style="margin-top:0.4em;">
                                        <label style="color: white;">Career Level</label>
                                        <select class="col-md-12" style=" height:2em;">

                                            <?php
                                            $queryForLevel = $conn->query("SELECT * FROM level");
                                            while ($haveLevelData = $queryForLevel->fetch_array()) {
                                                ?>
                                                <option
                                                    value="<?php echo $haveLevelData['id']; ?>"><?php echo $haveLevelData['level_name']; ?></option>

                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="float: left; margin-left:-1.7em;">
    <div  style="padding-top:2em;">
        <button type="submit"class="btn-sm M-button-Grey-to-white M-UniversalBtn"><a style="font-family: Arial; font-size: medium;" class="M-Universal-Link">Filter</a></button>

    </div>

</div>
                                
                                

                            </form>
                        </div>

                    </li>
                    <!--  <li class="pull-right" style="padding-right:1em;">
                    <button class="btn btn-lg M-button-Job-Post-WHITE btn-block" style="border-radius:1.5px; width:15em;">Post A Job <span style="background-color:orange; color:white; border-radius:2px; height:4em; width:6em !important;" class="text-center"> Its FREE. </span></button>
                    </li>-->
                </ul>
            </div>


            <div class="M-clr"></div>

            <section>
                <div class=" w3-container">
                    <h2 class="text-center">Jobs</h2>
                    <br/><br/>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <?php while ($haveJobData = $haveJobsQuery->fetch_array()) { ?>
                            <div class=" col-sm-3 col-md-3 col-lg-3">
                                <div class=" well well-sm">
                                    <div class="panel">
                                        <div class="panel-heading"
                                             style="background-color:#063; color:white; height: 5em; background-size:contain;">
                                            <h5>Catagory Name</h5>

                                        </div><!--  /panel-heading-->
                                        <div class="panel-body text-justify" style="background-size: contain; ">
                                            <br>
                                            <center>
                                                <div style=" background-size: contain; box-sizing: content-box; overflow: hidden; height: 5em;  text-overflow-ellipsis:2; ">
                                                <h6 class=" text-justify">
                                                    <?php echo substr($haveJobData['title'],0,54); ?></h6>
                                                </div>
                                                <br>
                                                <div class="text-justify" style="height: 4em;">
                                                    <p><strong>Budget: </strong><span>$</span><span><?php echo $haveJobData['price_from']; ?> </span>
                                                        -<span><span>$</span><?php echo $haveJobData['price_to']; ?></span>
                                                    </p>
                                                    <p><strong>Career Level:</strong>Intermediate</p>
                                                </div>


                                            </center>
                                            <br>
                                            <!--<p>Html5,Css3,Bootstrap3...</p>-->
                                        </div><!--  /panel-body-->
                                        <div class="panel-footer"><a class="M-Universal-Link"
                                                                     href="Single.php?JobID=<?php echo $haveJobData['id']; ?>">
                                                <button class=" btn btn-block btn-sm"
                                                        style="height:3em; background-color:#063; color:white; ">
                                                    <p style="font-family: Arial; color: white; font-size: medium;" class="M-Universal-Link">
                                                        View
                                                        Full</p></button>
                                            </a></div>
                                    </div><!-- /panel-->
                                </div><!-- /well-->
                            </div><!-- /col -->
                        <?php } ?>

                    </div><!-- /row -->
                    <br/>
                    
                    <br><br>
                </div>
        </div>
        <br>
    </section>
    </div><!--FULL PAGE DIV to limit the page  -->


    <div class="clearfix"></div>
    </body>
    </html>
<?php
include("footer.php");
?>