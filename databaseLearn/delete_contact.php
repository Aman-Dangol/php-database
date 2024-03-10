<?php

require './connect.php';
 echo $_GET['id'];

 $sql = "delete from contacts where id = {$_GET['id']} ";
 mysqli_query($conn, $sql);

 header('Location: /');