<?php
    $wid=$_GET['id'];
    $quantity=$_GET['quantity'];
    $price=$_GET['price'];
    $total=$_GET['total'];
    include_once "database.php";
    $res=mysqli_query($con,"select * from ordered order by id desc");
    $id=mysqli_fetch_assoc($res)['id'];
    echo $id;
    $res=mysqli_query($con,"update ordered set item_id='$wid',quantity='$quantity',total='$total' where id='$id'");
    header("location:thankyou.html");
?>
