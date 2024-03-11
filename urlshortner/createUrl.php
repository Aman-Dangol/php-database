<?php
require ('./connect.php');

$fullUrl = $_GET["fullUrl"];

$sql = "INSERT INTO urlshorten (long_url) VALUES ('$fullUrl')";
mysqli_query($conn,$sql);

header('Location: /');
?>





