<?php
include('settings.php');	
page_header();
	
?>       
<style>
    .slider-area {
        position: relative;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6); /* Adjust the alpha value for darkness */
        z-index: 1;
    }

    /* Additional styling for existing content */
    .slider-content {
        position: relative;
        z-index: 2;
        color: white; /* Set text color to contrast with the dark overlay */
    }
</style>
        <!-- main-area -->
        <main>
           <!-- slider-area -->
           <section id="home" class="slider-area fix p-relative">
                <div class="slider-active" style="background: #101010;">
                    <div class="single-slider slider-bg d-flex align-items-center" style="position: relative; background-image: url(img/slider/slider_bg3.jpg); background-size: cover; overflow: hidden;">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-80 text-center">
                                        <h3 data-animation="fadeInUp" data-delay=".4s" style="font-size:40px;color:aliceblue;">Enjoy A Luxury Experience At</h3>
                                        <h2 data-animation="fadeInUp" data-delay=".6s" style="text-shadow:2px 2px 2px black;font-family:cursive;">HOTEL AVADH CLASSIO</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg d-flex align-items-center" style="position: relative; background-image: url(img/slider/slider1.jpg); background-size: cover; overflow: hidden;">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-80 text-center">
                                        <h3 data-animation="fadeInUp" data-delay=".4s" style="font-size:40px;color:aliceblue;">Enjoy A Luxury Experience At</h3>
                                        <h2 data-animation="fadeInUp" data-delay=".6s" style="text-shadow:2px 2px 2px black;font-family:cursive;">HOTEL AVADH CLASSIO</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg d-flex align-items-center" style="position: relative; background-image: url(img/slider/slider_bg2.jpg); background-size: cover; overflow: hidden;">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-80 text-center">
                                        <h3 data-animation="fadeInUp" data-delay=".4s" style="font-size:40px;color:aliceblue;">Enjoy A Luxury Experience At</h3>
                                        <h2 data-animation="fadeInUp" data-delay=".6s" style="text-shadow:2px 2px 2px black;font-family:cursive;">HOTEL AVADH CLASSIO</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg d-flex align-items-center" style="position: relative; background-image: url(img/slider/g6.jpg); background-size: cover; overflow: hidden;">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="slider-content s-slider-content mt-80 text-center">
                                        <h3 data-animation="fadeInUp" data-delay=".4s" style="font-size:40px;color:aliceblue;">Enjoy A Luxury Experience At</h3>
                                        <h2 data-animation="fadeInUp" data-delay=".6s" style="text-shadow:2px 2px 2px black;font-family:cursive;">HOTEL AVADH CLASSIO</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- slider-area-end -->
             <!-- booking-area 
            <div id="booking" class="booking-area p-relative">
                <div class="container">
                    <form action="#" class="contact-form" >
							<div class="row align-items-center">
                                <div class="col-lg-12"> 
                                    <ul>
                                        <li> 
                                            <div class="contact-field p-relative c-name">  
                                               <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                     <input type="date" id="chackin" name="date">
                                            </div>      
                                        </li>
                                        <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                     <input type="date" id="chackout" name="date">
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-users"></i> Adults</label>
                                                <select name="adults" id="adu">
                                                  <option value="sports-massage">Adults</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                 <label><i class="fal fa-baby"></i> Child</label>
                                                <select name="child" id="cld">
                                                  <option value="sports-massage">Child</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                         <li> 
                                            <div class="contact-field p-relative c-name">  
                                                <label><i class="fal fa-concierge-bell"></i> Room</label>
                                               <select name="room" id="rm">
                                                  <option value="sports-massage">Room</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>      
                                        </li>
                                        
                                        <li>
                                            <div class="slider-btn">    
                                                <label><i class="fal fa-calendar-alt"></i></label>
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Check Availability</button>
                                        </div>     
                                        </li>
                                    </ul>
                                </div>
                          
                            </div>
                        
                    </form>
                </div>
            </div>
            <!-- booking-area-end -->
             <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="animations-02"><img    loading="lazy" src="img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img loading="lazy" src="img/re3.jpg" style="height:100%;" alt="img">   
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-left">
                                <div class="about-content s-about-content  wow fadeInRight  animated pl-30" data-animation="fadeInRight" data-delay=".4s">
                                    <div class="about-title second-title pb-25">  
                                        <h5>About Us</h5>
                                        <h2 style="font-size:2.3rem;">Most Safe & Rated Hotel In AYODHYA.</h2>                                   
                                    </div>
                                    <p>Welcome to Hotel Avadh Classio in Ayodhya, where modern comfort meets traditional charm. Our hotel is a cozy retreat for all, whether you're here for pilgrimage, business, or leisure. Enjoy our comfy rooms, delicious dining, and friendly service. Experience the rich culture of Ayodhya, known for Lord Rama's legacy. We strive to make your stay special, ensuring a pleasant and memorable time in this sacred city. Hotel Avadh Classio welcomes you with open arms, promising a simple yet delightful stay in the heart of Ayodhya's cultural heritage.It is designed to give a overview of rich traditional Indian culture specifying our hospitality in just few words saying ´ <b>GUEST REPLICATES GOD</b> ´.</p>
                                        
                                        <div class="about-content3 mt-30">
                                        <div class="row justify-content-center align-items-center">
                                        <div class="col-md-6">
                                            <ul class="green mb-30">                                              
                                                        <li> Lift available.</li>
                                                        <li> Electricity backup 24 hour.</li>     
                                                        <li> Inhouse kitchen</li>
                                                </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="slider-btn">                                          
                                                    <a href="about.php" class="btn ss-btn smoth-scroll">Discover More</a>				
                                                </div>
                                        </div>
                                        
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        
                        </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- service-details2-area -->
            <section id="service-details2" class="pt-120 pb-90 p-relative" style="background-color: #f7f5f1;">
                 <div class="animations-01"><img loading="lazy" src="img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center" data-aos="fade-up">
                                <h5>Explore</h5>
                                <h2 style="font-size:3rem;">
                                    The Hotel
                                </h2>
                                <p>Hotel Avadh Classio in Ayodhya provides a cozy and culturally rich retreat, seamlessly combining modern comfort with traditional charm for a memorable stay.</p>
                            </div>
                           
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                                <div class="services-08-item mb-30">
                                    <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/fe-icon01.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img loading="lazy" src="img/icon/fe-icon01.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php"> Quality Room</a></h3>
                                        <p>Air Conditioned Elegant Room with attached Bathroom.</p>
                                        <a href="single-service.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                              
                             <div class="col-lg-4 col-md-6" data-aos="fade-up">
                               <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/fe-icon05.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img loading="lazy" src="img/icon/fe-icon05.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php">Best Accommodation</a></h3>
                                        <p>Hospitality is simply an opportunity to show love and care.</p>
                                         <a href="#">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                         <div class="col-lg-4 col-md-6" data-aos="fade-up">
                               <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/wifi.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img loading="lazy" src="img/icon/wifi.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php"> Free WiFi</a></h3>
                                        <p>Wi-Fi, Food and Bed - Perfection.</p></br>
										
                                        <a href="#">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-6" data-aos="fade-up">
                               <div class="services-08-item mb-30">
                                   <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/fe-icon07.png" alt="img">
                                    </div>
                                    <div class="services-08-thumb">
                                   <img loading="lazy" src="img/icon/fe-icon07.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php">Restaurants & Cafetaria</a></h3>
                                       <p>Nothing brings people together like good food.</p></br>
                                         <a href="#">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6" data-aos="fade-up">
                                <div class="services-08-item mb-30">
                                    <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/video.png" alt="img" style="height:170px;">
                                    </div>
                                    <div class="services-08-thumb">
                                     <img loading="lazy" src="img/icon/video.png" alt="img" >
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php">Movie Theater</a></h3>
                                        <p>Watch Latest Movies in our theater and feel the hapiness.</p>
                                         <a href="#">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-4 col-md-6" data-aos="fade-up">                                  
                                <div class="services-08-item mb-30">
                                     <div class="services-icon2">
                                       <img loading="lazy" src="img/icon/meeting.png" alt="img" style="height:170px;">
                                    </div>
                                    <div class="services-08-thumb">
                                   <img loading="lazy" src="img/icon/meeting.png" alt="img">
                                    </div>
                                    <div class="services-08-content">
                                        <h3><a href="single-service.php">Meeting Area</a></h3>
                                       <p>A comfortable meeting area for business or any other purpose. .</p>
                                         <a href="single-service.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- service-details2-area-end -->
             <!-- room-area-->
            <section id="services" class="services-area pt-113 pb-150">
              
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">    
                            <div class="section-title center-align mb-50 text-center">
                                <h5>The pleasure of luxury</h5>
                                <h2 style="font-size:3rem;">Rooms & Suites</h2>
                                <p>We Have 26 Rooms With 2 Suites Room 10 Executive Rooms And 14 Superior Rooms..</p>
                            </div>
                        </div>
                    </div>
                    <div class="row services-active">
                        <div class="col-xl-4 col-md-6" data-aos="fade-right">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
									<a class="gallery-link popup-image" href="img/r1.jpg">
                                    <img loading="lazy" src="img/r1.jpg" alt="img" style="height:300px;">
									</a>
                                </div>
                                <div class="services-content " data-aos="fade-up" style="display: flex;flex-direction: column;align-items: center;"> 
                                    <div class="day-book">
                                        <ul style="display:flex;justify-content:center;">
                                            
                                            <li style="padding:15px;" ><a href="contact.php" class="text-center d-block">Book Now</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="exective.php">Executive Room</a></h4>    
                                    <p>The spacious seating areas, luxurious bedding, and perfect air conditioning make you feel comfortable.</p>
                                    <div class="icon">
                                        <ul>
                                            <li><img loading="lazy" src="img/icon/sve-icon1.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon2.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon3.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon4.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon5.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon6.png" alt="img"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" >
                            <div class="single-services mb-30">
                                <div class="services-thumb">
									<a class="gallery-link popup-image" href="img/r3.jpg">
                                    <img loading="lazy" src="img/r3.jpg" alt="img" style="height:300px;">
									</a>
                                </div>
                                <div class="services-content" data-aos="fade-up" style="display: flex;flex-direction: column;align-items:center;"> 
                                    <div class="day-book">
                                        <ul style="display:flex;justify-content:center;">
                                            <li style="padding:15px;"><a href="contact.php" class="text-center d-block">Book Now</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="superior.php">Superior Room</a></h4>    
                                    <p>The spacious seating areas, luxurious bedding, and perfect air conditioning make you feel comfortable.</p>
                                    <div class="icon">
                                        <ul>
                                            <li><img loading="lazy" src="img/icon/sve-icon1.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon2.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon3.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon4.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon5.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon6.png" alt="img"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6" data-aos="fade-left">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
									<a class="gallery-link popup-image" href="img/r2.jpg">
                                    <img loading="lazy" src="img/r2.jpg" alt="img" style="height:300px;">
									</a>
                                </div>
                                <div class="services-content" data-aos="fade-up" style="display: flex;flex-direction: column;align-items:center;"> 
                                    <div class="day-book" > 
                                        <ul style="display:flex;justify-content:center;">
                                            <li style="padding:15px;"><a href="contact.php" class="text-center d-block"> Book Now</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="suite.php">Suite Room</a></h4>    
                                    <p>These spacious surroundings include a living room separate from the bedroom for ultimate comfort and privacy.</p>
                                    <div class="icon">
                                        <ul>
                                            <li><img loading="lazy" src="img/icon/sve-icon1.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon2.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon3.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon4.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon5.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon6.png" alt="img"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <!-- <div class="col-xl-4 col-md-6" data-aos="fade-left">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
									<a class="gallery-link popup-image" href="img/r2.png">
                                    <img loading="lazy" src="img/r2.png" alt="img" style="height:300px;">
									</a>
                                </div>
                                <div class="services-content" data-aos="fade-up"> 
                                    <div class="day-book">
                                        <ul>
                                            <li>₹2999/Night</li>
                                            <li><a href="contact.php">Book Now</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="single-rooms.php">Suite Room</a></h4>    
                                    <p>These spacious surroundings include a living room separate from the bedroom for ultimate comfort and privacy.</p>
                                    <div class="icon">
                                        <ul>
                                            <li><img loading="lazy" src="img/icon/sve-icon1.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon2.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon3.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon4.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon5.png" alt="img"></li>
                                            <li><img loading="lazy" src="img/icon/sve-icon6.png" alt="img"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- service-details2-area -->

            <style>
                /* -----------------------------------
                    Gallery Section
                --------------------------------------*/
                .portfolioz-sectionz {
                     padding: 50px 50px;
                }
                @media screen and (max-width: 480px) {
                    .portfolioz-sectionz {
                        padding: 50px 20px;
                    }
                }
                .portfolioz-sectionz h2 {
                font-size: 35px;
                font-weight: 600;
                color: #222;
                text-transform: uppercase;
                }
                .portfolioz-menuz {
                text-align: center;
                }
                .controlz {
                background: #000;
                color: #fff;
                padding: 5px 10px;
                border: 1px solid #343a40;
                border-radius: 3px;
                margin: 5px;
                cursor: pointer;
                -webkit-transition: all 05s ease;
                -moz-transition: all 05s ease;
                -ms-transition: all 05s ease;
                -o-transition: all 05s ease;
                transition: all 0.5s ease;
                }
                .controlz:hover {
                background: #343a40;
                }

                .portfolioz-itemz {
                padding-top: 30px;
                }
                .pd {
                padding: 0;
                padding: 10px;
                }
                .pd img {
                height: 180px;
                transition: all 0.5s;
                }
                .portfolioz-overlayz {
                position: absolute;
                z-index: 2;
                top: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.7);
                width: 100%;
                height: 100%;
                text-align: center;
                visibility: hidden;
                transition: all 0.5s;
                transform: scale(0);
                }
                .portfolioz-overlayz p,
                .portfolioz-overlayz a {
                position: relative;
                z-index: 4;
                }
                .portfolioz-overlayz::before {
                content: "";
                width: 0;
                height: 0;
                border-width: 0;
                position: absolute;
                left: 10%;
                top: 10%;
                transition: 50ms height ease 150ms;
                z-index: 3;
                }
                .portfolioz-overlayz::after {
                content: "";
                width: 0;
                height: 0;
                border-width: 0;
                position: absolute;
                right: 10%;
                bottom: 10%;
                transition: 100ms width ease 200ms;
                z-index: 3;
                }
                .portfolioz-itemz:hover .portfolioz-overlayz::before {
                /* width: 80%;
                height: 80%;
                border-top: 1px solid #50977f;
                border-right: 1px solid #50977f;
                transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s; */
                }
                .portfolioz-itemz:hover .portfolioz-overlayz::after {
                /* width: 80%;
                height: 80%;
                border-bottom: 1px solid #50977f;
                border-left: 1px solid #50977f;
                transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s; */
                }
                .portfolioz-itemz li:hover .portfolioz-overlayz {
                /* visibility: visible;
                transform: scale(1); */
                }
                .portfolioz-overlayz .category {
                margin-top: 70px;
                margin-bottom: 20px;
                font-size: 16px;
                color: #fff;
                font-weight: 500;
                }
                .mix{
                    background-color:whitesmoke;
                }
                .portfolio-item-content{
                    border:1px solid #333;
                    padding:0.4rem;
                    border-radius:5px;
                    position:relative;
                }
                .overlayitems{
                    position: absolute;
                    right: 5%;
                    top: 10%;
                    z-index: 1;
                    opacity: .3;
                }
                .overlayitems img{
                    width:100px;
                    height:100px;
                }
                .portfolio-item-content h3{
                    text-align:center;
                }
                .portfolio-item-content p{
                    text-align:justify;
                    padding:0.3rem;
                }
                .portfolioz-overlayz .magnify-icon {
                height: 40px;
                width: 40px;
                border-radius: 20px;
                background: #50977f;
                margin: 0 5px;
                cursor: pointer;
                display: inline-block;
                transition: all 0.25s;
                }
                .portfolioz-overlayz .magnify-icon:hover {
                background: #000;
                }
                .portfolioz-overlayz .magnify-icon p span i {
                font-size: 15px;
                color: #fff;
                line-height: 40px;
                cursor: pointer;
                }

            </style>
            <section id="service-details2" class="pt-60 pb-90 p-relative" style="background-color: #f7f5f1;" >
                <section class="portfolioz-sectionz" id="portfolio" >
                    <div class="animations-01"><img loading="lazy" src="img/bg/an-img-01.png" alt="an-img-01"></div>
                        <div class="container-fluid">
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-12 text-center">
                                <h2>Facilities present at the Mall</h2>
                                </div>
                            </div>
                            <div class="portfolioz-menuz mt-2 mb-4" data-aos="fade-up">
                                <nav class="controlzs">
                                <button type="button" class="controlz outline" data-filter="all">All</button>
                                <button type="button" class="controlz outline" data-filter=".shop">Shopping</button>
                                <button type="button" class="controlz outline" data-filter=".eye">Eyewear Brands</button>
                                <button type="button" class="controlz outline" data-filter=".ent">Entertainment</button>
                                <button type="button" class="controlz outline" data-filter=".cos">Cosmetic </button>
                                <button type="button" class="controlz outline" data-filter=".food">Food </button>
                                </nav>
                            </div>
                            <ul class="row portfolioz-itemz justify-content-center align-items-stretch" data-aos="fade-up">
                                <li class="mix shop col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content" >
                                        <div class="overlayitems">
                                        <img loading="lazy" src="img/icon/16.png" alt="img" >
                                        </div>
                                        <h3>Pantaloons</h3>
                                        <p>Pantaloons, a leading fashion destination, blends style and comfort with a diverse collection of apparel, catering to contemporary tastes effortlessly.</p>
                                        <!-- <ul>
                                            <li>Bullet point 1</li>
                                            <li>Bullet point 2</li>
                                        </ul> -->
                                    </div>
                                </li>
                                <li class="mix shop col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                      
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/17.png" alt="img" >
                                        </div>
                                        <h3>Meena bazaar</h3>
                                        <P>Meena Bazaar, a cultural haven, brings elegance and tradition to fashion, offering exquisite ethnic wear with timeless designs and craftsmanship.</P>
                                    </div>
                                    
                                </li>
                                <li class="mix shop col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/15.png" alt="img" >
                                        </div>
                                        <h3>Market 99 </h3>
                                        <P>
                                            Market 99, your go-to shopping destination, delivers affordable and quality lifestyle products, ensuring a delightful and budget-friendly retail experience for all.
                                        </P>
                                    </div>
                                    
                                </li>
                                <li class="mix eye col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/14.png" alt="img" >
                                        </div>
                                        <h3>Titan</h3>
                                        <p>Titan, synonymous with innovation and craftsmanship, presents timeless and sophisticated watches and accessories for those who cherish elegance and precision.</p>
                                    </div>
                                    <div class="portfolioz-overlayz">
                                        <!-- ... existing overlay content ... -->
                                    </div>
                                </li>
                                <li class="mix eye col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/13.png" alt="img" >
                                        </div>
                                        <h3>Hind eye </h3>
                                        <p>Hind Eye is your premier optical store, offering a curated selection of eyewear. Experience personalized service, quality frames, and precise prescriptions for optimal vision and style.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix ent col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/12.png" alt="img" >
                                        </div>
                                        <h3>Fun unlimited gaming zone</h3>
                                        <p>Fun Unlimited Gaming Zone provides an immersive gaming experience , a variety of gaming options, and a vibrant atmosphere, making it a haven for gaming enthusiasts.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix ent col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/11.png" alt="img" >
                                        </div>
                                        <h3>Dhishoom cinema</h3>
                                        <p>Dhishoom Cinema is your cinematic escape, presenting an immersive movie-watching experience. Enjoy the latest blockbusters in comfort and style at our state-of-the-art cinema hall.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix cos col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                    <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/10.png" alt="img" >
                                        </div>
                                        <h3>Sugar </h3>
                                        <p>Sugar is a trendsetting cosmetic brand renowned for its vibrant and high-quality makeup products. Elevate your beauty routine with our diverse and innovative cosmetic collections.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix cos col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                    <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/9.png" alt="img" >
                                        </div>
                                        <h3>Faces Canada </h3>
                                        <p>
                                            Faces Canada is a prominent beauty and cosmetics brand offering a diverse range of makeup and skincare products. Known for quality and innovation, it caters to the modern beauty needs.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix cos col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/8.png" alt="img" >
                                        </div>
                                        <h3>Dabur NewU</h3>
                                        <p>Discover a radiant you at NewU, your only destination for skincare, makeup, and fragrance. Elevate your beauty routine with quality products, ensuring a flawless transformation.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/7.png" alt="img" >
                                        </div>
                                        <h3>Pizza Hut</h3>
                                        <p>Pizza Hut, a global pizza leader, delivers mouthwatering pizzas, pasta, and wings. Enjoy innovative flavors and quality ingredients for a delightful dining .</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/6.png" alt="img" >
                                        </div>
                                        <h3>Wok in </h3>
                                        <p>
                                        Wok In is a distinguished food chain brand offering a delectable fusion of Asian flavors. Indulge in our diverse menu, crafted with fresh ingredients for a delightful culinary experience.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/5.png" alt="img" >
                                        </div>
                                        <h3>Aaryan restaurant </h3>
                                        <p>Aaryan Restaurant captivates diners with a delightful fusion of flavors, offering a diverse menu of delectable dishes in a cozy ambiance, promising a memorable dining experience with impeccable service.</p>
                                    </div>
                                    
                                </li>
                                
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/4.png" alt="img" >
                                        </div>
                                        <h3>Taafri  </h3>
                                        <p>Taafri offers a culinary journey with delectable dishes, creating a vibrant ambiance for food enthusiasts. Discover diverse flavors and an inviting atmosphere at Taafri, where every meal is a celebration.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/3.png" alt="img" >
                                        </div>
                                        <h3>Creambell </h3>
                                        <p>Creambell, a beloved ice cream brand, offers a diverse range of premium flavors, ensuring a delightful frozen treat. Indulge in the creamy creations, crafted with the finest ingredients, for a pure taste sensation.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/1.png" alt="img" >
                                        </div>
                                        <h3>House of candy </h3>
                                        <p>House of Candy is a sweet haven, presenting a myriad of delightful candies and confections, promising a sugary escape for candy enthusiasts in a vibrant and charming environment.</p>
                                    </div>
                                    
                                </li>
                                <li class="mix food col-xl-3 col-md-4 col-12 col-sm-6 pd">
                                    <div class="portfolio-item-content">
                                        <div class="overlayitems">
                                         <img loading="lazy" src="img/icon/2.png" alt="img" >
                                        </div>
                                        <h3>Havmor icecream</h3>
                                        <p>Havmor Ice Cream is a popular brand known for its wide array of delicious ice cream flavors. Renowned for quality and taste, Havmor has been a favorite choice for ice cream enthusiasts.</p>
                                    </div>
                                    
                                </li>

                                <!-- Repeat the structure for other portfolio items -->
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
            <!-- service-details2-area-end -->
            <!-- room-area-end -->    
            <!-- feature-area 
            <section class="feature-area2 p-relative fix" style="background: #f7f5f1;">
                 <div class="animations-02"><img loading="lazy" src="img/bg/an-img-02.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                           <div class="feature-img">                               
                                  <img loading="lazy" src="img/features/feature.png" alt="img" class="img">              
                                </div>
                        </div>
					   <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="feature-content s-about-content">
                                <div class="feature-title pb-20">                               
                                    <h5>Luxury Hotel & Resort</h5>
                                <h2 style="font-size:3rem;">
                                 Pearl Of The Adriatic.
                                </h2>                             
                                </div>
                                <p>Vestibulum non ornare nunc. Maecenas a metus in est iaculis pretium. Aliquam ullamcorper nibh lacus, ac suscipit ipsum consequat porttitor.Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta ex, in imperdiet tortor feugiat at.</p>
                                <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget.</p>
                                <div class="slider-btn mt-15">                                          
                                                 <a href="about.php" class="btn ss-btn smoth-scroll">Discover More</a>				
                                            </div>
                                
                            </div>
                        </div>
                       
                     
                    </div>
                </div>
            </section>
            <!-- feature-area-end -->
            <!-- pricing-area 
            <section id="pricing" class="pricing-area pt-120 pb-60 fix p-relative">
                 <div class="animations-01"><img loading="lazy" src="img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="animations-02"><img loading="lazy" src="img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
                <div class="container"> 
                    
                   <div class="row justify-content-center align-items-center">
                        
                        <div class="col-lg-4 col-md-12">
                         <div class="section-title mb-20">
                                <h5>Best Prices</h5>
                                <h2 style="font-size:3rem;">Extra Services</h2>                               
                            </div>
                             <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                            <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget.</p>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up">
                             <div class="pricing-box pricing-box2 mb-60">
                                    <div class="pricing-head">  
                                        <h3>Room cleaning</h3>    
                                        <p>Perfect for early-stage startups</p>
                                        <div class="month">Monthly</div>
                                        <div class="price-count">
                                            <h2 style="font-size:3rem;">$39.99</h2>
                                        </div> 
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30 text-left">
                                       <ul>
                                            <li>Hotel quis justo at lorem</li>
                                            <li>Fusce sodales, urna et tempus</li>
                                            <li>Vestibulum blandit lorem quis</li>                                           
                                        </ul>
                                    </div>      
                                     

                                    <div class="pricing-btn">
                                       <a href="contact.php" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                      
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="pricing-box pricing-box2 mb-60">
                                    <div class="pricing-head">  
                                        <h3>Drinks included</h3>    
                                        <p>Perfect for early-stage startups</p>
                                        <div class="month">Monthly</div>
                                        <div class="price-count">
                                            <h2 style="font-size:3rem;">$59.99</h2>
                                        </div> 
                                        <hr>
                                    </div>

                                    <div class="pricing-body mt-20 mb-30 text-left">
                                       <ul>
                                           <li>Hotel quis justo at lorem</li>
                                            <li>Fusce sodales, urna et tempus</li>
                                            <li>Vestibulum blandit lorem quis</li> 
                                        </ul>
                                    </div>      
                                     

                                    <div class="pricing-btn">
                                       <a href="contact.php" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pricing-area-end -->
             <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-90 p-relative fix" style="background-image: url(img/bg/testimonial-bg.png); background-size: cover;">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-12" data-aos="fade-up">
                              <div class="section-title center-align mb-50 text-center">
                                <h5>Testimonial</h5>
                                <h2 style="font-size:3rem;">What Our Clients Says</h2>
                                <p>What People are Saying about Our Services and Satisfaction</p>
                            </div>
                           
                        </div>
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img loading="lazy" src="img/testimonial/t2.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Praveen Awasthi</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img loading="lazy" src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Lovely hotel with a wonderful restaurant. Very friendly staff. Hotel is full of great art. Just a charming place. We really enjoyed our stay in this hotel. We really liked the food in the restaurant, it was delicious.”</p>
                                    
                                    <div class="qt-img">
                                    <img loading="lazy" src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img loading="lazy" src="img/testimonial/t3.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Sanchita Tiwari</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img loading="lazy" src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“Unlike some of the posts I’ve read in other places, I found the Hotel to be clean, inviting and downright classic! The staff was very friendly and consistently making sure I was comfortable. I will definitely stay there when I come back”.</p>
                                    
                                    <div class="qt-img">
                                    <img loading="lazy" src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img loading="lazy" src="img/testimonial/t4.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>VIKRAM GUPTA</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img loading="lazy" src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Walking distance to everything downtown. Beautiful rooms, great ambiance in the hotel dining room and bar. We didn’t eat so I can’t rate the food, although others looked like they were enjoying it! We will come again”.</p>
                                    
                                    <div class="qt-img">
                                    <img loading="lazy" src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img loading="lazy" src="img/testimonial/t1.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Vikas Sharma</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img loading="lazy" src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“I had a wonderful experience at the (HOTEL AVADH CLASSIO). Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues”.</p>
                                    
                                    <div class="qt-img">
                                    <img loading="lazy" src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
           
            <!-- booking-area 
            <section class="booking pt-120 pb-120 p-relative fix">
                <div class="animations-01"><img loading="lazy" src="img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                             <div class="contact-bg02">
                                <div class="section-title center-align">
                                    <h5>make appointment</h5>
                                    <h2 style="font-size:3rem;">
                                       Book A Room
                                    </h2>
                                </div>                                
                                <form action="mail.php" method="post" class="contact-form mt-30">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                           <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                     <input type="date" id="chackin2" name="date">
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                           <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                     <input type="date" id="chackout2" name="date">
                                        </div>
                                    </div>		
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                             <label><i class="fal fa-users"></i> Adults</label>
                                                <select name="adults" id="adu2">
                                                  <option value="sports-massage">Adults</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-option mb-20">                                   
                                            <label><i class="fal fa-concierge-bell"></i> Room</label>
                                               <select name="room" id="rm2">
                                                  <option value="sports-massage">Room</option>
                                                  <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="slider-btn mt-15">                                          
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Book Table Now</span></button>				
                                                </div>                             
                                    </div>
                                    </div>
                            </form>                            
                            </div>  
                                             
                        </div>
                        <div class="col-lg-6 col-md-6">
                             <div class="booking-img">
                                 <img loading="lazy" src="img/bg/booking-img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking-area-end -->	
           <!-- video-area -->
            <section id="video" class="video-area pt-150 pb-150 p-relative" style="background-image:url(img/slider/video_bg.jpg); background-repeat: no-repeat; background-position: center bottom; background-attachment: fixed;background-size:cover;" >
            <div class="overlay"></div>
                 <!-- Lines -->
                            <div class="content-lines-wrapper2">
                                <div class="content-lines-inner2">
                                    <div class="content-lines2"></div>
                                </div>
                            </div>
                           <!-- Lines -->
                <div class="container">                   
                     <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap">
                                <div class="s-video-content">
                                    <a href="img/video.mp4" class="popup-video"><img loading="lazy" src="img/bg/play-button.png" alt="circle_right"></a>
                                   
                                </div>
                            </div>
                            <div class="section-title center-align text-center">
                                <h2 style="font-size:3rem;color:white;position:relative;z-index:1;">
                                 Take A Tour Of Luxuri
                                </h2>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- video-area-end -->
            
              <!-- blog-area 
            <section id="blog" class="blog-area p-relative fix pt-90 pb-90">
                 <div class="animations-02"><img loading="lazy" src="img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Our Blog</h5>
                                <h2 style="font-size:3rem;">
                                    Latest Blog & News
                                </h2>
                                <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.php"><img loading="lazy" src="img/blog/inner_b1.jpg" alt="img"></a>
                                </div>                    
                                <div class="blog-content2">    
                                    <div class="date-home">
                                        24th March 2022
                                    </div>
                                    <h4><a href="blog-details.php">Cras accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.php">Read More</a></div>
                                     
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.php"><img loading="lazy" src="img/blog/inner_b2.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content2">                                    
                                    <div class="date-home">
                                       24th March 2022
                                    </div>
                                    <h4><a href="blog-details.php">Dras accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.php">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.php"><img loading="lazy" src="img/blog/inner_b3.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content2">                                    
                                    <div class="date-home">
                                        24th March 2022
                                    </div>
                                    <h4><a href="blog-details.php">Seas accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.php">Read More</a></div>
                                </div>
                            </div>
                        </div>
                
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
            

<?php
page_footer();	
?>
