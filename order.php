<?php
    include_once "database.php";
    $id=$_GET['id'];
    $quantity=$_GET['quantity'];
    $price=$_GET['price'];
    $total=$_GET['total'];
    $res=mysqli_query($con,"select * from wines where id='$id'");
    $row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 40%;
            height: 30vh;
            margin: 10% 30%;
            box-shadow: 5px 5px 10px 10px #0b0b0b;
            padding: 50px;
        }
        .img_holder{
            width: 50%;
            float: left;
            height: 100%;
        }
        .img_holder img{
            width: 50%;
            height: 100%;
        }
        .img_detail{
            width: 50%;
            float: left;
            height: 100%;
        }
        button{
            font-size: 20px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="img_holder">
            <img src="images/<?php echo $row['image'];?>" alt="">
        </div>
        <div class="img_detail">
            <h4>Name :  <?php echo $row['name']; ?></h4>
            <h4>Price :  <?php echo $price; ?></h4>
            <h4>Quantity :  <?php echo $quantity; ?></h4>
            <h4>Total :  <?php echo $total; ?></h4>
            <button onclick="place_order()">Place Order</button>
        </div>
    </div>
</body>
</html>
