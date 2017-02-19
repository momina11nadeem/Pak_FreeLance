<?php

  require_once('Connection.php');
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {

    if ($_GET['userAction'] == 'login') {
      $email = $_POST["email"];
      $password = md5($_POST["password"]);

      $haveQuery = $conn->query("SELECT * FROM users WHERE email= '$email' AND password = '$password'");
      $haveUserData = $haveQuery->fetch_array();

      if (empty($haveUserData)) {
        ?>
        <script>
          window.alert("Invalid User name or password");
          window.location.href = '../views/signin.php';
        </script>
        <?php
      }
      else {
        $user_type = $haveUserData['user_type'];
        $userFullName = $haveUserData['full_name'];
        $_SESSION['USER_ID'] = $haveUserData['id'];
        $_SESSION['user_type'] = $user_type;
        $_SESSION['full_name'] = $userFullName;
        if ( $haveUserData['user_type'] == 'client') {
          ?>

          <script>
            window.location.href = '../views/client-dashboard.php';
          </script>
          <?php
        }

        elseif ( $haveUserData['user_type'] == 'employee') {
          ?>

          <script>
            window.location.href = '../views/jobs.php';
          </script>
          <?php
        }
      }
    }

    

    elseif ($_GET['userAction'] == 'registerUser') {
      $Skills=Null;
      $Company=Null;
      $Name = $_POST['name'];
      $Mail = $_POST['email'];
      $Pass = $_POST['password'];
      $Pass = md5($Pass);
      $Desc = $_POST['description'];
      $user_type = $_POST['purpose'];
      $cnic = $_POST['cnic_no'];
      $credit = $_POST['credit_card'];
      $Phone = $_POST['mobile_phone'];
      if (isset($_POST['skills'])) {
        $Company = $_POST['company'];
      }
      if (isset($_POST['skills'])) {
        $Skills = $_POST['skills'];
      }
      if (!empty($Mail)) {//if 1
        $check_email = $conn->query("SELECT email FROM users WHERE email='$Mail'");
        $count = $check_email->num_rows;
        if ($count == 0)   {
          $query = $conn->query("INSERT INTO users (full_name,email,password,description,skills,company,cnic,credit_card,phone,user_type,status)

 VALUES ('$Name','$Mail','$Pass','$Desc','$Skills','$Company','$cnic','$credit','$Phone','$user_type','active')");
          if ($query == TRUE) {//if 3
            ?>
            <script>
              window.alert("Account Created Successfully !");
              window.location.href = '../views/signin.php';
            </script>
            <?php
          }//if2

        }
        else {//else main
          ?>

          <script>
            window.alert("Account already exists!");
            window.location.href = '../views/signin.php';
          </script>
          <?php
        } //if 3
      }




    }

    elseif ($_GET['userAction'] == 'logout') {

      unset($_SESSION['USER_ID']);
      unset($_SESSION['user_type']);
      unset($_SESSION['full_name']);
      $_SESSION = array();
      if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name('USER_ID'), '', time() - 42000);
        setcookie(session_name('user_type'), '', time() - 42000);
        setcookie(session_name('full_name'), '', time() - 42000);
      }
      session_destroy();
      ?>

      <script>
        alert("You have been Logged out ");
        window.location = "../views/INDEX.php";</script>
      <?php
    }

  }
?>
