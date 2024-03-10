<?php
  require './connect.php';
  $id = $_POST['id'];
  $f = $_POST['fname'];
  $l = $_POST['lname'];
  $m = $_POST['mname'];
  $p = $_POST['pnum'];

  $sql = "UPDATE contacts SET first_name = '$f', middle_name ='$m',last_name = '$l', phone_number = '$p' WHERE id = '$id'";
  mysqli_query($conn,$sql);

  header('Location: /');