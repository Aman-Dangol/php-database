<?php
require './connect.php';

$sql ="SELECT title,amount FROM expenses";

$res = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($res,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>expenses</title>
</head>
<style>
  table,
  tr,
  th,
  td{
    border : 1px solid black;
    border-collapse : collapse;
    padding : 4px;
  }
</style>
<body>
  <table>
    <tr>
      <th>title</th>
      <th>amount</th>
    </tr>
    <?php
    foreach($rows as $row){
        echo "<tr>";
        foreach($row as $data){
          echo "<td>";
          echo $data;
          echo "</td>";
        }
        echo "/<tr>";
    }    
    ?>
</table>
</body>
</html>