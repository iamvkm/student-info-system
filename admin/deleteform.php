<?php

  include('../dbconn.php');

  $un = $_REQUEST['usn'];
  $qry = "DELETE FROM `student` WHERE `usn`='$un'";

  $run = mysqli_query($conn,$qry);

  if ($run == true) {
    ?>
      <script type="text/javascript">
        alert('Data Deleted!');
        window.open('admindash.php','_self');
      </script>
    <?php
  }

?>