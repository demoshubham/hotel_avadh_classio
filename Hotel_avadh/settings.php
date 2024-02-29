<?php

//error_reporting(E_ALL);
date_default_timezone_set('Asia/Calcutta');
//error_reporting(0);

function page_header(){
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HOTEL AVADH CLASSIO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <!-- fancybox -->
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>

        <!-- magnific-popup -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    </head>
    <body>
        <!-- header -->
        <header class="header-area header-three" style="">  
           <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">      
                        <div class="col-lg-10 col-md-10 d-none d-lg-block">
                             <div class="header-cta">
                               <ul>                                                                     
                                    <li>
                                       <i class="far fa-mobile"></i>
                                        <strong>+91 8189001900</strong>
                                    </li>
									<li>
                                       <i class="fa fa-envelope"></i>
                                        <span>hotelavadhclassio@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="col-lg-2 col-md-2 d-none d-lg-block text-right">
                             <div class="header-social">
                                <span>
                                    <!-- <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a> -->
                                    <a href="https://www.instagram.com/avadhclassio?igsh=MTNnNWo5dXU4bG9xOQ==" target="_blank" title="Instagram"><img src="img/instagram.png" alt="Instagram Icon" width="25px;"></a>               
                                    <!-- <a href="https://www.instagram.com/avadhclassio?igsh=MTNnNWo5dXU4bG9xOQ==" target="_blank" title="Instagram"><i class="fab fa-instagram "></i></a>                -->
                                    <!-- <a href="https://wa.me/918189001900?text=Hello!%20I'm%20interested%20in%20Hotel%20Avadh%20Classio%20for%20booking!!!" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a> -->
                                    <a href="https://wa.me/918189001900?text=Hello!%20I'm%20interested%20in%20Hotel%20Avadh%20Classio%20for%20booking!!!" target="_blank" title="Whatsapp"><img src="img/whatsapp.png" alt="Whatsapp Icon" width="25px"></a>
                                    
                                   </span>                    
                                   <!--  /social media icon redux -->                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4">
                                <div class="logo" style="">
                                    <!-- <a href="index.php"><img style="" src="img/logo/logo2.png"  alt="logo"></a> -->    
                                    <a href="index.php" class="lead" style='font-family: "Kaushan Script", cursive;font-size:2.2rem;'  >HOTEL AVADH CLASSIO</a>
                                </div>
                            </div>
                           <div class="col-xl-8 col-lg-8">
                              
                                <div class="main-menu text-center">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>  
											<li><a href="gallery.php">Gallery</a></li>
                                            <li class="has-sub">
                                                <a href="#">Our rooms</a>
												<ul>													
													<li> <a href="exective.php">Executive Room</a></li>
                                                    
													<li> <a href="superior.php">Superior Room</a></li>
                                                    <li> <a href="suite.php">Suite Room</a></li>
												</ul>
                                                
                                            </li>     
                                          <!--  <li class="has-sub">
                                                <a href="service.php">Services</a>
                                                <ul>													
													<li> <a href="cafetaria.php">Cafetaria</a></li>
                                                    <li> <a href="banquet.php">Banquet Hall</a></li>
												</ul>
                                            </li>    -->                                        
                                            <li><a href="contact.php">Contact</a></li>    
                                            <li><a href="tourist.php" class="btn btn-sm" style="height:50px;padding-inline:0.6rem;border-radius:5px;">Tourist Destination</a></li>                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                 <!--<a href="contact.php" class="top-btn mt-10 mb-10">reservation </a>-->
                            </div>
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

<?php	
}

