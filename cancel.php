<?php
    $id=$_POST['id'];
    include_once "database.php";
    $res=mysqli_query($con,"delete from ordered where id='$id'");
    exit($res);
?>