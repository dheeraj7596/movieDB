<!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$id = ($this->session->userdata['logged_in']['id']);
$class = ($this->session->userdata['logged_in']['class']);
// $email = ($this->session->userdata['logged_in']['email']);
} else {
$username = 'garbageName';
$id = '1';
// header("location: login");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | FILMY</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +91 7754915997</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> preetg@iitk.ac.in</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/preetansh.goyal"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/Preetanshgoyal"><i class="fa fa-twitter"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">

						<div class="logo pull-left">
              <ul class="nav navbar-nav">
                <div class='item'>
            	<!-- <a href="index.html"><img src="<?php echo base_url();?>assets/images/home/logo.png" alt="" /></a> -->
              <li><a href="<?php echo base_url();?>index.php/home/index" class="active"><i class="fa fa-film fa-4x" ></i></a></li>
              <!-- <li><h3><span>F</span>ILMY</h3></li> -->
              </ul>
            </div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									country
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" >
									<li><a >India</a></li>
									<!-- <li><a href="#">UK</a></li> -->
								</ul>
							</div>

							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><i class="fa fa-user"></i> <?php echo "Hi, ".$username ?>  </li>
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
								<li><i class="fa fa-lock"> <a href="<?php echo base_url();?>index.php/home/logout"><?php echo "Logout" ?></a></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url();?>index.php/home/index" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Genre<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url();?>index.php/home/genre/Romance">Romance</a></li>
										<li><a href="<?php echo base_url();?>index.php/home/genre/Thriller">Thriller</a></li>
										<li><a href="<?php echo base_url();?>index.php/home/genre/Drama">Drama</a></li>
										<li><a href="<?php echo base_url();?>index.php/home/genre/Horror">Horror</a></li>
										<!-- <li><a href="login.html">Login</a></li> -->
                                    </ul>
                                </li>
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->

                                  <!-- Only users with admin access can add a person -->
                <?php if ($class < 3):?>
								          <li><a href="<?php echo base_url();?>index.php/home/add_new_person">Add Person</a></li>
                <?php endif ?>
                <!-- Only users with other access can change movies etc. -->
                <?php if ($class < 3):?>
								        <li><a href="<?php echo base_url();?>index.php/home/new_movie">Add Movie</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/add_work">Add Work</a></li>
                <?php endif ?>
                <!-- Only users with admin access can add a person -->
                <?php if ($class < 2):?>
                          <li><a href="<?php echo base_url();?>index.php/home/all_users">Users</a></li>
                <?php endif ?>

								<!-- <li><a href="<?php echo base_url();?>index.php/home/new_movie">Add Movie</a></li> -->
								<li><a href="<?php echo base_url().'index.php/home/your_review/'.$id;?>">My Reviews</a></li>
								<li><a href="<?php echo base_url().'index.php/home/your_watchlist/'.$id;?>">My Watchlist</a></li>
                <!-- <li><a href="<?php echo base_url();?>index.php/home/add_work">Add Work</a></li> -->
								<!-- <li><a href="<?php echo base_url();?>index.php/home/your_review">Your Reviews</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<!-- <div class="search_box pull-right">
							<input type="text" placeholder="Search Movie"/>
						</div> -->
						<form class="navbar-form" role="search" method="post"
                            action="<?php echo base_url().'index.php/home/movie_info_name';?>" >
                                <div class="input-group add-on">
                                  <input class="form-control" placeholder="Search Movie" name="search-term" id="search-term" type="text">

                                    <button class="btn btn-small" type="submit"><i class="glyphicon glyphicon-search"></i></button>

                               </div>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<!-- <li data-target="#slider-carousel" data-slide-to="2"></li> -->
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>F</span>ILMY</h1>
									<h2>Your cinema social network</h2>
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/movie/popeye.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="<?php echo base_url();?>assets/images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                  <h1><span>F</span>ILMY</h1>
									<h2>Your cinema social network</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/movie/popeye.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="<?php echo base_url();?>assets/images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
                  <h1><span>F</span>ILMY</h1>
									<h2>Your cinema social network</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/movie/thedarkknightrises.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="<?php echo base_url();?>assets/images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">


				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Movies</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url();?>assets/images/movie/lifeofpi.jpg" alt="" />
											<h2>Life of Pi</h2>
											<!-- <p>Easy Polo Black Edition</p> -->
											<a href="<?php echo base_url();?>index.php/home/show_movie/2" class="btn btn-default add-to-cart">See</a>
											<a href="<?php echo base_url();?>index.php/home/show_movie/2" class="btn btn-default add-to-cart">Watch trailer</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
                        <h2>Life of Pi</h2>
  											<!-- <p>Easy Polo Black Edition</p> -->
  											<a href="<?php echo base_url();?>index.php/home/show_movie/2" class="btn btn-default add-to-cart">See</a>
  											<a href="https://www.youtube.com/watch?v=j9Hjrs6WQ8M" class="btn btn-default add-to-cart">Watch trailer</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li> -->
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/movie/ambeauty.jpg" alt="" />
                    <h2>American Beauty</h2>
                    <!-- <p>Easy Polo Black Edition</p> -->
                    <a href="<?php echo base_url();?>index.php/home/show_movie/5" class="btn btn-default add-to-cart">See</a>
                    <a href="<?php echo base_url();?>index.php/home/show_movie/2" class="btn btn-default add-to-cart">Watch trailer</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
                      <h2>American Beauty</h2>
                      <!-- <p>Easy Polo Black Edition</p> -->
                      <a href="<?php echo base_url();?>index.php/home/show_movie/5" class="btn btn-default add-to-cart">See</a>
                      <a href="https://www.youtube.com/watch?v=FfWnZthD9Tw" class="btn btn-default add-to-cart">Watch trailer</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li> -->
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/movie/amhustle.jpg" alt="" />
                    <h2>American Hustle</h2>
                    <!-- <p>Easy Polo Black Edition</p> -->
                    <a href="<?php echo base_url();?>index.php/home/show_movie/6" class="btn btn-default add-to-cart">See</a>
                    <a href="<?php echo base_url();?>index.php/home/show_movie/2" class="btn btn-default add-to-cart">Watch trailer</a>

									</div>
									<div class="product-overlay">
										<div class="overlay-content">
                      <h2>American Hustle</h2>
											<!-- <p>Easy Polo Black Edition</p> -->
											<a href="<?php echo base_url();?>index.php/home/show_movie/6" class="btn btn-default add-to-cart">See</a>
											<a href="https://www.youtube.com/watch?v=ST7a1aK_lG0" class="btn btn-default add-to-cart">Watch trailer</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li> -->
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>



					</div><!--features_items-->

					<div class="category-tab"><!--category-tab-->
						<!-- <div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div> -->
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>




    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
