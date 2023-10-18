<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>HARDI Tour</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/final logo.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<style>
    .logo {
        width: 7rem;
    }

    .image-container {
        max-width: 100%;
        max-height: 7rem;
    }

    .section-header {
        text-align: center;
        margin-top: 12rem;
        margin-bottom: 5rem;
    }

    .section-header h3 {
        font-size: 32px;
        color: #333;
    }

    .section-header p {
        font-size: 16px;
        color: #777;
    }

    .list-group-item {
        margin: 0;
        padding: 0;
        border: none;
    }

    .row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .card {
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        padding: 20px;
        margin: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .currency {
        font-size: 18px;
        color: #000;
        font-weight: bold;
    }

    .currency::after {
        content: "";
        font-size: 16px;
    }

    .period {
        font-size: 16px;
        color: #777;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        color: #e9af00;
        margin: 1.5rem 0 0 .2rem;
    }

    .list-group,
    .list-group p {
        margin: 0rem 0 1.5rem 0;
    }

    .list-group .list-group-item {
        margin: .3rem 0 .3rem 2rem;
    }

    .btn {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .card {
            flex: 1;
        }
    }
</style>
<body class="main-layout">
<header>
    <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">
                            <ul>
                                <li><img src="images/1.png" alt="#"/> Kigali Rwanda</li>
                                <li><img src="images/2.png" alt="#"/> +250 789 288 770</li>
                                <li><img src="images/3.png" alt="#"/> harditoursandtravelagency@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="images/final logo.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li> <a href="/">Home</a> </li>
                                    <li> <a href="services.php">Services</a> </li>
                                    <li class="active"><a href="#">Travel</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="pricing" class="wow fadeInUp section-bg">
    <div class="container">
        <header class="section-header">
            <div style="display: flex; align-items: center; justify-content: center;">
                <h3 style="font-size: xx-larger; font-weight: bold;">TRAVEL </h3> &nbsp;&nbsp; &nbsp;
                <h3 style="color: #e9af00; font-size: xx-larger; font-weight: bold;">NOW</h3>
            </div>
            <p>Various kinds of offers we provide and their pricing</p>
        </header>
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><span class="currency">AIRPORT SHUTTLE</span></h3>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">
                            $25/ Person:
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">Airport Pickup</li>
                            OR
                            <li class="list-group-item">Airport Dropoff</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><span class="currency">GORILLA TREKKING</span></h3>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">
                            <span>$2000 <p> Including:</p></span>
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">Mountain Gorilla Trekking Fees</li>
                            <li class="list-group-item">Car, Fuel, and Driver Guide</li>
                            <li class="list-group-item">Lunch and Soft drinks</li>
                            <li class="list-group-item">Mineral Water</li>
                            <li class="list-group-item">All Government Taxes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><span class="currency">AKAGERA NATIONAL PARK</span></h3>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">
                            PRICES:
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">1 Person: USD 450</li>
                            <li class="list-group-item">2 People: USD 350 / Person</li>
                            <li class="list-group-item">3 People: USD 300 / Person</li>
                            <li class="list-group-item">4-7 People: USD 250 / Person</li>
                        </ul>
                        <h4 class="card-title">
                            INCLUDING:
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">Safari car 4WD open roof</li>
                            <li class="list-group-item">Entrance Fees and Taxes</li>
                            <li class="list-group-item">Professional guide</li>
                            <li class="list-group-item">Picnic lunch and drinks</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><span class="currency">KIGALI CITY TOUR</span></h3>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">
                            PRICES:
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">1 Person: USD 100</li>
                            <li class="list-group-item">2 People: USD 150</li>
                            <li class="list-group-item">3 People: USD 200</li>
                        </ul>
                        <h4 class="card-title">
                            KEY LANDMARKS:
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">Kigali Genocide Memorial</li>
                            <li class="list-group-item">Museums and Galleries</li>
                            <li class="list-group-item">Local and Crafts Markets</li>
                            <li class="list-group-item">Shopping Malls</li>
                            <li class="list-group-item">Old City and New City</li>
                            <li class="list-group-item">Mount Kigali, etc ...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    });
</script>
</body>
</html>
