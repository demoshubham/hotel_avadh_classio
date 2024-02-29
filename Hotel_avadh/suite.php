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
                                    <h2 style="text-shadow:2px 2px 2px black; color: white;">Suite Room</h2>    
                                    <div class="breadcrumb-wrap">
                                        <nav aria-label="breadcrumb">
                                            <ol style="text-shadow:1px 1px 1px black" class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                                 <li class="breadcrumb-item active" aria-current="page">Suite Room Deatils</li>

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
			<!-- service-details-area -->
            <div class="about-area5 about-p p-relative">
                <div class="container pt-120 pb-40">
                    <div class="row" data-aos="fade-up">
                     <!-- #right side -->
                        <div class="col-sm-12 col-md-12 col-lg-4 order-2">
                           <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories" data-aos="fade-left">
                            <div class="widget-content">
                                <h2 class="widget-title">  Book A Room  </h2>
                                <!-- Services Category -->
                                  <!-- booking-area -->
                                <div class="booking">
                                     <div class="contact-bg"> 
                                        <form action="#" method="post" class="contact-form mt-30">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-field p-relative c-name mb-20">                                    
                                                   <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                             <input type="date" id="chackin" name="date">
                                                </div>                               
                                            </div>

                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-20">                                   
                                                   <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                             <input type="date" id="chackout" name="date">
                                                </div>
                                            </div>		
                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-20">                                   
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
                                            </div>	
                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-option mb-20">                                   
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
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="slider-btn mt-15">                                          
                                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Book Room Now</span></button>				
                                                        </div>                             
                                            </div>
                                            </div>
                                    </form>                            
                                    </div>  
                                </div>
                                <!-- booking-area-end -->	
                            </div>
                        </div>
                        <!--Service Contact-->
                        <div class="service-detail-contact wow fadeup-animation" data-wow-delay="1.1s">
                            <h3 class="h3-title">If You Need Any Help Contact With Us</h3>
                            <a href="javascript:void(0);" title="Call now">+91 8189001900</a>
                        </div>

                    </aside>
                        </div>

                        
					<div class="col-lg-8 col-md-12 col-sm-12 order-1">
                           <div class="service-detail">
                      
                          <!-- Two Column -->
                            <div class="two-column" data-aos="fade-right">
                                <div class="row">
                                
                                     <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="img/sr1.jpg" alt="" style="height:490px;object-fit:cover;object-position:right;"></figure>
                                    </div>
                                    <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="img/sr2.jpg" alt="" style="height:230px;"></figure>
                                         <figure class="image"><img src="img/sr3.jpg" alt="" style="height:230px;"></figure>
                                    </div>
                                    
                                   
                                </div>
                            </div>

                        <div class="content-box" data-aos="fade-up">
                            <div class="row align-items-center mb-50">
                                <div class="col-lg-6 col-md-6">
                                    <div class="price">
                                        <h2>Suite Room</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                </div>

                            </div>
                            
                          
                            
                            <p>Step into unparalleled comfort in our exclusive suites. Designed for your utmost enjoyment, our suites offer personalized services, stunning views, and extra amenities. Every detail is crafted for your pleasure. Your stay is not just a visit; it's a cherished memory. Embrace simplicity and sophistication in our suite rooms, where hospitality is an art.</p>
                            <h3>Room Feature.</h3>
                            <ul class="room-features d-flex align-items-center">
                                <li>
                                <i class="fal fa-tv-retro"></i> 55 Inch LED TV
                                </li>
                                <li>
                                <i class="fal fa-wifi"></i> Free Wifi
                                </li>
                                <li>
                                <i class="fal fa-air-conditioner"></i> Air Condition
                                </li>
                                <li>
                               <i class="fal fa-phone-rotary"></i> Doctor On Call
                                </li>
                                <li>
                                <i class="fal fa-user"></i> Adults: 2
                                 <li>
                                    <i class="fal fa-bed"></i> Bed Type: One King Size Bed
                                </li>
								<li>
                                    <img style="width:25px;" src="img/icon/water-bottle.png">Mineral Water Bottle
                                </li>
                                <li>
                                    <img style="width:25px;" src="img/icon/water-bottle.png">Mini Bar
                                </li>
								
								<li>
                                    <img style="width:25px;" src="img/icon/coffee-machine.png">&nbsp;Coffee Maker
                                </li>
								<li>
                                    <img style="width:25px;" src="img/icon/delivery.png">&nbsp;Service 24 Hrs
                                </li>
                                 
                                </ul>
                              <h3>Facilities</h3>
                                <style>
                                    li{
                                        list-style-type: circle;
                                    }
                                </style>
                                <ul>
                                    <li>
                                        <p>Check-in 12.00 Noon, Early arrival is subject to availability. For guaranteed early check-in, reservation needs to be made starting from the previous night</p>
                                    </li>
                                    <li>
                                        <p>Branded Toiletries, Complimentary breakfast Only CP AND MAP, Hair Dryers, Locker,Fruit Basket. </p>
                                    </li>
                                    <li>
                                        <p>Check-out- 11.00 AM. Late check outs are available on request and subject to availability.</p>
                                    </li>
                                    <li>
                                        <p>A recent Government notification requires guests to present proof of identity at the time of Check-in. Guests are requested to carry the required document during the travel.</p>
                                    </li>
                                    <li>
                                        <p>Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for ₹1500 per day.</p>

                                    </li>
                                    <li>
                                        <p>There is a maximum no. of Children allowed per room is 2 .</p>
                                    </li>
                                    <li>
                                        <p>Pets are not allowed</p>

                                    </li>
                                </ul>
                            <!-- <div class="mb-50">
                                 <a href="contact.html" class="btn ss-btn">Book This Room</a>
                            </div>
                             -->
    
                        </div>
                    </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- service-details-area-end -->
            
        </main>
        <!-- main-area-end -->
<?php
page_footer();	
?>