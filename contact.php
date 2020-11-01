<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $message=$_POST['message'];
    include_once "database.php";
    $res=mysqli_query($con,"insert into contact values(0,'$fname','$lname','$email','$phno','$message',1)");
    if ($res==1)
        exit('1');
?>
