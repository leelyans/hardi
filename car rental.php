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
    <link rel="icon" href="images/logo2.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<style>
    .image-container {
        max-width: 100%;
        max-height: 7rem;
    }

    /* .container .section-header{
      margin-top: 15rem;
    } */
    .section-header {
        text-align: center;
        margin-top: 20%;
        margin-bottom: 2rem;
    }

    .section-header h3 {
      font-size: 40px;
      color: #333;
      font-weight: bold;
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
    ul, 
    li, 
    ol {
      display: flex;
      margin: 0 0 2rem 0;
      gap: 1rem;
      justify-content: center;
      padding: 0px;
      list-style: none;
      cursor: pointer;
    }

    #portfolio-flters li{
      background: transparent;
      border: 0px solid #000;
      color: #000;
      padding: 10px 25px 6px 25px;
      float: left;
      font-size: 20px;
      font-weight: bold;
      border-radius: .5rem;
      margin: 15px 10px 60px 10px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }
    #portfolio-flters li:hover{
      background-color: #f8f8f8;
    }

    #portfolio-flters .filter-active{
      background: #cfcfcf;
      color: #000;
      border: none;
    }
    #portfolio-flters .filter-active:hover{
      color: #000;
      background: #cfcfcf;
    }

</style>
<body class="main-layout">
<header>
    <div class="header" style="height: 90px;">
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
                                    <li > <a href="index.php">Home</a> </li>
                                    <li class="active"> <a href="#">Car Rental</a> </li>
                                    <li><a href="travel.php">Travel</a></li>
                                    <li><a href="services.php">Services</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">

        <header class="section-header">
          <h3 class="section-title">Rent Your Ride</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ALL</li>
              <li data-filter=".filter-app">TOYOTA RAV4</li>
              <li data-filter=".filter-card">SAFARI CARS</li>
              <li data-filter=".filter-web">TOYOTA V8 & TXL</li>
              <li data-filter=".filter-bus">BUS</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/391-3917442_front-angle-medium-view-toyota-rav4-white-prices.png" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/2007_toyota_land_cruiser_v8.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/2006-Toyota-RAV4-EX-100673099-08.png" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/G03 (1).jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/4JWSFd.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bus" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/20230909112944_[fpdl.in]_white-small-bus-urban-suburban-travel-car-with-empty-body-design-advertising-3d-illustration_101266-17064_large.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/G03.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bus" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/big-up_f028e8f95a881001d6cbb6661a4c4c65.png" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bus" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/download.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-bus" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/2022GKP6TfZAYu.jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/SPN_PRD_0103R3FC224277430F2_compcrop_001.png" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-bus" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="images/download (1).jpg" class="img-fluid" alt="">
              <!-- <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div> -->
            </div>
          </div>

        </div></div>


        <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="https://www.instagram.com/hardi.tours_and_travel_agency/"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>CONTACT US</h3>
                        <span>KIGALI - RWANDA<br>
                        +250 789 288 770</span><br>
                        
                        <br>
                        <img src="images/rdb.png" alt="">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                           <li> <a href="#">About us</a></li>
                           <li> <a href="#">Terms and conditions</a></li>
                           <li> <a href="#"> Privacy policy</a></li>
                           <li> <a href="#">News</a></li>
                           <li> <a href="#"> Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3> Contact US</h3>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Name" type="text">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Email" type="text">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="Comment" type="text"></textarea>
                           </div>
                        </div>
                        <button class="Subscribe">Send</button>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <!-- <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p> -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.js"></script>

<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Handle click events on the li elements
        $("#portfolio-flters li").click(function() {
            var filter = $(this).data("filter");

            // Remove the "filter-active" class from all list items
            $("#portfolio-flters li").removeClass("filter-active");
            // Add the "filter-active" class to the clicked list item
            $(this).addClass("filter-active");

            if (filter === "*") {
                // Show all images if "All" is clicked
                $(".portfolio-item").fadeIn();
            } else {
                // Hide all images
                $(".portfolio-item").fadeOut(0);
                // Show images that match the selected filter
                $(filter).fadeIn();
            }
        });
    });
</script>
</body>
</html>
