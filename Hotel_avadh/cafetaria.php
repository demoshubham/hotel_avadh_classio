<?php
include('settings.php');	
page_header();
	
?>
        
        <!-- main-area -->
        <main>
            
           <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/1.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2>Cafetaria</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cafetaria Details </li>
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
            
			<!-- shop-banner-area start -->
			
        <section class="shop-banner-area pt-120 pb-90 "  data-animation="fadeInUp animated" data-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" >
                        <div class="shop-thumb-tab mb-30" style="margin-right:250px;">
                            <ul class="nav" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                        aria-selected="true"><img src="img/cafe1.png" alt=""> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                        aria-selected="false"><img src="img/cafe2.png" alt=""></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-bs-toggle="tab" href="#profile1" role="tab"
                                        aria-selected="false"><img src="img/cafe3.png" alt=""></a>
                                </li>
								
                            </ul>
                        </div>
                        <div class="product-details-img mb-30"  >
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/cafe1.png"  alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/cafe2.png" alt="" >
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile1" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/cafe3.png" alt="" >
                                    </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-5">
                        <div class="product-details mb-30">
                            <div class="product-details-title">
                                <p>Workstead</p>
                                <h1>Helios Piranho Lamp</h1>
                                <div class="price details-price pb-30 mb-20">
                                    <span>$700.00</span>
                                    <span class="old-price">$820.00</span>
                                </div>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                when looking at its
                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to
                                using 'Content here, content here', making it look like readable English.</p>
                            <div class="product-cat mt-30 mb-30">
                                <span>Category: </span>
                                <a href="#">furniture,</a>
                                <a href="#">decor</a>
                            </div>                            
                            <div class="product-details-action">
                                <form action="#">
                                    <div class="plus-minus">
                                        <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                    </div>
                                    <button class="btn btn-black" type="submit">add to cart</button>                                   
                                </form>
                            </div>
							<div class="product-social mt-45">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- shop-banner-area end -->
        <!-- product-desc-area start -->
        <section class="product-desc-area pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bakix-details-tab">
                            <ul class="nav text-center justify-content-center pb-30 mb-50" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-bs-toggle="tab" href="#id-desc" role="tab">Description </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="id-r" data-bs-toggle="tab" href="#id-rev" role="tab">Reviews(10)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                                <div class="event-text mb-40">
                                    <p>We serve a range of espresso coffees made from the finest coffee beans. It’s the perfect place to relax on your own or to catch up with friends while enjoying great coffee and great food. We have everything from classic coffee to our house made specialty beverages..</p>
                                    <p>Also From casual to formal dining, guests can look forward to a wide selection of scrumptious dishes and refreshing drinks. At caveri we offer a distinctive dining experience one that explores the nuances of the finest Indian, South Indian and Chinese cuisines serving traditional and contemporary favorites.</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="id-rev" role="tabpanel" aria-labelledby="id-r">
                                <div class="additional-info">
                                    <div class="event-text mb-40">
                                        <p>“I had a wonderful experience at the (HOTEL AVADH CLASSIO). Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues” - Vikas Sharma</p>
                                        <p>“Walking distance to everything downtown. Beautiful rooms, great ambiance in the hotel dining room and bar. We didn’t eat so I can’t rate the food, although others looked like they were enjoying it! We will come again” - VIKRAM GUPTA</p>
										<p>“Unlike some of the posts I’ve read in other places, I found the Hotel to be clean, inviting and downright classic! The staff was very friendly and consistently making sure I was comfortable. I will definitely stay there when I come back” - Sanchita Tiwari</p>
										<p>“Lovely hotel with a wonderful restaurant. Very friendly staff. Hotel is full of great art. Just a charming place. We really enjoyed our stay in this hotel. We really liked the food in the restaurant, it was delicious.” - Praveen Awasthi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-desc-area end -->
        
        </main>
        <!-- main-area-end -->
<?php
page_footer();	
?>