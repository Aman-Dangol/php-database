<?php
require "./connect.php";

$fname = $_POST['first'];
$lname = $_POST['last'];
$mname = $_POST['middle'];
$pnum = $_POST['phone'];

$sql = "insert into contacts (first_name,middle_name,last_name,phone_number) values ('$fname','$mname','$lname','$pnum')";
mysqli_query($conn, $sql);

header('Location: /');