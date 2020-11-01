<?php
include_once "database.php";
$temp=$_FILES['file']['tmp_name'];
$name=$_FILES['file']['name'];
move_uploaded_file($temp,'images/'.$name);
session_start();
if (isset($_SESSION['id']))
    $id=$_SESSION['id'];
$res=mysqli_query($con,"update wines set image='$name' where id='$id'");
unset($_SESSION['id']);
exit($res);
?>