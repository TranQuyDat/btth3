<?php
$db_host = "localhost";
$db_name = "btth3_bai3";
$username="root";
$pass="";

try{
    $db = new PDO("mysql:$db_host; $db_name", $username, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}