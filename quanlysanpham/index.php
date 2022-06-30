<?php
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "t2108m";
//connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "select * from quanlysanpham";
$result = $conn->query($sql_txt);
$list =[];

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $list[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<table class="table">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Unit</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($result as $sp) :?>
        <tr>
            <td><?php echo $sp["name"]; ?></td>
            <td><?php echo $sp["price"]; ?></td>
            <td><?php echo $sp["unit"]; ?></td>
            <td><?php echo $sp["quantity"]; ?></td>
            <td><?php echo $sp["description"]; ?></td>
            <td><?php echo $sp["status"]; ?></td>
            <td>
                <a class="color-primary" href="editProduct.php?id=<?php echo $sp["id"]?>">Edit</a>
            </td>
            <td>
                <a class="color-primary" onclick="return confirm('delete student')" href="delete.php?id=<?php echo $sp["id"]?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
<form action="AddProduct.php">
    <button>AddProduct</button>
</form>
</body>
</html>