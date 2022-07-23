<?php

	include('../dbconn.php');
     $name = $_POST['name'];
     $usn = $_POST['usn'];
     $dob = $_POST['dob'];
     $email = $_POST['email'];
     $per = $_POST['perphone'];
     $par = $_POST['parcontact'];

     $un = $_POST['usn'];

     $qry= "UPDATE `student` SET `name`='$name',`usn`='$usn',`dob`='$dob',`email`='$email',`perphone`='$per',`parcontact`='$par' WHERE `usn`='$un'";
     $run = mysqli_query($conn,$qry);

     if ($run == true) {
          ?>
          <script type="text/javascript">
               alert("Data Updated!");
          </script>
          <?php
     }
     else {
          echo("error: ".mysqli_error($conn));
     }
?>
