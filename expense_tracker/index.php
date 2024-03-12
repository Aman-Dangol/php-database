<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>expense tracker</title>
</head>
<body>
  <form action="/add_expense.php">
  <?php
    require "./connect.php";
    $sql = "Select * from categories";
    $res = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC) ;
      echo "<Select name='category'>";
      foreach($rows as $value ){
        echo "<option value='${value["id"]}'>";
        
    echo"<pre>";
    echo ($value["label"]);
    echo"</pre>";
        echo "</option>";
      }
  echo "</Select>";
  ?>
  <label>name:</label> <input type="text" name="exp_name"></input>
  <label>name:</label> <input type="amount" name="amount"></input>
  <label>name:</label> <input type="date" name="date"></input>
  <button>add expense</button>
  </form>

</body>
</html>