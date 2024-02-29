<html lang="en">

<head>
  <meta Content-Type: text/html; charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- CSS links-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- fancybox -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
  <!-- magnific-popup -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: "Open Sans", sans-serif;
  color: #fff;
  background-color: #000000;
  z-index: 0;
}
p {
  color: #fff;
}
/* -----------------------------------
      Gallery Section
--------------------------------------*/
.portfolioz-sectionz {
  padding: 50px 0;
  background-color: #000;
}
.portfolioz-sectionz h2 {
  font-size: 28px;
  font-weight: 600;
  color: #fff;
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
  width: 80%;
  height: 80%;
  border-top: 1px solid #50977f;
  border-right: 1px solid #50977f;
  transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
}
.portfolioz-itemz:hover .portfolioz-overlayz::after {
  width: 80%;
  height: 80%;
  border-bottom: 1px solid #50977f;
  border-left: 1px solid #50977f;
  transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
}
.portfolioz-itemz li:hover .portfolioz-overlayz {
  visibility: visible;
  transform: scale(1);
}
.portfolioz-overlayz .category {
  margin-top: 70px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #fff;
  font-weight: 500;
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

/*******Responsive media query******/

/* Extra small devices (portrait phones, less than 576px)*/

  </style>
</head>

<body>
  <section class="portfolioz-sectionz" id="portfolio">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Project Gallery</h2>
          <p>Use all the same size pictures :)</p>
        </div>
      </div>
      <div class="portfolioz-menuz mt-2 mb-4">
        <nav class="controlzs">
          <button type="button" class="controlz outline" data-filter="all">All</button>
          <button type="button" class="controlz outline" data-filter=".web">Web Design</button>
          <button type="button" class="controlz outline" data-filter=".dev">Development</button>
          <button type="button" class="controlz outline" data-filter=".wp">WordPress</button>
        </nav>
      </div>
        <ul class="row portfolioz-itemz">
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <div class="portfolio-item-content">
                    <h3>Project Name</h3>
                    <ul>
                        <li>Bullet point 1</li>
                        <li>Bullet point 2</li>
                        <!-- Add more bullet points as needed -->
                    </ul>
                </div>
                <div class="portfolioz-overlayz">
                    <div class="overlay-content">
                        <h3 class="category">Project Name</h3>
                        <p>Project Description goes here. Provide a brief overview of the project.</p>
                        <ul>
                            <li>Technology 1</li>
                            <li>Technology 2</li>
                            <!-- Add more technologies as needed -->
                        </ul>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="image-source.jpg" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>

            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <div class="portfolio-item-content">
                    <h3>Project Name</h3>
                    <ul>
                        <li>Bullet point 1</li>
                        <li>Bullet point 2</li>
                        <!-- Add more bullet points as needed -->
                    </ul>
                </div>
                <div class="portfolioz-overlayz">
                    <div class="overlay-content">
                        <h3 class="category">Project Name</h3>
                        <p>Project Description goes here. Provide a brief overview of the project.</p>
                        <ul>
                            <li>Technology 1</li>
                            <li>Technology 2</li>
                            <!-- Add more technologies as needed -->
                        </ul>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="image-source.jpg" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>

            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <div class="portfolio-item-content">
                    <h3>Project Name</h3>
                    <ul>
                        <li>Bullet point 1</li>
                        <li>Bullet point 2</li>
                        <!-- Add more bullet points as needed -->
                    </ul>
                </div>
                <div class="portfolioz-overlayz">
                    <div class="overlay-content">
                        <h3 class="category">Project Name</h3>
                        <p>Project Description goes here. Provide a brief overview of the project.</p>
                        <ul>
                            <li>Technology 1</li>
                            <li>Technology 2</li>
                            <!-- Add more technologies as needed -->
                        </ul>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="image-source.jpg" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>

            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <div class="portfolio-item-content">
                    <h3>Project Name</h3>
                    <ul>
                        <li>Bullet point 1</li>
                        <li>Bullet point 2</li>
                        <!-- Add more bullet points as needed -->
                    </ul>
                </div>
                <div class="portfolioz-overlayz">
                    <!-- ... existing overlay content ... -->
                </div>
            </li>
            <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                <div class="portfolio-item-content">
                    <h3>Project Name</h3>
                    <ul>
                        <li>Bullet point 1</li>
                        <li>Bullet point 2</li>
                        <!-- Add more bullet points as needed -->
                    </ul>
                </div>
                <div class="portfolioz-overlayz">
                    <div class="overlay-content">
                        <h3 class="category">Project Name</h3>
                        <p>Project Description goes here. Provide a brief overview of the project.</p>
                        <ul>
                            <li>Technology 1</li>
                            <li>Technology 2</li>
                            <!-- Add more technologies as needed -->
                        </ul>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in" href="image-source.jpg" data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>

            </li>
            <!-- Repeat the structure for other portfolio items -->
        </ul>
      <!-- <ul class="row portfolioz-itemz">
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolioz-overlayz">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul> -->
    </div>
  </section>

  <!-- JS Links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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