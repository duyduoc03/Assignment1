<?php
if (!$_POST["price"]){
    header("location: AddProduct.php");
}
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "T2108M";
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if ($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "insert into quanlysanpham(name, price, unit, quantity, description, status) values (?,?,?,?,?,?)";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sdsiss",$name,$price,$unit,$quantity,$description,$status);

$name = $_POST["Name"];
$price = $_POST["Price"];
$unit = $_POST["Unit"];
$quantity = $_POST["Quantity"];
$description = $_POST["Description"];
$status = $_POST["Status"];
$stt->execute();

header("location: index.php");