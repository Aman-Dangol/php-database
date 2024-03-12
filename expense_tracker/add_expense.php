<?php
require "./connect.php";

$category= $_GET["category"];
$expName= $_GET["exp_name"];
$amount= $_GET["amount"];
$date= $_GET["date"];


$sql ="INSERT INTO expenses(title,amount,expenses_date,cid) values('$expName','$amount','$date','$category')";
mysqli_query($conn,$sql);

header("Location: /");


