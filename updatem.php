<?php
// include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'coffee');
$id = $_GET['updateid'];
$sqlselect = "SELECT * from `menu` where id =$id";
$resultselect = mysqli_query($con, $sqlselect);
$row = mysqli_fetch_assoc($resultselect);
$product = $row['product'];
$price = $row['price'];
if (isset($_POST['submit'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $sqlupdate = "UPDATE `menu` set id='$id',product='$product',price='$price' where id=$id";
    $resultupdate = mysqli_query($con, $sqlupdate);
    if ($resultupdate) {
        // echo '<div class="alert alert-success" role="alert"> the insert is succes </div>';
        header('location:menu.php');
    } else {
        echo "the insert is false";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Edit menu</title>
</head>

<body>
    <h1 class="text-center mt-5">Edit menu</h1>
    <div class="container border border-primary">
        <form method="post">
            <div class="form-group">
                <label>Product</label>
                <input type="text" class="form-control" placeholder="Enter Your product" autocomplete="off" name="name" value=<?php echo $product ?>>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter Your price" autocomplete="off" name="email" value=<?php echo $price ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>