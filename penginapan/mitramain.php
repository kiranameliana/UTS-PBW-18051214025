<?php
session_start();
include "oop/config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Holiyeay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Holiyeay<span>Hotel E-commerce</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="oop/view_penginapan.php" class="nav-link">Manage My Property</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<a href="hhttps://www.youtube.com/watch?v=oZgj9cEtJTo" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          		<span class="ion-ios-play"></span>
            </a>
            <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hello, Help Them Find Your Amazing Place!</h1>
          </div>
        </div>
      </div>
    </div>

    

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
          	<h2 class="mb-4">It's time to start your adventure</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
          </div>
          <div class="col-md-6">
          	<div class="row">
          		<div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-paragliding"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Activities</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-route"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Travel Arrangements</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>    
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-tour-guide"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Private Guide</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-map"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Location Manager</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
          	</div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-1.jpg);">
        				<div class="text">
        					<h3>Singapore</h3>
        					<span>8 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-2.jpg);">
        				<div class="text">
        					<h3>Canada</h3>
        					<span>2 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-3.jpg);">
        				<div class="text">
        					<h3>Thailand</h3>
        					<span>5 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-4.jpg);">
        				<div class="text">
        					<h3>Autralia</h3>
        					<span>5 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Tour Destination</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-1.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">8 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-2.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">10 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-3.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">7 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>

        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-4.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">8 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-5.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">10 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="#" class="img" style="background-image: url(images/destination-6.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">$300/person</span>
        				<span class="days">7 Days Tour</span>
        				<h3><a href="#">Bali, Indonesia</a></h3>
        				<p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Tourist Feedback</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recent Post</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-4 topp">
              		<div class="one">
              			<span class="day">21</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-4 topp">
              		<div class="one">
              			<span class="day">21</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-4 topp">
              		<div class="one">
              			<span class="day">21</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vacation</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Infromation</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Experience</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Adventure</a></li>
                <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                <li><a href="#" class="py-2 d-block">Beach</a></li>
                <li><a href="#" class="py-2 d-block">Nature</a></li>
                <li><a href="#" class="py-2 d-block">Camping</a></li>
                <li><a href="#" class="py-2 d-block">Party</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>