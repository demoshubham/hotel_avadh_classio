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
            <section class="breadcrumb-area d-flex align-items-center" style="position: relative; background-image: url(img/gallery/g6.jpg); background-size: cover; overflow: hidden;background-position:center;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2 style="text-shadow:2px 2px 2px black; color: white;">Contact Us</h2>    
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol style="text-shadow:1px 1px 1px black" class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact 
                                            Details
                                            </li>
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
            <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
                <div class="container">
             
					<div class="row justify-content-center align-items-center">
						
                            <div class="col-lg-4 order-1" data-aos="fade-right">
                             
                            <div class="contact-info">
                                  <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-map"></i>
                                        </div>
                                        <h5>Address</h5>
                                        <!-- <p>S. R. Pictures Private Limited Mall Of Avadh Naharbagh, Ayodhya - 224001</p> -->
                                        <p>Hotel Avadh Classio, Mall Of Avadh Naharbagh, Ayodhya - 224001</p>
                                    </div>
                                     <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <h5>Contact Number</h5>
                                        <p>+91 8189001900</p>
                                    </div>
                                     <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <h5>Message Us</h5>
                                        <p> <a href="mailto:hotelavadhclassio@gmail.com">hotelavadhclassio@gmail.com</a></p>
                                    </div>
                                </div>							
                        </div>
                        <div class="col-lg-8 order-2" data-aos="fade-left">
                            <div class="contact-bg02">
                                <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                  Get In Touch
                                </h2>
                                </div>                               
                                <form action="#" method="post" class="contact-form mt-30">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>		
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>	
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">                                  
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                        </div>
                                        <div class="slider-btn">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span></button>				
                                        </div>                             
                                    </div>
                                    </div>
                            </form>                            
                            </div>    
                        
						</div>
						
					</div>
                    
						
                </div>
				
				
               
            </section>
			<div class="google-maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.754855094305!2d82.141751975488!3d26.78408317672413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a074b4ad87077%3A0xd104a24dde8b09e2!2sMall%20of%20Avadh!5e0!3m2!1sen!2sin!4v1707571766604!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div>&nbsp;</div>
            <!-- contact-area-end -->
<?php
page_footer();	
?>