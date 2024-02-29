<?php
include('settings.php');	
page_header();
	
?>
<link rel="stylesheet" href="css/lighthouse.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<style>
  #galleries {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

#galleries a {
    overflow:hidden;
    width:300px;
    height: 200px;
    object-fit: cover;
    text-decoration: none;
    color: #333;
    transition: transform 0.5s;
}

#galleries a:hover {
    transform: scale(1.05);
}

#galleries img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}
    .breadcrumb-area {
        position: relative;
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
                                <h2 style="text-shadow:2px 2px 2px black; color: white;">Gallery</h2>    
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol style="text-shadow:1px 1px 1px black" class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
            
         <!-- gallery-area -->
            <section class="profile fix pt-40">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                             <div class="my-masonry text-center" data-aos="fade-up">
                                <div class="button-group filter-button-group ">
                                    <h3>Gallery</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-light py-4" id="galleries">
                            <a href="img/gallery/g1.jpg">
                                <img src="img/gallery/g1.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g2.jpg">
                                <img src="img/gallery/g2.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g3.jpg">
                                <img src="img/gallery/g3.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g4.jpg">
                                <img src="img/gallery/g4.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g5.jpg">
                                <img src="img/gallery/g5.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g6.jpg">
                                <img src="img/gallery/g6.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g7.jpg">
                                <img src="img/gallery/g7.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g8.jpg">
                                <img src="img/gallery/g8.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g9.jpg">
                                <img src="img/gallery/g9.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g10.jpg">
                                <img src="img/gallery/g10.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g11.jpg">
                                <img src="img/gallery/g11.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g12.jpg">
                                <img src="img/gallery/g12.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g13.jpg">
                                <img src="img/gallery/g13.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g14.jpg">
                                <img src="img/gallery/g14.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g15.jpg">
                                <img src="img/gallery/g15.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g16.jpg">
                                <img src="img/gallery/g16.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g17.jpg">
                                <img src="img/gallery/g17.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g18.jpg">
                                <img src="img/gallery/g18.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/gallery/g19.jpg">
                                <img src="img/gallery/g19.jpg" alt="Hotel Avadh Classio">
                            </a>
                            
                            <a href="img/sr1.jpg">
                                <img src="img/sr1.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/sur1.jpg">
                                <img src="img/sur1.jpg" alt="Hotel Avadh Classio ">
                            </a>
                            <a href="img/er1.jpg">
                                <img src="img/er1.jpg" alt="Hotel Avadh Classio">
                            </a>
                            <a href="img/re.jpg">
                                <img src="img/re.jpg" alt=" Hotel Avadh Classio">
                            </a>
                            <a href="img/r3.jpg">
                                <img src="img/r3.jpg" alt=" Hotel Avadh Classio">
                            </a>
                            <a href="img/er2.jpg">
                                <img src="img/er2.jpg" alt=" Hotel Avadh Classio">
                            </a>
                            <a href="img/sr2.jpg">
                                <img src="img/sr2.jpg" alt=" Hotel Avadh Classio">
                            </a>
                            <a href="img/sur2.jpg">
                                <img src="img/sur2.jpg" alt=" Hotel Avadh Classio">
                            </a>
                            
       
        
                            <!-- Add more images here as needed -->
                        </div>

                    
                    </div>
					
                </div>
            </section>
             <!-- gallery-area-end -->
       
        </main>

        <!-- main-area-end -->
<?php
page_footer();	
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>

<script>
    lightGallery(document.getElementById('galleries'), {
    download: true,
    mode: 'lg-fade'
    });
</script>
<!-- <script src="js/lighthouse.js"></script> -->