<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "T2108M";
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if ($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "select * from quanlysanpham where id =".$_GET["id"];
$result = $conn->query($sql_txt);
$product = null;
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $product = $row;
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
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<form method="post" action="updateProduct.php?id=<?php echo $product["id"]?>" style="width: 60%;margin: auto">
    <h2>Edit Product</h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input value="<?php echo $product["name"]?>" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input value="<?php echo $product["price"]?>" required type="text" class="form-control" id="exampleInputPassword1" name="Price">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Unit</label>
        <input value="<?php echo $product["unit"]?>" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Unit">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input value="<?php echo $product["quantity"]?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Quantity">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input value="<?php echo $product["description"]?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Description">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status</label>
        <input value="<?php echo $product["status"]?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Status">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
