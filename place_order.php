<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $zip=$_POST['postal'];
    $country=$_POST['country'];
    $notes=$_POST['notes'];
    include_once "database.php";
    $res=mysqli_query($con,"insert into ordered values(0,1,'$fname','$lname','$phone','$email','$address','$country','$zip','$notes',0,0,0,1)");
    exit($res);
?>
