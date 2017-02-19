<?php require_once("../process/Connection.php");
session_start();
?>

<html lang="en">
<head>
    <link href="../STYLE/main1.css" rel="stylesheet" />
    <link href="../STYLE/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../STYLE/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="../STYLE/W3STYLE.css" rel="stylesheet" type="text/css">
    <link href="../STYLE/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  content="width=device-width, initial-scale=1" name="viewport"/>
    <title>PAK-FREELANCE</title>

   
</head>

<body class="w3-container">
<div>
    <section style="font-family: Arial">
        <nav class="navbar navbar-custom navbar-fixed-top w3-container" role="navigation">
            <div class="container-fluid">
                <!-- logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../views/INDEX.php"><strong style="font-family: Arial">PAK<span style="color:#090; font-family: Arial">-FREELANCE</span></strong></a>
                </div>
                <!-- menu -->
                <div class="collapse navbar-collapse navbar-right" id="mynavbar" style="font-family: Arial">
                    <ul class="nav navbar-nav" style="font-family: Arial">
                        <li ><a href="#ABOUT" style="font-family: Arial">About</a></li>
                        <li ><a href="#SERVICE" style="font-family: Arial">Services</a></li>
                        <li ><a href="jobs.php" style="font-family: Arial">Jobs</a></li>
                        <?php if(!empty($_SESSION)) { ?>
                           
                           <li><a href="../process/dashboard-controller.php?userRequest=DashboardRequest" style="font-family: Arial">Dashboard</a></li>
                            <li class=""><a href="#" style="font-family: Arial">
                                <i class="fa fa-1x fa-user"></i><span> <?php echo $_SESSION['full_name'] ?></span></a> </li>

                            <li class=""><a href="../process/UserController.php?userAction=logout" style="font-family: Arial"><i class="fa fa-1x fa-sign-out"></i>Log Out<span ></span></a> </li>
                        <?php }

                        else {?>
                            <li><a href="signin.php" style="font-family: Arial"><i class="fa fa-1x fa-sign-in"></i> Sign In</a></li>
                            <li ><a href="signup.php" style="font-family: Arial"><i class="fa fa-1x fa-user"></i> Sign Up</a></li>

                        <?PHP } ?>

                        <li style="padding-left:0.4em; font-family: Arial"><a href="Post-Job.php" style="font-family: Arial">Post A Project
                                <span style="background-color:orange; color:white;
                         padding:0.3em; font-family: Arial"> IT'S FREE</span></a></li>

                    </ul>
                </div>
            </div>
        </nav>

        
        
    </section>
</div>
</body>
</html>