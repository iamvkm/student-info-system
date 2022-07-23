<?php

session_start();
if (isset($_SESSION['uid'])) header('location: admin/admindash.php');

include('dbconn.php');
if (isset($_POST['login'])) {
     $username = $_POST['uname'];
     $password = $_POST['pass'];

     $qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
     $run = mysqli_query($conn, $qry);
     $row = mysqli_num_rows($run);

     if ($row < 1) {
          ?>
          <script type="text/javascript">
               alert("Invalid Credentials!");
               window.open('login.php','_self');
          </script>
          <?php
     }
     else {
          $data = mysqli_fetch_assoc($run);
          $id = $data['id'];
          $_SESSION['uid']=$id;
          header('location: admin/admindash.php');
     }
}

?>


<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Log In - Institute Information System</title>
          <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
          <meta name="viewport" content="width=device-width, initial-scale=1, 
          user-scalable=no, maximum-scale=1, minimum-scale=1">
          <!-- Fevicon -->
          <link rel="shortcut icon" href="..img/sample.jpg" type="image/x-icon">
          <link rel="icon" href="..img/sample.jpg" type="image/x-icon">
          <!-- Basic Meta-Tags -->
          <meta name="description" content="" />
          <meta name="keywords" content="" />
          <meta name="classification" content="Productivity" />
          <meta name="distribution" content="global" />
          <meta name="theme-color" content="#482879" />
          <!-- Bootstrap core CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <!-- Custom styles for this template -->
          <link href="css/loginstyle.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto" rel="stylesheet">
     </head>
     <body>
          <div class="container d-flex justify-content-center">
               <div class="row">
                    <div class="login-page">
                         <div class="form">
                              <form class="login-form" action="login.php" method="post">
                                   <input type="text" placeholder="username" name="uname" required/>
                                   <input type="password" placeholder="password" name="pass" required/>
                                   <button type="submit" class="btn btn-primary" name="login" value="Login">
                                   LOGIN</button>
                              </form>
                         </div>
                         <div style="text-align: center; padding: 5%;">
                         <a href="index.php" id="aa">BACK TO HOME</a></div>
                    </div>
               </div>
          </div>

          <!-- Bootstrap core JavaScript -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     </body>
</html>