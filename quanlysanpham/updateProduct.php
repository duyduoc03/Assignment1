<?php
$id = $_GET["id"];
if (!$_POST["price"]){
    header("location: editProduct.php?id=".$id);
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
$sql_txt = "update quanlysanpham set name=?, price=?, unit=?, quantity=?, description=?, status=? where id=?";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sdsissi",$name,$price,$unit,$quantity,$description,$status,$sid);

$name = $_POST["Name"];
$price = $_POST["Price"];
$unit = $_POST["Unit"];
$quantity = $_POST["Quantity"];
$description = $_POST["Description"];
$status = $_POST["Status"];
$sid = $id;
$stt->execute();
header("location: index.php");