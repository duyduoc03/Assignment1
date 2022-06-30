<?php
$id = $_GET["id"];
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "T2108M";
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if ($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "delete from quanlysanpham where id=?";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("i",$sid);
$sid = $id;
$stt->execute();

header("location: index.php");