function page_footer(){
?>

<!-- brand-area -->
            <div class="brand-area pt-60 pb-60" style="background-color:#f7f5f1">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/b1.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b2.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <!-- <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b3.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="img/brand/b4.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div> -->
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b5.svg" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/b1.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b2.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <!-- <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b3.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="img/brand/b4.png" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div> -->
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="img/brand/b5.svg" alt="img" style="width:147px; height:48px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
        </main>
        <!-- main-area-end -->
         <!-- footer -->
        <footer class="footer-bg footer-p" data-aos="fade-up" >
         <div class="footer-top pt-4" style="background-color: #644222; background-image: url(img/bg/footer-bg.png);">
                <div class="container">
                    <div class="row justify-content-between">
                    <style>

                        .list {
                            display: flex;
                            align-items: center;
                        }
                        li{
                            /* list-style:none; */
                        }
                        .icon{

                        }
                    </style>
                          
                        <div class=" col-lg-3 col-sm-6" data-aos="fade-up">
                            <div class="footer-widget mb-30">
                                <!-- <div class="f-widget-title mb-30">
                                   <img src="img/logo/logo2.png" alt="img">
                                </div> -->
                                <div class="f-widget-title">
                                    <h2>Contacts</h2>
                                </div>
                                <div class="f-contact">
                                    <ul>
                                            <li class="list">
                                                <i class="icon fal fa-phone"></i>
                                                <span class="">+91 8189001900</span>
                                            </li>
                                            <li class="list">
                                                <i class="icon fal fa-envelope"></i>
                                                <span>
                                                        <a href="hotelavadhclassio@gmail.com">hotelavadhclassio@gmail.com</a>
                                                </span>
                                            </li>
                                            <li class="list">
                                                <i class="icon fal fa-map-marker-check"></i>
                                                <span style="width:80%">Hotel Avadh Classio, Mall Of Avadh Naharbagh, Ayodhya - 224001</span>
                                            </li>
                                            
                                        </ul>
                                    
                                    </div>
                            </div>
                        </div>
						<div class=" col-lg-3 col-sm-6" data-aos="fade-up">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Quick Links</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php"> About Us</a></li>
										 <li><a href="gallery.php">Gallery </a></li>
                                         <li><a href="contact.php"> Contact Us</a></li>                      
                                        <li><a href="tourist.php"> Tourist Destination</a></li>                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-sm-6" data-aos="fade-up" >
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Services</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <style>
                            #email2:focus{
                                border:1px solid #644222;
                            }
                        </style>
                        <div class=" col-lg-3 col-sm-6" data-aos="fade-up">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Subscribe To Our Newsletter</h2>
                                </div>
                                <div class="footer-link">
                                 <div class="subricbe p-relative" data-animation="fadeInDown" data-delay=".4s" >
                                            <form action="#" method="post" class="contact-form ">
                                             <input type="text" id="email2" name="email2"  class="header-input" placeholder="Your Email..." required>
                                            <button class="btn header-btn"> <i class="fas fa-location-arrow"></i> </button>
                                            </form>
                                        </div>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">                         
                           Copyright &copy; Weknow Technologies Pvt.Ltd . All rights reserved.         
                        </div>
                        <div class="col-lg-6 col-md-6 text-right text-xl-right">                       
                           <div class="footer-social">                                    
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>        
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
		<!-- JS here -->
        <script src="js/modernizr-3.5.0.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/js_isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/parallax-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/element-in-view.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/main.js"></script>

        <script>
            AOS.init();

            // You can also pass an optional settings object
            // below listed default settings
            AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 150, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
        </script>

        <!-- Mixitup -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
        <!-- fancybox -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
        <!-- Fancybox js -->
        <script>
            /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
            // 1. querySelector
            var containerEl = document.querySelector(".portfolioz-itemz");
            // 2. Passing the configuration object inline
            //https://www.kunkalabs.com/mixitup/docs/configuration-object/
            var mixer = mixitup(containerEl, {
            animation: {
                effects: "fade translateZ(-100px)",
                effectsIn: "fade translateY(-100%)",
                easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
            }
            });
            // fancybox insilaze & options //
            $("[data-fancybox]").fancybox({
            loop: true,
            hash: true,
            transitionEffect: "slide",
            /* zoom VS next////////////////////
            clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
            clickContent: function(current, event) {
                return current.type === "image" ? "next" : false;
            }
            });
        </script>
    </body>
</html>

<?php
}

?>