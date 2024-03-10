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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <section>
      <a href="./add_UI.php"><button>ADD</button></a>
    </section>
<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Phone Number</th>
    <th colspan="2"> modify</th>
  </tr>
    <?php
      foreach ($rows as $value) {
      echo "<tr>";
      echo"<td>{$value['id']}</td>";
      echo"<td>{$value['first_name']}</td>";
      echo"<td> {$value['middle_name']}</td>";
      echo"<td>{$value['last_name']}</td>";
      echo"<td>{$value['phone_number']}</td>";
      echo"<td><a href='./delete_contact.php/?id={$value['id']}' target='_blank'><button>delete</button></a></td>";
      echo"<td><a href='./edit_UI.php/?id={$value['id']}' target='_blank'><button>edit</button></a></td>";
      
      //  echo " ";
       echo"</tr>";
      }
      ?>
          </table>

    </main>
</body>

</html>