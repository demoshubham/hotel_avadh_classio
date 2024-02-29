<?php
include('settings.php');	
page_header();
	
?>

<style>
    .breadcrumb-area {
        position: relative;
        background-size: cover;
    }

    .overlay {
        position: absolute;
        top: 40px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6); /* Adjust the alpha value for darkness */
        z-index: 1;
    }

    /* Additional styling for existing content */
    .breadcrumb-wrap {
        position: relative;
        z-index: 2;
        color: white; /* Set text color to contrast with the dark overlay */
    }
</style>
       
        <!-- main-area -->
        <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="position: relative; background-image: url(img/gallery/g6.jpg); background-position: center; overflow: hidden;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2 style="text-shadow:2px 2px 2px black; color: white;">About</h2>    
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol style="text-shadow:2px 2px 2px black" class="breadcrumb">
                                            <li class="breadcrumb-item"><a  href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">About</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- breadcrumb-area-end -->
            <!-- about-area -->
            <section class="about-area about-p pt-50 pb-50 p-relative fix">
                <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/gallery/g19.jpg" alt="img" style="width:470px;height:590px;object-fit:cover;">   
                               <div class="about-icon">
                                     <img src="img/slider/about.jpg" alt="img">   
                                </div>
                            </div>
                          
                        </div>
                        
					    <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-left" >
                            <div class="about-content s-about-content  wow fadeInRight  animated pl-30" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                     <h5>About Us</h5>
                                    <h2 style="font-size:3rem;">Most Safe & Rated Hotel In AYODHYA.</h2>                            
                                </div>
                                   <p>Welcome to Hotel Avadh Classio in Ayodhya, where modern comfort meets traditional charm. Our hotel is a cozy retreat for all, whether you're here for pilgrimage, business, or leisure. Enjoy our comfy rooms, delicious dining, and friendly service. Experience the rich culture of Ayodhya, known for Lord Rama's legacy. We strive to make your stay special, ensuring a pleasant and memorable time in this sacred city. Hotel Avadh Classio welcomes you with open arms, promising a simple yet delightful stay in the heart of Ayodhya's cultural heritage.It is designed to give a overview of rich traditional Indian culture specifying our hospitality in just few words saying ´ <b>GUEST REPLICATES GOD</b> ´.</p>
                                    
                                    <div class="about-content3 mt-30">
                                    <div class="row justify-content-center align-items-center">
                                    <div class="col-md-12">
                                         <ul class="green mb-30">                                              
                                                    <li> Lift available.</li>
                                                    <li> Electricity backup 24 hour.</li>     
                                                    <li> Inhouse kitchen</li>
                                               </ul>
                                        </div>
                                   
                                    
                                         
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            
            <!-- skill-area -->
            <section id="skill" class="skill-area p-relative fix m-4" style="background:#291d16;border-radius:10px;padding:1rem;">
                 <div class="animations-01"><img src="img/bg/an-img-05.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
					   <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
                            <div class="skills-content s-about-content p-2">
                                <div class="skills-title pb-20">                                
                                <h2 style="font-size:3rem;">
                                 We Offer Wide Selection of Hotel
                                </h2>                             
                                </div>
                                <p>Staying at our property will be a wonderful experience as the Facilities here have been designed lavishly to address all requirements of our guests.</p>
                                 <div class="skills-content s-about-content mt-20">
                                <div class="skills">
                                    <div class="skill mb-30">
                                      <div class="skill-name">Quality</div>
                                      <div class="skill-bar">
                                        <div class="skill-per" id="95"></div>
                                      </div>
                                    </div>
                                     <div class="skill mb-30">
                                      <div class="skill-name">Services</div>
                                      <div class="skill-bar">
                                        <div class="skill-per" id="95"></div>
                                      </div>
                                    </div>
                                      <div class="skill mb-30">
                                      <div class="skill-name">Ambience</div>
                                      <div class="skill-bar">
                                        <div class="skill-per" id="95"></div>
                                      </div>
                                    </div>

                                </div>


                                
                            </div>
                            </div>
                        </div>

                            <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-left">
                                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/gallery/g1.jpg" class="d-block w-100" alt="Image 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/gallery/g2.jpg" class="d-block w-100" alt="Image 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/gallery/g5.jpg" class="d-block w-100" alt="Image 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/gallery/g6.jpg" class="d-block w-100" alt="Image 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/gallery/g8.jpg" class="d-block w-100" alt="Image 2">
                                        </div>
                                        <!-- Add more carousel items as needed -->
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- skill-area-end -->
            <!-- feature-area 
            <section class="feature-area2 p-relative fix" style="background: #f7f5f1;">
                 <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                           <div class="feature-img">                               
                                  <img src="img/features/feature.png" alt="img" class="img">              
                                </div>
                        </div>
					   <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="feature-content s-about-content">
                                <div class="feature-title pb-20">                               
                                    <h5>Luxury Hotel & Resort</h5>
                                <h2>
                                 Pearl Of The Adriatic.
                                </h2>                             
                                </div>
                                <p>Vestibulum non ornare nunc. Maecenas a metus in est iaculis pretium. Aliquam ullamcorper nibh lacus, ac suscipit ipsum consequat porttitor.Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta ex, in imperdiet tortor feugiat at.</p>
                                <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget.</p>
                                <div class="slider-btn mt-15">                                          
                                                 <a href="about.html" class="btn ss-btn smoth-scroll">Discover More</a>				
                                            </div>
                                
                            </div>
                        </div>
                       
                     
                    </div>
                </div>
            </section>
            <!-- feature-area-end -->
             <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-50 p-relative fix" style="background-image: url(img/bg/testimonial-bg.png); background-size: cover;">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-12" >
                            <div class="section-title center-align mb-50 text-center" data-aos="fade-up">
                                <h5>Testimonial</h5>
                                <h2>What Our Clients Says</h2>
                                <p>Our Satisfaction People Say about Our Services </p>
                            </div>
                           
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <div class="single-testimonial" data-aos="fade-up" >
                                     <div class="testi-author">
                                        <img src="img/testimonial/t2.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Praveen Awasthi</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Lovely hotel with a wonderful restaurant. Very friendly staff. Hotel is full of great art. Just a charming place. We really enjoyed our stay in this hotel. We really liked the food in the restaurant, it was delicious.”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial" data-aos="fade-up">
                                     <div class="testi-author">
                                        <img src="img/testimonial/t3.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Sanchita Tiwari</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“Unlike some of the posts I’ve read in other places, I found the Hotel to be clean, inviting and downright classic! The staff was very friendly and consistently making sure I was comfortable. I will definitely stay there when I come back”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial" data-aos="fade-up">
                                     <div class="testi-author">
                                        <img src="img/testimonial/t4.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>VIKRAM GUPTA</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                    <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                    <p>“Walking distance to everything downtown. Beautiful rooms, great ambiance in the hotel dining room and bar. We didn’t eat so I can’t rate the food, although others looked like they were enjoying it! We will come again”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial" data-aos="fade-up">
                                     <div class="testi-author">
                                        <img src="img/testimonial/t1.png" alt="img" style="width:80px; height:80px;">
                                        <div class="ta-info">
                                            <h6>Vikas Sharma</h6>
                                            <span>Client</span>
                                        </div>
                                    </div>
                                   <div class="review-icon">
                                        <img src="img/testimonial/review-icon.png" alt="img">
                                     </div>
                                      <p>“I had a wonderful experience at the (HOTEL AVADH CLASSIO). Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues”.</p>
                                    
                                    <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end --> 
            
        </main>
        <!-- main-area-end -->
<?php
page_footer();	
?>

<!-- Add this script at the end of your HTML, before </body> -->
<script>
    $(document).ready(function(){
        // Initialize the carousel
        $('#carouselExample').carousel();

        // Set an interval for automatic sliding (e.g., every 3 seconds)
        setInterval(function() {
            $('#carouselExample').carousel('next');
        }, 3000);
    });
</script>