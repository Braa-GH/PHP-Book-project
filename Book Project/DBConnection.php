<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Book";

$connection = new mysqli($servername,$username,$password,$dbname);
$conn = new mysqli("localhost" , "root" , "" , "Book");

if (mysqli_connect_error()){
    die("Database connection error: " . mysqli_connect_error());
}




















/*
$sql = "CREATE DATABASE IF NOT EXISTS  $dbname;";
if ($connection -> query($sql)){
    echo "Database Book created successfully";
}else{
    echo "Database create error " .  $connection-> error;
}
*/

/*
$table = "CREATE TABLE BookData(
    name varchar(255)
    );";

if ($connection -> query($table)){
    echo "Table created successfully";
}else{
    echo "Table create failed";
}
*/

