<?php
include_once "database.php";
$id=$_GET['id'];
$quantity=$_GET['quantity'];
$price=$_GET['price'];
$total=$_GET['total'];
$res=mysqli_query($con,"select * from wines where id='$id'");
$row=mysqli_fetch_assoc($res);
?>
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

    <script>
        function place_order() {
            window.location.href="my_order.php?id=<?php echo $id;?>&price=<?php echo $price;?>&quantity=<?php echo $quantity;?>&total=<?php echo $total; ?>";
        }
    </script>

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
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black font-heading-serif">Billing Details</h2>
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="c_country" class="text-black">Circles <span class="text-danger">*</span></label>
                            <select id="c_country" class="form-control">
                                <option value="1">Select a circle</option>
                                <option value="2">Kadri</option>
                                <option value="3">Urwa</option>
                                <option value="4">Surathkal</option>
                                <option value="5">Gorigudda</option>
                                <option value="6">Bajpe</option>
                                <option value="7">Kankanady</option>
                                <option value="8">Attavara</option>
                                <option value="9">Mangaladevi</option>
                                <option value="9">Kulashekar</option>
                                <option value="9">padil</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_postal_zip" class="text-black">Postal / Zip <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Order Notes</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                      placeholder="Write your notes here..."></textarea>
                        </div>

                    </div>
                </div>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black font-heading-serif">Your Order</h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                    <th>Product</th>
                                    <th>Total</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row['name']; ?><strong class="mx-2">x</strong> <?php echo $quantity; ?></td>
                                        <td><?php echo $total; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                        <td class="text-black font-weight-bold"><strong><?php echo $total; ?></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <button id="place_order" class="btn btn-primary btn-lg btn-block">Place Order</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
    <div class="footer">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons">
                        <a href="#"><span class="icon-facebook"></span></a>
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

</body>
<script>
    $(document).ready(function () {
        $('#place_order').bind('click',function () {
            var country=$('#c_country').val();
            var fname=$('#c_fname').val();
            var lname=$('#c_lname').val();
            var address=$('#c_address').val();
            var postal=$('#c_postal_zip').val();
            var phone=$('#c_phone').val();
            var email=$('#c_email_address').val();
            var notes=$('#c_order_notes').val();

            if(country==""||fname==""||lname==""||address==""||postal==""||phone==""||email=="")
                alert("Please fill the details");
            else {
                $.ajax({
                    url: "place_order.php",
                    method: "post",
                    data: {
                        'country': country,
                        'fname': fname,
                        'lname': lname,
                        'address': address,
                        'postal': postal,
                        'phone': phone,
                        'email': email,
                        'notes': notes
                    },
                    success: function (response) {
                        place_order();
                    }
                })
            }
        })
    })
</script>
</html>
