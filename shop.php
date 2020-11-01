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
                                <li class="active"><a href="shop.php" class="nav-link text-left">Wines</a></li>
                                <li><a href="my_cart.php" class="nav-link text-left">Cart</a></li>
                                <li><a href="ordered.php" class="nav-link text-left">Ordered</a></li>
                                <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="site-section mt-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Our Products</h2>
                    <p>Enjoy Shopping the Best Wines from all around the World ready at a single place.</p>
                </div>
            </div>

            <div class="row">
                <?php
                include_once "database.php";
                $sql=mysqli_query($con,"select * from wines where active=1");
                while ($row=mysqli_fetch_assoc($sql)){
                    ?>
                    <div class="col-lg-4 mb-5 col-md-6">

                        <div class="wine_v_1 text-center pb-4">
                            <a class="thumbnail d-block mb-4"><img src="images/<?php echo $row['image']; ?>" alt="Image" class="img-fluid"></a>
                            <div>
                                <h3 class="heading mb-1"><a href="#"><?php echo $row['name']; ?></a></h3>
                                <span class="price">Rs.  <?php echo $row['price'].".00"; ?></span>
                            </div>


                            <div class="wine-actions">

                                <h3 class="heading-2"><a href="#"><?php echo $row['name']; ?></a></h3>
                                <span class="price d-block"><?php echo $row['price']; ?></span>

                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-o"></span>
                                </div>


                                <a id="<?php echo $row['id']; ?>" class="cart btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="hero-2" style="background-image: url('images/home-wines.png');">
        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Welcome</span>
                    <h2>The True Taste is HERE!</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="owl-carousel owl-slide-3 owl-slide">

                <blockquote class="testimony">
                    <img src="images/person_1.jpg" alt="Image">
                    <p>&ldquo;Excellent selection of wine from all over the globe at good prices, a reasonable number of sale bottles, & occasional free or low cost shipping specials.&rdquo;</p>
                    <p class="small text-primary">&mdash; Vikram Seijwal </p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_2.jpg" alt="Image">
                    <p>&ldquo;This was a gift to my cousin. I have always had great experience with Royal wines in availability, ordering & receiving my wine on time! My cousin was thrilled & is enjoying the wine!&rdquo;</p>
                    <p class="small text-primary">&mdash; Priyesh Salian</p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_3.jpg" alt="Image">
                    <p>&ldquo;I love the Rose wines. They taste so much like they do in Italy. My last order included Lambrusco, which I drank years ago when I lived in Italy. I thought my wife would like it; she loved it! Just ordered more!!&rdquo;</p>
                    <p class="small text-primary">&mdash; Levi Morris</p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_1.jpg" alt="Image">
                    <p>&ldquo;We have a very limited port selection in our local stores. I'm thrilled I was able to find an extensive selection for my port-loving husband at Royal wines.&rdquo;</p>
                    <p class="small text-primary">&mdash; Wilston Ferrao</p>
                </blockquote>

            </div>
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

<script>
    $('document').ready(function () {
        $('.cart').bind('click',function () {
            var id=this.id;
            $.ajax({
                url:"cart.php",
                method:"post",
                data:{
                    'id':id,
                },
                success:function (response) {
                   if (response=='0')
                       alert('Item already exists');
                   else
                       alert("Item added successfully");
                }
            })
        })
    })
</script>

</body>

</html>
