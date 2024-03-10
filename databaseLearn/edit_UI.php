<?php
 require './connect.php';
 $id =   $_GET['id'];
 $sql = "SELECT * FROM contacts WHERE id = '$id'";
 $result = mysqli_query($conn, $sql);
 $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
 $fname="{$rows[0]['first_name']}";
 $mname="{$rows[0]['middle_name']}";
 $lname="{$rows[0]['last_name']}";
 $pnum="{$rows[0]['phone_number']}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edit contact</title>
</head>
<body>
  <form action = "/edit_contact.php" method="post">
    <?php
        echo "<label for='id' >id</label> <input type='text' value='$id' name='id' readonly>"; 
    echo "<label for='fName' >first name</label> <input type='text' value='$fname' name='fname'>"; 
    echo "<label for='fName' >middle name</label> <input type='text' value='$mname' name='mname'>"; 
    echo "<label for='fName' >last name</label> <input type='text' value='$lname' name='lname'>"; 
    echo "<label for='fName' >phone number</label> <input type='text' value='$pnum' name='pnum'>"; 
    ?>
    <button type = "submit">update</button>

  </form>
</body>
</html>