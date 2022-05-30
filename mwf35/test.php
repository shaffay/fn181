<?php

include("db.php");

$check_email = $con->query("SELECT * FROM `users` WHERE `email`='shraffay@admin.com'");

$count = mysqli_num_rows ( $check_email );

  echo $count;



?>