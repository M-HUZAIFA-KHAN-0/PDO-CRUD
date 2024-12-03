<?php

require "connection/connection.php";

$ID = $_GET['ID'];

$deleteQuerry = "DELETE FROM `pdo product` WHERE prod_Id = :ID";

$deletePrepare = $connection ->prepare($deleteQuerry);

$deletePrepare -> bindParam(":ID", $ID , PDO::PARAM_INT);

if($deletePrepare -> execute()){
    header("location:adminView.php");
}else{
    echo "";
}
