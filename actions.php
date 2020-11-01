<?php
include_once "database.php";
$name = $_POST['name'];
$price = $_POST['price'];
$action=$_POST['action'];
if ($action=='add') {
    $res = mysqli_query($con, "insert into wines values(0,'$name','$price',0,'',1)");
    $res=mysqli_query($con,"select * from wines order by ID desc");
    $id=mysqli_fetch_assoc($res)['id'];
    session_start();
    $_SESSION['id']=$id;
    exit('1');
}
else if ($action=='update') {
    $id=$_POST['id'];
    $res = mysqli_query($con, "update wines set name='$name',price='$price' where id='$id'");
    session_start();
    $_SESSION['id']=$id;
    exit($res);
}
else if ($action=='delete') {
    $id=$_POST['id'];
    $res = mysqli_query($con, "update wines set active=0 where id='$id'");
    exit($res);
}
?>
