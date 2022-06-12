<?php
  $dateOfBirth = "15-06-1995";
  $today = date("d-m-Y");
  $diff = date_diff(date_create($dateOfBirth), date_create($today));
  echo 'Your age is '.$diff->format('%y');
?>

