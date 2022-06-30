<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<form method="post" action="PostProduct.php" style="width: 60%;margin: auto">
    <h2>Add Product</h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input required type="text" class="form-control" id="exampleInputPassword1" name="Price">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Unit</label>
        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Unit">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Quantity">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Description">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Status">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>