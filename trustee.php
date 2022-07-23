<?php
     if (isset($_POST['submit'])) 
     {
          include('dbconn.php');
          $name = $_POST['name'];
          $qry = "SELECT * FROM `trustee` WHERE Name='$name';";
          $run = mysqli_query($conn,$qry);

          if (mysqli_num_rows($run)!=1) echo "Invalid Name!";
          else {
               while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                    <div class="container" style="margin-top: 8%; margin-bottom: 0%;">
                         <div class="row">
                              <div class="col-md-12 col-sm-12">
                                   <ul class="list-group list-group-flush">
                                     <li class="list-group-item">
                                        <h6>Name: <span style="font-family: Calibri;">
                                             <?php echo $data['Name'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>Salary: <span style="font-family: Calibri;">
                                             <?php echo $data['Salary'];?>
                                        </span></h6>
                                     </li>
                                      <li class="list-group-item">
                                        <h6>Designation: <span style="font-family: Calibri;">
                                             <?php echo $data['Designation'];?>
                                        </span></h6>
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
          <title>Institute Information System</title>
          <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
          <meta name="viewport" content="width=device-width, initial-scale=1, 
          user-scalable=no, maximum-scale=1, minimum-scale=1">
          <!-- Fevicon -->
          <link rel="shortcut icon" href="..img/sample.jpg" type="image/x-icon">
          <link rel="icon" href="..img/sample.jpg" type="image/x-icon">
          <!-- Basic Meta-Tags -->
          <meta name="description" content="A personal information storage system to access, modify, add and delete details of any individual in an institute." />
          <meta name="keywords" content="Information, SQL, Institute" />
          <meta name="classification" content="Education" />
          <meta name="distribution" content="global" />
          <meta name="theme-color" content="#482879" />
          <!-- Bootstrap core CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <!-- Custom styles for this template -->
          <link href="css/homestyles.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto" rel="stylesheet">
     </head>

     <body>
          <div class="container">
               <div id="main">
                    <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12">
                              <h1>Institute Information System</h1><br><br>
                         </div>
                    </div>
               </div>
               <div id="sub">
                    <div class="row">
                         <h5 class="text-center">A personal information storage system to access, modify, add and delete details of any individual in an institute. You can use your credentials to login as an admin and start storing your data - It will always be secure.
                         </h5>
                    </div>
                    <br><br>
                    <div class="row">
                         <div class="col-md-12">
                              <form action="trustee.php" method="post">
                                   <div class="input-group mb-3">
                                          <input type="text" class="form-control" placeholder="Enter name of trustee" name="name" required/>
                                          <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">
                                             Submit</button>
                                          </div>
                                   </div>
                              </form>
                         </div>
                    </div>
                    <h6 id="adm"><a href="index.php">Back to Home</a></h6>
               </div>
          </div>
          <!-- Bootstrap core JavaScript -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     </body>
</html>
