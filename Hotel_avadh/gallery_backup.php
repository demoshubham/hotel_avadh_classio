<?php
include('settings.php');	
page_header();
	
?>
<style>
    /* Add some space between grid items */
.grid-item {
    margin: 10px; /* Adjust the value to control the gap between images */
}

/* Add some space at the edges of the gallery */
.masonry-gallery-huge {
    padding: 20px; /* Adjust the value to control the gap at the edges */
}
</style>
        
        <!-- main-area -->
        <main>
            
         <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2 style="text-shadow:2px 2px 2px black">Gallery</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol style="text-shadow:1px 1px 1px black" class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallery </li>
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
            <section class="profile fix pt-120">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                             <div class="my-masonry text-center mb-50">
                                <div class="button-group filter-button-group ">
                                    <button class="active" data-filter="*">All</button>
                                     <button data-filter=".exective">Exective Room</button>
                                    <button data-filter=".suite">Suite Room</button>	
                                    <button data-filter=".superior">Superior Room</button>
                                    <button data-filter=".reception">LOBBY FOOD COURT</button>
                                    <!--<button data-filter=".business">Event Hall</button>-->
                                </div>
                            </div>
                        </div>
                        <style>
                            .grid{
                                display: grid!important;
                                grid-gap: 10px!important;
                                grid-auto-flow: column!important;
                                grid-template-columns: 186px 186px 186px 186px!important;
                            }
                        </style>
                        <div class="col-lg-12">
                            <div class="masonry-gallery-huge">
                                <div class="grid col2 " >
                                    <div class="grid-item suite">
                                          <a class="popup-image" href="img/sr1.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/sr1.jpg" alt="img" class="img"> 
                                                </figure>
                                            </a>
                                    </div>
                                     <div class="grid-item superior">
                                       <a class="popup-image" href="img/sur1.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/sur1.jpg" alt="img" class="img">     
                                                </figure>
                                            </a>

                                    </div>
                                    <div class="grid-item exective">   
                                        <a class="popup-image" href="img/er1.jpg">
                                            <figure class="gallery-image">
                                              <img src="img/er1.jpg" alt="img" class="img">   
                                            </figure>
                                        </a>

                                    </div>
                                        <div class="grid-item reception">    
                                            <a class="popup-image" href="img/re.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/re.jpg" alt="img" class="img">    
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="grid-item exective">
                                     <a class="popup-image" href="img/r3.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/r3.jpg" alt="img" class="img">
                                                </figure>
                                            </a>

                                    </div>
                                    <div class="grid-item exective">   
                                        <a class="popup-image" href="img/er2.jpg">
                                            <figure class="gallery-image">
                                              <img src="img/er2.jpg" alt="img" class="img">   
                                            </figure>
                                        </a>

                                    </div>
                                    <div class="grid-item suite">
                                          <a class="popup-image" href="img/sr2.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/sr2.jpg" alt="img" class="img"> 
                                                </figure>
                                            </a>


                                    </div>
                                     <div class="grid-item superior">
                                       <a class="popup-image" href="img/sur2.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/sur2.jpg" alt="img" class="img">     
                                                </figure>
                                            </a>

                                    </div>
                                    
                                        <div class="grid-item reception">    
                                            <a class="popup-image" href="img/re2.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/re2.jpg" alt="img" class="img">    
                                                </figure>
                                            </a>
                                    </div>
                                    <div class="grid-item reception">
                                     <a class="popup-image" href="img/re3.jpg">
                                                <figure class="gallery-image">
                                                  <img src="img/re3.jpg" alt="img" class="img">
                                                </figure>
                                            </a>

                                    </div>
                                </div>
                         </div>
                        
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