<?php
require "./connect.php";

$sql = "select * from contacts";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <section>
      <a href="./add_UI.php">add</a>
    </section>

    <ul>
      <?php
      foreach ($rows as $value) {
        echo "<li>{$value['id']} {$value['first_name']} {$value['middle_name']} {$value['last_name']} {$value['phone_number']} <a href='./delete_contact.php/?id={$value['id']}' target='_blank'><button>delete</button></a>";
      }
      ?>
    </ul>
  </main>
</body>

</html>