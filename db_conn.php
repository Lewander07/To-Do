<?php 

$server = "localhost";
$account = "root";
$pass = "";
$db_name = "to_do_list";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db_name", 
                    $account, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}