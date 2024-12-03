
<?php

require "connection/connection.php";

$viewQuery = "SELECT * FROM `pdo product` ";

$viewPrepare = $connection ->prepare($viewQuery);

$viewPrepare -> execute();

$viewData = $viewPrepare -> fetchAll(PDO::FETCH_ASSOC);


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Describtion</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Rating</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

    <?php foreach($viewData as $row) { ?>
    <tr>
      <td><?= $row['prod_Id'] ?></td>
      <td><img src="Images/<?= $row['prod_Img'] ?>" width="100"></td>
      <td><?= $row['prod_Name'] ?></td>
      <td><?= $row['prod_Desc'] ?></td>
      <td><?= $row['prod_Price'] ?></td>
      <td><?= $row['prod_Rating'] ?></td>
      <td>
        <a href="update.php?ID=<?= $row['prod_Id'] ?>" class="btn btn-warning">Update</a>
        <a href="delete.php?ID=<?= $row['prod_Id'] ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>