<?php
    session_start();
    if (!isset($_SESSION['admin'])){
        header('location:admin_login.html');
}
    else{
include_once "database.php";
$res=mysqli_query($con,"select * from wines where active=1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        table{
            width: 80%;
            margin: 2% 10%;
        }
        th{
            padding: 30px 20px;
            font-size: 20px;
        }
        td{
            text-align: center;
            padding: 10px 10px;
        }
        img{
            width: 100px;
            height: 100px;
        }
        td,th,table{
            box-shadow: 1px 1px 5px 1px #0b2e13;
        }
        td:nth-child(2){
            padding: 5px 0;
        }
        table tr:not(:first-child){
            cursor: pointer;
        }
        tr:not(:first-child):hover{
            box-shadow: 1px 1px 5px 2px #0b2e13;
        }
        tr:not(:first-child):hover td{
            font-size: 18px;
        }
        tr:not(:first-child):hover img{
            width: 110px;
            height: 60px;
        }
        .main{
            width: 40%;
            margin: 2% 30%;
            height: auto;
            padding: 30px;
            background-color: #dd2c00;
            box-shadow: 0px 0px 5px 2px #000000;
            border-radius: 10px;
        }
        .main > *{
            margin: 0;
        }
        .image{
            width: 100%;
            height: 40vh;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 5px #ffffff;
        }
        .main img{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        .info{
            width: 100%;
            margin-top: 10px;
        }
        input{
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            margin-top: 5px;
        }
        label{
            color: whitesmoke;
        }
        button{
            padding: 10px 20px;
            width: 32.65%;
        }
        button:hover,img:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Manage Items</h1>
    <a style="float:right;margin-top:-20px;margin-right:20px" href="message.php">Messages</a>
<div class="main" id="main">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="image">
            <input type="file" id="file" hidden="hidden">
            <img id="image" src="" alt="Select Wine">
        </div>
        <div class="info">
            <label for="name">Name</label><br>
            <input type="text" id="name" class="form-control"><br><br>
            <label for="name">Price</label><br>
            <input type="number" min="100" id="price" class="form-control"><br><br>
            <button id="add" type="button">Add</button>
            <button id="update" type="button">Update</button>
            <button id="delete" type="button">Delete</button>
        </div>
    </form>
</div>
<table>
    <tr>
        <th>SI No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price (Rs.)</th>
    </tr>
    <?php
    $count=1;
    while ($row=mysqli_fetch_assoc($res)){
        ?>
        <tr class="row" id="<?php echo $row['id'];?>">
            <td><?php echo $count++;?></td>
            <td><img id="i_<?php echo $row['id'];?>" src="<?php echo "images/".$row['image'];?>" alt=""></td>
            <td id="n_<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
            <td id="p_<?php echo $row['id'];?>"><?php echo $row['price'];?></td>
        </tr>
    <?php } ?>
</table>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function () {
        var id;
        $('.row').bind('click',function () {
            id=this.id;
            $('#name').val($('#n_'+id+'').text());
            $('#price').val($('#p_'+id+'').text());
            $('#image').attr('src',$('#i_'+id+'').attr('src'));
        })
        $('#file').change(function (event) {
            if (event) {
                $('#image').attr('src', URL.createObjectURL(event.target.files[0]));
            }
        })
        $('#image').bind('click',function () {
            $('#file').click();
        })
        $('#add').bind('click',function () {
            var name=$('#name').val();
            var price=$('#price').val();
            var image=$('#file')[0].files[0];
            var fd=new FormData();
            fd.append('file',image);
            if (name==""||price==""||!image){
                alert('Please fill all the information');
            }
            else {
                $.ajax({
                    url:'actions.php',
                    method:'post',
                    data:{
                        'name':name,
                        'price':price,
                        'action':'add',
                    },
                    success:function (response) {
                        if (response=='1') {
                            $.ajax({
                                url: "actions_next.php",
                                method: "post",
                                contentType: false,
                                processData: false,
                                data: fd,
                                success: function (response) {
                                    if (response) {
                                        alert("Successfully added");
                                        window.location.reload();
                                    }
                                }
                            })
                        }
                    }
                })
            }
        })
        $('#update').bind('click',function () {
            var name=$('#name').val();
            var price=$('#price').val();
            var image=$('#file')[0].files[0];
            var fd=new FormData();
            fd.append('file',image);
            if (name==""||price==""){
                alert('Please fill all the information');
            }
            else {
                $.ajax({
                    url:'actions.php',
                    method:'post',
                    data:{
                        'name':name,
                        'price':price,
                        'action':'update',
                        'id':id,
                    },
                    success:function (response) {
                        if (response=='1'&& image) {
                            $.ajax({
                                url: "actions_next.php",
                                method: "post",
                                contentType: false,
                                processData: false,
                                data: fd,
                            })
                        }
                        alert("Successfully Updated");
                        window.location.reload();
                    }
                })
            }
        })
        $('#delete').bind('click',function () {
            var name=$('#name').val();
            var price=$('#price').val();
            if (name==""||price==""){
                alert('Please fill all the information');
            }
            else {
                $.ajax({
                    url:'actions.php',
                    method:'post',
                    data:{
                        'action':'delete',
                        'id':id,
                    },
                    success:function (response) {
                        alert("Successfully Deleted");
                        window.location.reload();
                    }
                })
            }
        })
    })
</script>
</body>
</html>
<?php } ?>
