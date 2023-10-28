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
</head>
<style>
    .li_active {
        color: #FFBF00;
    }
    #service_navigation li{
        background: transparent;
        border: 0px solid #000;
        color: #000;
        padding: 10px 25px 6px 25px;
        font-size: 20px;
        font-weight: bold;
        border-radius: .5rem;
        margin: 5px 5px 10px 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }
    #service_navigation li:hover{
      background-color: #f8f8f8;
    }
    #service_navigation .filter-active{
      background: #cfcfcf;
      color: #000;
      border: none;
    }
    #service_navigation .filter-active:hover{
      background: #cfcfcf;
      color: #000;
      border: none;
    }
    .readmore{
        padding: .5rem 1.5rem .5rem 1.5rem;
        border-radius: .2rem;
        margin: 1rem 0 0 0;
        font-size: 16px;
        font-weight: bold;
        background-color: #1e2730;
        color: #faad19;
    }
</style>
<link rel="stylesheet" href="./css/services.css">
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
                                            <li> <a href="car rental.php">Travel Services</a> </li>
                                            <li><a href="travel.php">Tour Packages</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li class="active"><a href="">Destinations</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="body_container">
            <div class="heading">
                <h2>OUR </h2><h2>OFFERS</h2>
            </div>
            <div class="nav">
                <nav class="cool-navigation">
                    <ul id="service_navigation">
                        <li class="safari filter-active">Safari Planning</li>
                        <li class="gorilla">Gorilla Trekking</li>
                        <li class="city">Kigali City Tour</li>
                        <li class="hotel">Hotel Reservation</li>
                    </ul>
                </nav>
                <div class="body_content">
                    <div id="tour_card" class="safari_planning planning">
                        <div class="safari_card">
                            <div class="card_title">
                                <p class="c_title">Nyungwe National Park</p>
                                <p class="card_desc">Nyungwe National Park is a pristine and biodiverse protected area located in Rwanda, renowned for its lush rainforests, diverse wildlife, and remarkable primate species.</p>
                                <a href="nyungwe.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/nyungwe.jpeg" alt="">
                            </div>
                        </div>

                        <div class="safari_card">
                            <div>
                                <img src="images/kivu.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">Lake kivu</p>
                                <p class="card_desc">Lake Kivu is one of the African Great Lakes, situated between Rwanda and the Democratic Republic of Congo known for its scenic beauty, and the potential for energy production due to its methane.</p>
                                <a href="kivu.php"><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                        
                        <div class="safari_card">
                            <div class="card_title">
                                <p class="c_title">Akagera National Park</p>
                                <p class="card_desc">Akagera National Park is a picturesque wildlife reserve in Rwanda with stunning savannas, and wetlands. It offers a diverse range of wildlife, making it a popular destination for safaris and outdoor enthusiasts.</p>
                                <a href="akagera.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/Tours-and-travel.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="safari_card">
                            <div>
                                <img src="images/nyanza.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">King's Palace Nyanza</p>
                                <p class="card_desc"> It was once a royal residence into the traditional Rwandan history. Today it serves as a museum, providing visitors with insights into the country's rich royal heritage and history.</p>
                                <a href="palace.php"><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                        
                        <div class="safari_card">
                            <div class="card_title">
                                <p class="c_title">Richard Kandt's Museum</p>
                                <p class="card_desc">A historical and cultural museum named after Dr. Richard Kandt, a German colonial officer who played a significant role in Rwanda's history. </p>
                                <a href="kandt.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/the-richard-kandt-museum-still-holds-lessons-to-the-rwandan-society.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div id="tour_card" class="gorilla_trekking_planning planning">
                        <div class="gorilla_card">
                            <div class="card_title">
                                <!-- <p class="c_title">Nyungwe National Park</p> -->
                                <p class="card_desc">Gorillas are large, peaceful primates found in African forests. They're known for their strength and familial bonds, making them captivating subjects for wildlife enthusiasts.</p>
                                <a href=""><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/gorilla-trekking-starting-from-ruhija-sector-in-bwindi-national-park.jpg" alt="">
                            </div>
                        </div>

                        <div class="gorilla_card">
                            <div>
                                <img src="images/Grauers-Gorillas-in-Kahuzi-Biega-National-Park-DR-Congo-photo-by-Marcus-Westberg-.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <!-- <p class="c_title">Lake kivu</p> -->
                                <p class="card_desc">Gorillas are large, peaceful primates found in African forests. They're known for their strength and familial bonds, making them captivating subjects for wildlife enthusiasts.</p>
                                <a href=""><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                        
                        <div class="gorilla_card">
                            <div class="card_title">
                                <!-- <p class="c_title">King's Palace Nyanza</p> -->
                                <p class="card_desc">Gorillas are large, peaceful primates found in African forests. They're known for their strength and familial bonds, making them captivating subjects for wildlife enthusiasts.</p>
                                <a href=""><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/landing_about.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="gorilla_card">
                            <div>
                                <img src="images/site_0063_0001-750-750-20150413150423.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <!-- <p class="c_title">Richard Kandt's Museum</p> -->
                                <p class="card_desc">Gorillas are large, peaceful primates found in African forests. They're known for their strength and familial bonds, making them captivating subjects for wildlife enthusiasts.</p>
                                <a href=""><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="tour_card" class="city_planning planning">
                        <div class="city_card">
                            <div class="card_title">
                                <p class="c_title">Kigali Genocide Memorial</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="genocide_memorial.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/Visit-Rwanda-Kigali-Genocide-Museum-Family-Photographs-1920x1280.jpg" alt="">
                            </div>
                        </div>

                        <div class="city_card">
                            <div>
                                <img src="images/Visit-Rwanda-Kandt-House-Museum-1650x1238.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">Kandt House Museum</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="kandt.php"><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                        
                        <div class="city_card">
                            <div class="card_title">
                                <p class="c_title">Kigali Convetion Centre</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="kcc.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/220928144359-kigali-convention-centre-file-042718.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="city_card">
                            <div>
                                <img src="images/on-top-of-mount-kigali.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">Kigali Mountains</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href=""><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                    </div>

                    <div id="tour_card" class="hotel_planning planning">
                        <div class="reservation_card">
                            <div class="card_title">
                                <p class="c_title">Radisson Blu Hotel & Convention Centre</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="kcc.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/KCC.jpg" alt="">
                            </div>
                        </div>

                        <div class="reservation_card">
                            <div>
                                <img src="images/remarkable-rwanda-remarkable.jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">Hotel Mille Collins</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="mille_collins.php"><button class="readmore">Read More</button></a>
                            </div>
                        </div>
                        
                        <div class="reservation_card">
                            <div class="card_title">
                                <p class="c_title">Ubumwe Grande Hotel</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="ubumwe.php"><button class="readmore">Read More</button></a>
                            </div>
                            <div>
                                <img src="images/arton199.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="reservation_card">
                            <div>
                                <img src="images/download (3).jpg" alt="">
                            </div>
                            <div class="card_title">
                                <p class="c_title">Kigali Marriott Hotel</p>
                                <p class="card_desc">You'll be able to discover culture, geography and sociology. Satisfy your curiosity and get new tastes. Visit most of the modern places and discover new cool places</p>
                                <a href="marriot.php"><button class="readmore">Read More</button></a>
                            </div>
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

        <script>
            const safariDiv = document.querySelector(".safari_planning");
            const gorillaDiv = document.querySelector(".gorilla_trekking_planning");
            const cityDiv = document.querySelector(".city_planning");
            const hotelDiv = document.querySelector(".hotel_planning");
            
            const safariLink = document.querySelector(".safari");
            const gorillaLink = document.querySelector(".gorilla");
            const cityLink = document.querySelector(".city");
            const hotelLink = document.querySelector(".hotel");
        
            const planning = document.querySelectorAll(".planning");
            const lists = document.querySelectorAll(".lists");
            
            gorillaDiv.style.display = "none";
            cityDiv.style.display = "none";
            hotelDiv.style.display = "none";

            // Add click event listeners to each link
            safariLink.addEventListener("click", (e) => {
                e.preventDefault();
                safariLink.classList.add("filter-active");
                gorillaLink.classList.remove("filter-active");
                cityLink.classList.remove("filter-active");
                hotelLink.classList.remove("filter-active");
                safariDiv.style.display = "block";
                gorillaDiv.style.display = "none";
                cityDiv.style.display = "none";
                hotelDiv.style.display = "none";
            });
            
            gorillaLink.addEventListener("click", (e) => {
                e.preventDefault();
                safariLink.classList.remove("filter-active");
                gorillaLink.classList.add("filter-active");
                cityLink.classList.remove("filter-active");
                hotelLink.classList.remove("filter-active");
                safariDiv.style.display = "none";
                gorillaDiv.style.display = "block";
                cityDiv.style.display = "none";
                hotelDiv.style.display = "none";
            });
            
            cityLink.addEventListener("click", (e) => {
                e.preventDefault();
                safariLink.classList.remove("filter-active");
                gorillaLink.classList.remove("filter-active");
                cityLink.classList.add("filter-active");
                hotelLink.classList.remove("filter-active");
                safariDiv.style.display = "none";
                gorillaDiv.style.display = "none";
                cityDiv.style.display = "block";
                hotelDiv.style.display = "none";
            });
            
            hotelLink.addEventListener("click", (e) => {
                e.preventDefault();
                safariLink.classList.remove("filter-active");
                gorillaLink.classList.remove("filter-active");
                cityLink.classList.remove("filter-active");
                hotelLink.classList.add("filter-active");
                safariDiv.style.display = "none";
                gorillaDiv.style.display = "none";
                cityDiv.style.display = "none";
                hotelDiv.style.display = "block";
            });
        </script>
        
        

    </body>
</html>
