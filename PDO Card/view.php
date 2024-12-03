<?php

require "connection/connection.php";


    $viewQuery = "SELECT * FROM `pdo product` ";
    $viewPrepare = $connection -> prepare($viewQuery);
    $viewPrepare -> execute();
    $viewData = $viewPrepare -> fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($viewData);
    // echo "</pre>";







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
    <h1 class="text-center mt-2 m-3">PRODUCTS</h1>

    <div class="container">
    <div class="row">

    <?php 
        foreach($viewData as $row){
    ?>

    <div class="card" style="width: 18rem; margin: 5px; padding: 0;">
  <img src="Images/<?= $row['prod_Img'] ?>" class="card-img-top" alt="..." height="250">
  <div class="card-body">
    <h5 class="card-title" name="prod_Name">Name: <?= $row['prod_Name'] ?></h5>
    <p class="card-text" name="prod_Desc">Describtion: <?= $row['prod_Desc'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" name="prod_Price">Price: <?= $row['prod_Price'] ?></li>
    <li class="list-group-item" name="prod_Rating">Rating: <?= $row['prod_Rating'] ?></li>
  </ul>
</div>
<?php } ?>

</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
