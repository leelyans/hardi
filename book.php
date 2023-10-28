 <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HARDI Tour</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo2.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
      body {
         background-color: #ffffff;
      }
      .image-container {
         max-width: 100%;
         max-height: 7rem;
      }
      .traveling-box h3{
         font-size: 20px;
      }
      .text-bg strong{
         margin-left: .2rem;
         font-size: 50px;
      }
      .amazing{
         background-image: url("./images/kigali abstract.jpg");
      }
      .black{
         background-color: rgba(128, 128, 128, 0.534);
         border: none;
         color: white;
      }
      .black:hover{
         color: rgb(36, 36, 36)k;
         border: none;
      }
      .row {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         margin: 0 -15px;
      }

      /* Style the individual boxes */
      .box {
         /* background-color: #f7f7f7; */
         border: 1px solid #e0e0e0;
         padding: 20px;
         text-align: center;
         margin: 15px;
         border-radius: 5px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Style the box title */
      .title {
         font-size: 18px;
         color: #333;
         margin-top: 10px;
      }
      .title a{
         color: #FFBF00;
         font-size: 18px;
      }

      /* Style the box description */
      .description {
         font-size: 14px;
         color: #777;
         margin-top: 10px;
      }

      /* Style the box image */
      .image-container img {
         max-width: 100%;
         height: auto;
         border-radius: 5px;
      }

      /* Animation for the wow class (You can add your own animation) */
      .wow {
         animation-name: bounceInUp;
      }

      /* Adjust animation duration and delay */
      [data-wow-duration="1.4s"] {
         animation-duration: 1.4s;
      }

      [data-wow-delay="0.1s"] {
         animation-delay: 0.1s;
      }

      [data-wow-delay="0.2s"] {
         animation-delay: 0.2s;
      }

      .book_btn{
         color: #fff;
         background: #000;
         /* color: #c0c0c0; */
         width: 20rem;
         height: 2.7rem;
         float: left;
         font-size: 18px;
         /* font-weight: bold; */
         border-radius: .5rem;
         /* margin: 15px 0px 60px 15px; */
      }
      .book_btn:hover{
         color: #FFBF00;
      }
      .col-md-9{
         width: 100%;
      }

      .main-form .row{
         width: 100%;
      }
      .main-form .row_row{
         display: flex;
         flex-direction: row;
         width: 100%;
         justify-content: space-between;
      }
      .row_row_row{
         height: auto;
         width: fit-content;
         padding: 2rem 2rem 2rem 2rem;
         border-radius: .5rem;
         /* width: 100%; */
         background-color: #f0f0f0;
         /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
      }
      .row_row_row select, .row_row_row input{
         width: 100%;
         margin-bottom: 1.5rem;
         border: none;
      }
      .banner-main{
         margin-top: 7rem;
      }

   </style>
   <!-- body -->
   <body class="main-layout">
  <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header" style="height: 90px;">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <ul>
                              <li><img src="images/1.png" alt="#"/> Kigali-Rwanda</li>
                              <li><img src="images/2.png" alt="#"/> +250  789 288 770</li>
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
                                 <li> <a href="home.php">Home</a> </li>
                                 <li> <a href="car rental.php">Travel Services</a> </li>
                                 <li><a href="travel.php">Tour Packages</a></li>
                                 <li><a href="about.php">About</a></li>
                                 <li><a href="services.php">Destinations</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
  <div class="container" style="margin-top: 210px;">
                     <div class="main-form">
                        <h3>BOOK TRAVEL</h3>
                        <div class="row">
                           <div class="row_row">
                                 <div class="row_row_row">
                                    <form action="travel_submit" method="post">
                                       <div>
                                          <input class="form-control" placeholder="Full name" type="text" name="full_name" required>
                                       </div>
                                       <div>
                                          <input class="form-control" placeholder="Phone number" type="text" name="phone_number" required>
                                       </div>
                                       <div>
                                          <select name="attractions" class="form-control">
                                             <option value="none">Attractions</option>
                                             <option value="">Canopy Walk</option>
                                             <option value="">Chimpanze Trekking</option>
                                             <option value="">Gorilla</option>
                                             <option value="">Wild Life</option>
                                             <option value="">Water Fall</option>
                                             <option value="">Country Lakes</option>
                                             <option value="">City Tour</option>
                                          </select>
                                       </div>
                                       <div>
                                          <input class="form-control" placeholder="Any" type="date" name="date">
                                       </div>
                                       <div>
                                          <select name="attractions" class="form-control">
                                             <option value="none">Number of people</option>
                                             <option value="">1 PERSON</option>
                                             <option value="">2 PEOPLE</option>
                                             <option value="">3 PEOPLE</option>
                                             <option value="">4 - 7 PEOPLE</option>
                                             <option value="">8+ PEOPLE</option>
                                          </select>
                                       </div>
                                       <div>
                                          <input class="form-control" placeholder="Email" type="email" name="email" required>
                                       </div>
                                       <button type="submit" name="submit" class="book_btn">Book now</button>
                                    </form>
                                 </div>
                              <div class="row_row_row">
                              <form action="process.php" method="post">
                                 <div>
                                    <input class="form-control" placeholder="Full name" type="text" name="full_name" required>
                                 </div>
                                 <div>
                                    <input class="form-control" placeholder="Phone number" type="text" name="phone_number" required>
                                 </div>
                                 <div>
                                    <select name="car_rental" class="form-control">
                                          <option value="none">Car Rentals</option>
                                          <option value="TOYOTA RAV4">TOYOTA RAV4</option>
                                          <option value="SAFARI CARS">SAFARI CARS</option>
                                          <option value="TOYOTA V8 & TXL">TOYOTA V8 & TXL</option>
                                          <option value="BUS">BUS</option>
                                    </select>
                                 </div>
                                 <div>
                                    <input class="form-control" placeholder="Duration" type="text" name="duration" required>
                                 </div>
                                 <div>
                                    <select name="category" class="form-control">
                                          <option value="none">CATEGORY</option>
                                          <option value="SELF DRIVING">SELF DRIVING</option>
                                          <option value="DEDICATED DRIVER">DEDICATED DRIVER</option>
                                    </select>
                                 </div>
                                 <div>
                                    <input class="form-control" placeholder="Email" type="email" name="email" required>
                                 </div>
                                 <button type="submit" name="submit" class="book_btn">Rent now</button>
                              </form>

                                 
                              </div>
                           </div>
                        </div>
   </div>
                  </div>

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
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
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
         })
      </script>
     
   </body>
</html>