<?php
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    if ($name=="roisil" && $pwd== "sunny"){
        session_start();
        $_SESSION['admin']="roisil";
        exit('1');
    }
    ?>