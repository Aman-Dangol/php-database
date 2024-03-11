<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>create shortner</h1>
    <form action="./createUrl.php" method="get">
      <label for="fullUrl">enter full url</label>
      <input type="text" name="fullUrl" />
      <button>generate</button>
    </form>

    <h2>access url</h2>
    <form action="">
      give me short url for the long verison
      <input type="text" name = "url">
      <?php
      require "./connect.php";
      $urlId = $_GET['url'];
        $sql ="SELECT * FROM urlshorten where id ='$urlId' ";
      $res = mysqli_query($conn,$sql); 
      $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
      var_dump($rows[0]['long_url']);
      ?>
      <button>sumit</button>
    </form>
  </body>
</html>
