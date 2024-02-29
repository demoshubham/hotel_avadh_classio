<?php
include('settings.php');	
page_header();
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist Places</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
	
	<!--google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Great+Vibes&family=Oswald:wght@500&family=Pacifico&family=Young+Serif&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
	
	<!--font awesome cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	 <link href="assets/css/style.css" rel="stylesheet">
</head>

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
       

<body  style="background-color:;">
<section class="breadcrumb-area d-flex align-items-center" style="position: relative; background-image: url(img/gallery/g6.jpg); background-size: cover; overflow: hidden;background-position:center;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2 style="text-shadow:2px 2px 2px black; color: white;">Tourist Destination</h2>    
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol style="text-shadow:1px 1px 1px black" class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tourist Destination</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3   py-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3" style="border:2px solid #644222;border-radius:5px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Ayodhya Tours</h5>
                            <p>The countless temples, ghats and the beautiful structures built in the Nawabi era and even after that are notable in the city.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3" style="border:2px solid #644222;;border-radius:5px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>HOTEL AVADH CLASSIO now offers entertainment spaces, restaurants, well appointed 
                            accommodation and much more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3" style="border:2px solid #644222;border-radius:5px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>The top places near to Ayodhya are Shravasti which is 80 km from Ayodhya, Lucknow which is located 124 km from Ayodhya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3" style="border:2px solid #644222;border-radius:5px;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Event planning can be intense, especially for large-scale performance-driven events. With so many details to manage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3  py-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/naya.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div> -->
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Naya Ghat</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" style="height:34vh;" src="img/hanuman.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div> -->
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">hanuman ghadhi</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/kanak.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div> -->
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Kanak Bhavan</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/d1.jpg" alt="" style="object-fit: cover;">
                        <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div> -->
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Dasharath Mahal</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
	
	
	
	<div class="container-xxl py-5 destination">
        <div class="container">
           
            <div class="row g-3">
				<div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100"  style="object-fit:cover;" src="img/tulsi1.webp" alt="" style="object-fit:cover;"/>
                        
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Tulsi Udhyan</div>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" style="object-fit:cover; " src="img/dd1.webp" alt=""/>
                               
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Dogra Regiment</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" style="height:34vh;object-fit:cover;" src="img/mak.avif" alt=""/>

                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Makbara</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid " style="object-fit:cover; height:34vh; width:40vw;" src="img/c1.jpg" alt=""/>
                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Company Garden</div>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
	<div class="container-fluid  mb-2">
		<h2   class="text-center">Tourist Place</h2>
		<div class="row text-center  mt-3"   style="border: 2px solid #98c33a;">
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/XPMMsuG1kXeSBLQd8">Abhinandan Nath Temple</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/jMzhipAVcTW7vAkV8">Badi Murti</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/pD7RMJ51QMrVNmDd9">Hanuman Garhi</a>
			</div>
		</div>
		<div class="row  text-center"   >														
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/TXBkPc77CmBVCALg9">Bada Bhakt Maal</a>
			</div>
			<div class="col  mt-2 mb-2"> 
				<a style="color:#333!important;"href="https://maps.app.goo.gl/xkSDHabYcmJuKLdc7">Bahu Begum Ka Maqbara</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/X28tTj8vSr9fp3CC6">Hanuman Kila</a>
			</div>
		</div>
		<div class="row text-center" style="border: 2px solid #98c33a;">
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/9yqQVYGhx7QijLFTA">Asharphi bhawan </a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/ViTo5EaAgvzM84Pi9">Bhakta Maal Bhawan</a> 
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/dokpFfdUuX8eogb38">Hanumat Niwas</a>
			</div>
		</div>
		<div class="row text-center" >
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/zxVk4o9DvZMvd96E8">Darshrath Bhawan</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/dCaMoxMADkFLhDuu9">Charan Paduka</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"	href="https://maps.app.goo.gl/sZKGAseHD6XGXxgk8">Jalpa Mandir</a>
			</div>
		</div><div class="row  text-center"  style="border: 2px solid #98c33a;">
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/VhpfcsyNvvaPcBbk7">Hanumt Niwas </a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/r7MjfGDuegz6qLbz9">Char Dham Temple</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/KLXtifUVH88kcQAS7">Janaki Mahal</a>
			</div>
		</div>
		<div class="row text-center"   >
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/T9jhUhKAMDnUsjDt7">Shri Lakhshman Kila</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/qPrrxuW1FhHH6uhbA">Chitragupt Temple</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/NBiXFX8ZeKRVkqYz8">Kanak Bhawan</a>
			</div>
		</div>
		<div class="row text-center" style="border: 2px solid #98c33a;">
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/Hrct61uM3DT9M1iq8">Laxaman Kila</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/gNkps7SGNp2S4KAp9">Choti Devkali</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/E3HFHuitZS5F7h4E7">Karsewakpuram</a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/qA17PEubvcjnRNvG8"> Mani parvat</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/tdd6QPRDzg1Ceci76">Dant Dhavan Kund</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/RNKekVc8kULqmbqa9">Tiwari Temple</a>
			</div>
		</div>
		<div class="row text-center"  style="border: 2px solid #98c33a;">
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/1gLoMCpab1vWmd3T7">Girija Kund</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/odrLF58hcyqshmUL7">Dashrath Mahal</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/4Qjjwx9QfP672FEe7"> Ram ki pairi</a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/Z6wPLoMqJC25Ws3a8">Koshlesh Sadan</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/2byJmPnYBwaQgGJm6">Divya Kala Kunj</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/a2pXQ2JjKNX3QLgv8">Ranopali Park</a>
			</div>
		</div>
		<div class="row text-center"   style="border: 2px solid #98c33a;">
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/2d671UNuwNwhnyH19">Tediyatishwar mahadev mandir</a>
			</div>
			<div class="col  mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/7tY6xDyVNUZubet96">Divya Shish Mahal</a>
			</div>
			<div class="col mt-2 mb-2">
				<a style="color:#333!important;"href="https://maps.app.goo.gl/KKFX3g7UGy6daHAQ9">Shri Rasikeshwar Mahadev</a>
			</div>
			
		</div>
		<div class="d-flex justify-content-center"><button  style="background-color:#644222; border-radius:10px ;" class="btn  mt-4"><a   style="color:white!important; "href="index.php">Back to Home</a></button></div>

    <!-- Package End -->
																	
   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<?php
page_footer();	
?>