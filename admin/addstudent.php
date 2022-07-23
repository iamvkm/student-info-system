<?php

if (isset($_POST['submit'])) {
     include('../dbconn.php');

     $qry= "CALL insertStud('".$_POST["fullname"]."','".$_POST["usn"]."','".$_POST["dob"]."','".$_POST["email"]."','".$_POST["per"]."','".$_POST["par"]."')";
     $run = mysqli_query($conn,$qry);

     if ($run == true) {
          ?>
          <script type="text/javascript">
               alert("Information Added!");
               window.open('admindash.php','_self');
          </script>
          <?php
     }
     else {
          echo("error: ".mysqli_error($conn));
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
          <link href="../css/addstud.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto" rel="stylesheet">
     </head>
     <body>
          <div class="container d-flex justify-content-center">
               <div class="row">
                    <div class="login-page">
                         <div class="form">
                              <form class="login-form" action="addstudent.php" method="post">
                                   <input type="text" placeholder="Full Name" name="fullname" required/>
                                   <input type="text" placeholder="University Seat Number" name="usn" required/>
                                   <input type="text" placeholder="Date of Birth (YYYY/MM/DD)" name="dob" required/>
                                   <input type="text" placeholder="E-mail ID" name="email" required/>
                                   <input type="text" placeholder="Personal Phone Number" name="per" required/>
                                   <input type="text" placeholder="Parent's Phone Number" name="par" required/>

                                   <button type="submit" class="btn btn-primary" name="submit" value="Submit">
                                   ADD STUDENT INFORMATION</button>
                                   <div id="aa"><a href="admindash.php">BACK TO DASHBOARD</a></div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Bootstrap core JavaScript -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     </body>
</html>