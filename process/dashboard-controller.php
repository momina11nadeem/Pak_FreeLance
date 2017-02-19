<?php
require("../process/Connection.php");
session_start();
if (!empty($_SESSION)) {//empty session if

    if ($_GET['userRequest'] == 'DashboardRequest') {//user request if

        if ($_SESSION['user_type'] == 'client') {//user type if or client if

            ?>

            <script>

                window.location.href = '../views/client-dashboard.php';
            </script>

            <?php


        }//user type if or client if

        elseif ($_SESSION['user_type'] == 'employee') {//employee if

            ?>

            <script>

                window.location.href = '../views/Employee-Dashboard.php';

            </script>
            <?php

        }   //employee if
    }//user request if

    else {
        ?>

        <script>
            window.alert('you need to login first to view your dashboard.');
            window.location.href = '../views/signin.php';


        </script>
        <?php

    }


}//empty session if 

?>