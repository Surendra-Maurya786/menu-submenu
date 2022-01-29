<!DOCTYPE html>
<html lang="en"> 
  <head>
    <title>DKInc Global</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> 
	

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css"> 
	<link href="assets/vendors/ace-responsive-menu/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
	<link href="assets/vendors/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">	
	<!-- New css link -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="assets/vendors/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
	
  </head>  
  <body>
  <div class="hidden-xs hidden-sm nav-top bg-primary py-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="nav-top-contact">
                <!-- Social links -->
                <ul class="list-inline text-center text-md-left mb-0">
                  <li class="list-inline-item mx-2" ><i class="fa fa-phone"></i>  +1 (518) 330 4187 </li>
                  <li class="list-inline-item mx-2" ><i class="fa fa-envelope mr-2" aria-hidden="true"></i>omnaidu@dharmakarma.com</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 text-right">
                 <ul class="list-inline text-center text-md-right mb-0">
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
					<a target="_blank" href="https://www.facebook.com/webthemez">
					  <i class="fab fa-facebook"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
					<a target="_blank" href="https://www.instagram.com">
					  <i class="fab fa-instagram"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
					<a target="_blank" href="https://twitter.com/webthemez">
					  <i class="fab fa-twitter"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
					<a target="_blank" href="https://dribbble.com">
					  <i class="fab fa-dribbble"></i>
					</a>
				  </li>
				</ul>
            </div>
          </div>
        </div>
      </div>
    <!-- Header -->
    <header class="main-header"> 
	<div class="container">
			<div class="logo">
					<a href="/">
						 <h2><span>DKInc</span>Global</h2>
					  </a>
				</div> 
			 <!-- Navbar --> 
				<nav class="mainNav">
				<!-- Menu Toggle btn-->
				<div class="menu-toggle">
					<h3>Menu</h3>
					<button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Responsive Menu Structure-->
				<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				{{-- <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
					 <li>
						<a href="/" class="active"> 
							<span class="title">Home</span>
						</a>
					</li>
					 <li>
						<a href="/about"> 
							<span class="title" style="text-transform: none;">About us</span>
						</a>
					</li>
					 <li>
						<a href="/services"> 
							<span class="title">Services</span>
						</a>
					</li>			
					
					<li>
						<a href="javascript:;"> 
							<span class="title">Blog</span> 
							<span class="arrow"></span> </a>
						<!-- Level Two-->
						<ul class="sub-menu" style="display: none;">
							<li>
								<a href="/blog">Blog</a>
							</li>
							<li>
								<a href="/blog-single-post">Blog Single</a>
							</li> 
						</ul>
					</li> 

                    <li>
						<a href="javascript:;"> 
							<span class="title">Regions</span> 
							<span class="arrow"></span> </a>
						<!-- Level Two-->
						<ul class="sub-menu" style="display: none;">
							<li>
								<a href="#"> 
									<span class="title">Americas</span>
								</a>
							</li>
							<li>
								<a href="#"> 
									<span class="title">Asia</span>
								</a>
							</li> 
							<li>
								<a href="#"> 
									<span class="title">Europe</span>
								</a>
							</li> 
							<li>
								<a href="#"> 
									<span class="title">Africa</span>
								</a>
							</li> 
						</ul>
					</li> 



					<li class="last ">
						<a href="/contact"> 
							<span class="title">Contact Us</span>
						</a>
					</li>
					<li class="last ">
						<a href="/login"> 
							<span class="title">Login</span>
						</a>
					</li>
				</ul> --}}

				{!! getTopNavCat() !!}
				</nav>   
				</div>
    </header>