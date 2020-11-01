<?php
    $id=$_POST['id'];
    include_once "database.php";
    $res=mysqli_query($con,"delete from cart where id='$id'");
    if ($res)
        exit('1');
    else
        exit('0');
?>
