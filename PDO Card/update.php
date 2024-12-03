<?php

require "connection/connection.php";

$ID = $_GET['ID'];

$updateViewQuerry = "SELECT * FROM `pdo product` WHERE prod_id = :ID";

$updateView = $connection -> prepare($updateViewQuerry);

$updateView -> bindparam(':ID', $ID , PDO::PARAM_INT);

$updateView -> execute();

$result = $updateView -> fetchAll(PDO::FETCH_ASSOC);

$result = $result[0];

// echo "<pre>";
// print_r($result);
// echo "</pre>";



if(isset($_POST["btn"])) {
    $prodName = $_POST["prod_Name"];
    $prodPrice = $_POST["prod_Price"];
    $prodDesc = $_POST["prod_Desc"];
    $prodRating = $_POST["prod_Rating"];
    $prodImg = $_FILES["prod_Img"];

    
    if ($prodImg['size'] > 5000000){
        echo "<script> alert(Image is too big) </script>";
    }else{
        $extension = explode(".", $prodImg["name"]);
        $extension = $extension[1];
        $imageName = uniqid() .".". $extension;
        move_uploaded_file($prodImg['tmp_name'] , "Images/$imageName");

        $img = empty($prodImg['name']) ? $result['prod_Img'] : $imageName;
    
        $updateQuerry = "UPDATE `pdo product` SET prod_Name = :prodName , prod_Price = :prodPrice , prod_Desc = :prodDesc , prod_Rating = :prodRating , prod_Img = :prodImg WHERE prod_Id = :ID";

        $insertprepare = $connection -> prepare($updateQuerry);

        $insertprepare -> bindParam(':ID', $ID, PDO::PARAM_STR);
        $insertprepare -> bindParam(':prodName', $prodName, PDO::PARAM_STR);
        $insertprepare -> bindParam(':prodPrice', $prodPrice, PDO::PARAM_STR);
        $insertprepare -> bindParam(':prodDesc', $prodDesc, PDO::PARAM_STR);
        $insertprepare -> bindParam(':prodRating', $prodRating, PDO::PARAM_STR);
        $insertprepare -> bindParam(':prodImg', $img, PDO::PARAM_STR);
 
        if($insertprepare -> execute()){
            header("location: adminView.php");
        }else{
            echo "<script> alert(updating failed) </script>";
        };
    };
};

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
    <h1 class="text-center mt-2 m-3">PRODUCT FORM!</h1>

    <form action="" method="post" style="display:flex;  align-items: center; justify-content:center; flex-direction:column;" enctype="multipart/form-data">
        Product Name:<input type="text" name="prod_Name" style="width:40%;" value="<?= $result['prod_Name'] ?>"><br>
        Price:<input type="text" name="prod_Price" style="width:40%;" value="<?= $result['prod_Price'] ?>"><br>
        Description:<input type="text" name="prod_Desc" style="width:40%;" value="<?= $result['prod_Desc'] ?>"><br>
        rating:<input type="text" name="prod_Rating" style="width:40%;" value="<?= $result['prod_Rating'] ?>"><br>
        <img src="Images/<?= $result['prod_Img'] ?>" width="150" >
        Image:<input type="file" name="prod_Img" style="width:40%;" accept="image/jpg , image/jpeg , image/png"><br>

        <input type="submit" name="btn" value="submit" style="width:40%;">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>