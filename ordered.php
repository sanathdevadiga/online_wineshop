<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wines</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <a href="index.php" class="site-logo">
                        <img src="images/logo.png" alt="Image" class="img-fluid">
                    </a>
                </div>
                <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a>
            </div>
        </div>




        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mx-auto">
                        <nav class="site-navigation position-relative text-left" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                <li><a href="index.php" class="nav-link text-left">Home</a></li>
                                <li><a href="about.html" class="nav-link text-left">About</a></li>
                                <li><a href="shop.php" class="nav-link text-left">Wines</a></li>
                                <li class="active"><a href="my_cart.php" class="nav-link text-left">Cart</a></li>
                                <li><a href="ordered.php" class="nav-link text-left">Ordered</a></li>
                                <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="site-section  pb-0">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 section-title text-center mb-5">
                    <h2 class="d-block">Ordered</h2>
                </div>
            </div>
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Cancel</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once "database.php";
                            $res=mysqli_query($con,"select w.image,w.id,w.price,w.name,o.id as ID,o.quantity,o.total from ordered o,wines w where o.item_id=w.id");
                            if (mysqli_num_rows($res)>0){
                                while ($row=mysqli_fetch_assoc($res)){
                                    ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="images/<?php echo $row['image']; ?>" alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 cart-product-title text-black"><?php echo $row['name']; ?></h2>
                                        </td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['quantity']; ?></td>
                                        <td><?php echo $row['total'] ?></td>
                                        <td><a id="<?php echo $row['ID'];?>" href="#" class="remove btn btn-primary height-auto btn-sm">X</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="footer">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/roisil.dsouza"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-youtube"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>




<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.remove').bind('click',function () {
            var id=this.id;
            $.ajax({
                url:"cancel.php",
                method:"post",
                data:{
                    'id':id,
                },
                success:function (response) {
                    if (response=1) {
                        alert('Order canceled successfully');
                        window.location.reload();
                    }
                }
            })
        })
    })
</script>
</body>

</html>