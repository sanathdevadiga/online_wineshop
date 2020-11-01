<?php
    session_start();
    if (!isset($_SESSION['admin'])){
        header('location:admin_login.html');
    }
    else{
        include_once "database.php";
        $res=mysqli_query($con,"select * from contact");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wines</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 80%;
            margin: 1% 10%;
        }
        th{
            padding: 10px 20px;
            border: 1px solid black;
            font-size: 1.5vw;
        }
        td{
            text-align: center;
            padding: 8px 20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Messages</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php while ($row=mysqli_fetch_assoc($res)){ ?>
        <tr>
            <td><?php echo $row['fname']." ".$row['lname']; ?></td>
            <td><?php echo $row['phno']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php } ?>