<?php
     if (isset($_POST['submit'])) 
     {
          include('../dbconn.php');
          $un = $_POST['usn'];
          $name = $_POST['name'];
          $qry = "SELECT * FROM `student` WHERE usn='$un' AND name LIKE '%$name%';";
          $run = mysqli_query($conn,$qry);

          if (mysqli_num_rows($run)!=1) echo "Invalid USN!";
          else {
               while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                    <div class="container" style="margin-top: 3%;">
                         <div class="row">
                              <div class="col-md-12 col-sm-12">
                                   <ul class="list-group list-group-flush">
                                     <li class="list-group-item">
                                        <h6>Name: <span style="font-family: Calibri;">
                                             <?php echo $data['name'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>USN: <span style="font-family: Calibri;">
                                             <?php echo $data['usn'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>Date of Birth: <span style="font-family: Calibri;">
                                             <?php echo $data['dob'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>E mail: <span style="font-family: Calibri;">
                                             <?php echo $data['email'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>Personal Phone: <span style="font-family: Calibri;">
                                             <?php echo $data['perphone'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>Parent Phone: <span style="font-family: Calibri;">
                                             <?php echo $data['parcontact'];?>
                                        </span></h6>
                                     </li>
                                     <li class="list-group-item">
                                        <a href="deleteform.php?usn=<?php echo $data['usn'] ?>">
                                             <button class="btn btn-primary">DELETE</button>
                                        </a>
                                     </li>

                                   </ul>
                              </div>
                         </div>
                    </div>

                    <?php
               }
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
                              <form class="login-form" action="deletestudent.php" method="post">
                                   <input type="text" placeholder="Identification Number" name="usn" required/>
                                   <input type="text" placeholder="Name" name="name" required/>
                                   <div id="main"></div>
                                   <button type="submit" class="btn btn-primary" name="submit" value="Submit"
                                   >
                                   DELETE STUDENT INFORMATION</button>
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
