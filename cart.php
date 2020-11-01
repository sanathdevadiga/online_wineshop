<?php
    $id=$_POST['id'];
    include_once "database.php";
    $res=mysqli_query($con,"select * from cart where wine_id='$id'");
    if (mysqli_num_rows($res)>0)
        exit('0');
    else{
        $res=mysqli_query($con,"insert into cart values(0,'$id',1,1)");
        if ($res)
            exit('1');
    }
?>
