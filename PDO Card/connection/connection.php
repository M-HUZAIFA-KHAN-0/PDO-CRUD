
<?php

define("dsn" , "mysql:host=localhost;dbname=huzproduct");
define("userName" , "root");
define("password" , "");



try{
    $connection = new PDO(dsn,userName,password);
    echo"connected";
}catch(PDOException $e){
    echo $e->getMessage();
}







