<?php


require_once('Connection.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['jobAction'] == 'PostJob') {
        $haveLoggedInUserID = $_SESSION['USER_ID'];
//        var_dump($haveLoggedInUserID);
        $haveJobTitle = $_POST['jobTitle'];
        $haveCatagoryID = $_POST['catID'];
        $havePriceFrom = $_POST['priceFrom'];
        $havePriceTo = $_POST['priceTo'];
        $haveJobDescription = $_POST['desc'];
        $jobCareerLevel = $_POST['career_level'];
        $jobSkills = $_POST['skills'];
        $jobPaymentMethod = $_POST['payment_method'];
        $duation = $_POST['duration'];
        $commitment = $_POST['commitment'];


        // inserting values to the database
        $haveQuery = "INSERT INTO jobs (user_id,title,catagory,price_from,price_to,description,payment_method,duration,commitment,is_deleted,career_level)
 VALUES ('$haveLoggedInUserID','$haveJobTitle','$haveCatagoryID','$havePriceFrom','$havePriceTo','$haveJobDescription','$jobPaymentMethod','$duation','$commitment','0','$jobCareerLevel')";
     var_dump($haveQuery);
        $insertingDatatotheDatabaseQuery = $conn->query($haveQuery);
        if ($insertingDatatotheDatabaseQuery == TRUE) {
            ?>
            <script>
                window.alert("Job Posted Successfully !");
                window.location.href = '../views/jobs.php';
            </script>
        <?php } else {
            echo "@root got an issue ";
        }


    }
    if ($_GET['jobAction'] == 'DeleteJOB') {
        $haveJOBID = $_GET['job_id'];
        $DeletingTheJobQuery = $conn->query("DELETE from jobs where id = $haveJOBID");
        if ($DeletingTheJobQuery == TRUE) {
            ?>

            <script>
                window.alert("Job Deleted Successfully !");
                window.location.href = '../views/client-dashboard-jobs.php';
            </script>
        <?php } else {
            ?>
            <script>
                window.alert("Got Some System Error . Please Try again Later !");
                window.location.href = '../views/client-dashboard-jobs.php';
            </script>
            <?php
        }
    }

}