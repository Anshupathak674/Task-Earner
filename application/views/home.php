<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?= $basic_info['company_name'] ?></title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/images/icons/favicon.ico">


	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Playfair+Display:900']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
	<div class="page-wrapper">

		<header class="header">
			<div class="header-top bg-primary text-uppercase">
				<div class="container">
					<div class="header-left">
						<div class="header dropdown-expanded mr-3">

							<?php if ($this->session->userdata('user_email')) { ?>

								<a href="<?php base_url() ?>logout">Logout</a>
							<?php } else { ?>
								<a href="#">Please Login First</a>
							<?php } ?>


						</div>
						<?php if ($this->session->userdata('user_email')) { ?>
							<p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">
								<a href="<?php base_url() ?>logout">
									Logout
								</a>
							</p>
						<?php } else { ?>
							<p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">Please Login First </p>
						<?php } ?>




					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto">
						<div class="header-dropdown dropdown-expanded mr-3">

							<div class="header-menu">
								<ul>
									<li><a href="<?= base_url() ?>index.php/about_us">About</a></li>

									<li><a href="<?= base_url() ?>index.php/contact_us">Contact</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
							<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle text-dark">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler mr-2" type="button">
							<i class="icon-menu"></i>
						</button>
						<div style="width: 105px;">
							<a href="<?= base_url() ?>index.php/home" class="logo">
								<img src="<?= base_url() ?>assets/images/download2.png" alt="Porto Logo">
							</a>
						</div>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max pl-2" style="margin: 2px;">
						<div class="header-search header-icon header-search-inline header-search-category w-lg-max mr-lg-4">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="<?= base_url() ?>index.php/view_products" method="GET">

								<div class="header-search-wrapper">
									<input autocomplete="off" type="text" class="via_form form-control" name="search" id="via_form" placeholder="Search..." required>

									<div class="col-md-5" style="position: absolute;top: 119%;z-index: 10;">
										<div class="list-group" id="show-list">

										</div>
									</div>

									<button id="via_form_submit" class="btn p-0 icon-search-3" type="submit"></button>
								</div><!-- End .header-search-wrapper -->

						</div><!-- End .header-search -->
						</form>
					</div><!-- End .header-search -->

					<div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-3 ml-xl-5">
						<i class="icon-phone-2"></i>
						<h6 class="pt-1 line-height-1">Call us now<a href="tel:<?= $basic_info['company_mobile'] ?>" class="d-block text-dark ls-10 pt-1">+91 <?= $basic_info['company_mobile'] ?></a></h6>
					</div><!-- End .header-contact -->

					<?php if ($this->session->userdata('user_email')) { ?>

						<a href="<?= base_url() ?>index.php/user_profile" class="header-icon"><i class="icon-user-2"></i></a>



					<?php } else { ?>
						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-user-2"></i>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>Not Loged In</span>

										<a href="<?php base_url() ?>user_signup" target="_blank" class="float-right">New User!</a>
									</div><!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<form id="user_login" style="width: auto; margin:0rem">
											<input name="user_email" type="text" class="form-control" placeholder="Enter Email Id">
											<input name="user_password" type="password" class="form-control" placeholder="Enter Password">

									</div> <!-- End .cart-product -->

									<div class="dropdown-cart-action">
										<button type="submit" style="margin: auto;" class="btn btn-primary">LOGIN</button>
										<a href="<?php base_url() ?>user_signup" target="_blank" class="float-right">New User!</a>
									</div>
									</form>

									<!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					<?php } ?>





					<script type="text/javascript">
						$(document).ready(function($) {
							$('#user_login').submit(function(event) {

								event.preventDefault();

								var formdata = new FormData(this);

								$.ajax({
										url: '<?= base_url(); ?>index.php/user_login_check',
										type: 'POST',
										data: formdata,
										processData: false,
										contentType: false
									})
									.done(function(response) {

										if (response == 1) {
											location.reload();
										} else {
											var x = document.getElementById('login_error');

											var html = "";
											x.innerHTML = "<div style='border-radius:12px; ' class='alert mt-2 bg-danger text-white'><h4 style='color: white;'>Invalid details</h4>";

											x.innerHTML += "</div>";
										}
									});

							});
						});
					</script>


<?php if ($this->session->userdata('user_email')) { ?>

<div class="dropdown cart-dropdown">
	<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">

		<?php
		$i = 0;
		$j = 0;
		foreach ($accepted_projects as $items) { ?>

			<?php if ($items->bid_status == 1) {
				$i++;
			}
			$j++;
			?>

		<?php } ?>
		<i class="icon-credit-card"></i>
		<span class="cart-count badge-circle"> <?php echo $i ?></span>
	</a>

	<div class="dropdown-menu">
		<div class="dropdownmenu-wrapper">
			<div class="dropdown-cart-header">
				<span>Active Projects</span>

				<a href="<?= base_url() ?>index.php/user_orders" class="float-right"><?php echo $i ?></a>
			</div><!-- End .dropdown-cart-header -->

			<div class="dropdown-cart-products">

				<?php foreach ($accepted_projects as $projects) {
					if ($projects->bid_status == 1) {
				?>

						<div class="product">
							<div class="product-details">
								<h4 class="product-title">
									<a href="<?= base_url() ?>index.php/user_orders"></a>
								</h4>



								<span class="cart-product-info">
									<span class="cart-product-qty"></span>
									₹<?= $projects->bid_price ?>
								</span>
								<br>
								<span class="cart-product-info">
									<span class="cart-product-qty"></span>
									Delivery In: <?= $projects->project_delivery ?>
								</span>
							</div><!-- End .product-details -->

							<figure class="product-image-container">
								<a href="<?= base_url() ?>index.php/user_orders" class="product-image">

									<div>

										<img class="img-fluid" src="<?= base_url() ?>admin_login/uploads/<?= $projects->front_image ?>" alt="product" style="object-fit: fill;">
									</div>

								</a>

							</figure>
						</div><!-- End .product -->
				<?php }
				} ?>


			</div><!-- End .cart-product -->

			<div class="dropdown-cart-total">
				<span>Total Bids</span>

				<span class="cart-total-price float-right"><?php echo $j ?></span>
			</div><!-- End .dropdown-cart-total -->

			<div class="dropdown-cart-action">
				<a href="<?= base_url() ?>index.php/user_orders" class="btn btn-dark btn-block">View Bids History</a>
			</div><!-- End .dropdown-cart-total -->
		</div><!-- End .dropdownmenu-wrapper -->
	</div><!-- End .dropdown-menu -->
</div><!-- End .dropdown -->
<?php } ?>

				</div><!-- End .header-right -->
			</div><!-- End .container -->
	</div><!-- End .header-middle -->
	</header><!-- End .header -->

	<main class="main">

		<div class="category-banner-container bg-gray">
			<div class="col-12 " id="login_error">
				<?php if ($msg = $this->session->flashdata('msg')) {
					if ($msg_class = $this->session->flashdata('msg_class')) {
				?>
						<div style="border-radius:12px; text-align:center; " class="alert mt-2 <?= $msg_class ?>">
							<h4 style="color: white;"> <?= $msg ?> </h4>
						</div>
				<?php         }
				}

				?>
			</div>
		</div>

		<div class="container mb-2">
			<div class="info-boxes-container row row-joined mb-2 font2">
				<div class="info-box info-box-icon-left col-lg-4">
					<i class="icon-shipping"></i>

					<div class="info-box-content">
						<h4>Post a job </h4>
						<p class="text-body">It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes.</p>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left col-lg-4">
					<i class="icon-user"></i>

					<div class="info-box-content">
						<h4>Choose freelancers</h4>
						<p class="text-body">Whatever your needs, there will be a freelancer to get it done:</p>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->

				<div class="info-box info-box-icon-left col-lg-4">
					<i class="icon-support"></i>

					<div class="info-box-content">
						<h4>ONLINE SUPPORT 24/7</h4>
						<p class="text-body">Call + Whatsapp for any querry.</p>
					</div><!-- End .info-box-content -->
				</div><!-- End .info-box -->
			</div>



			<?php
			if ($this->session->userdata('user_email')) { ?>
				<div style="text-align: center;">

					<a href="<?= base_url() ?>index.php/view_products" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">Browse Projects</button></a>
				</div>
			<?php	} else { ?>
				<div style="text-align: center;">

					<a href="<?= base_url() ?>index.php/user_login" class="" title="Log In"><button type="submit" class="btn btn-primary">Log In</button></a>
					&nbsp;
					&nbsp;
					<a href="<?= base_url() ?>index.php/user_signup" class=""><button type="submit" class="btn btn-danger">Sign Up</button></a>
				</div>
			<?php }

			?>



			<br>

			<div class="row">
				<div class="col-lg-9">
					<div class="home-slider owl-carousel owl-theme owl-carousel-lazy mb-2" data-owl-options="{
							'loop': false,
							'dots': true,
							'nav': false
						}">
						<div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner1'] ?>" alt="slider image">
							<!-- <div class="banner-layer banner-layer-middle">
								<h4 class="text-white pb-4 mb-0">Find the Boundaries. Push Through!</h4>
								<h2 class="text-white mb-0">Winter Sale</h2>
								<h3 class="text-white text-uppercase m-b-3">70% Off</h3>
								<h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">₹<em class="align-text-top">199</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=199" class="btn btn-dark btn-md ls-10">Shop Now!</a>
							</div>End .banner-layer -->
						</div><!-- End .home-slide -->

						<div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw">
							<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner2'] ?>" alt="slider image">
							<!-- <div class="banner-layer banner-layer-middle text-uppercase">
								<h4 class="m-b-2">Over 200 products with discounts</h4>
								<h2 class="m-b-3">Great Deals</h2>
								<h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>₹<em>299</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=299" class="btn btn-dark btn-md ls-10">Get Yours!</a>
							</div>End .banner-layer -->
						</div><!-- End .home-slide -->

						<div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw">
							<img class="owl-lazy slide-bg" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner3'] ?>"></img>
							<!-- <div class="banner-layer banner-layer-middle text-uppercase">
								<h4 class="m-b-2">Up to 70% off</h4>
								<h2 class="m-b-3">New Arrivals</h2>
								<h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>₹<em>599</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=599" class="btn btn-dark btn-md ls-10">Get Yours!</a>
							</div>End .banner-layer -->
						</div><!-- End .home-slide -->
					</div><!-- End .home-slider -->







					<div class="feature-boxes-container">
						<div class="row">
							<div class="col-md-4">
								<div class="feature-box px-sm-3 feature-box-simple text-center">
									<i class="icon-earphones-alt"></i>

									<div class="feature-box-content">
										<h3 class="m-b-1">Customer Support</h3>
										<h5 class="m-b-3">Need Assistance?</h5>

										<p>For support you can always connect with us through the contact us form.</p>
									</div><!-- End .feature-box-content -->
								</div><!-- End .feature-box -->
							</div><!-- End .col-md-4 -->

							<div class="col-md-4">
								<div class="feature-box px-sm-3 feature-box-simple text-center">
									<i class="icon-credit-card"></i>

									<div class="feature-box-content">
										<h3 class="m-b-1">Genuine Site</h3>
										<h5 class="m-b-3">Safe & Fast</h5>

										<p>This is genuine site to earn attractive income.</p>
									</div><!-- End .feature-box-content -->
								</div><!-- End .feature-box -->
							</div><!-- End .col-md-4 -->

							<div class="col-md-4">
								<div class="feature-box px-sm-3 feature-box-simple text-center">
									<i class="icon-action-undo"></i>

									<div class="feature-box-content">
										<h3 class="m-b-1">Bidding </h3>
										<h5 class="m-b-3">Easy & Free</h5>

										<p>Win exciting prizes through Bidding.</p>
									</div><!-- End .feature-box-content -->
								</div><!-- End .feature-box -->
							</div><!-- End .col-md-4 -->
						</div><!-- End .row -->
					</div><!-- End .feature-boxes-container -->



					<div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
							'dots': false,
							'margin': 20,
							'loop': false,
							'responsive': {
								'480': {
									'items': 2
								},
								'768': {
									'items': 3
								}
							}
						}">
						<div class="banner banner1 banner-hover-shadow mb-2">
							<figure>
								<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner1'] ?>" alt="banner">
							</figure>
							<!-- <div class="banner-layer banner-layer-middle">
								<h3 class="m-b-2">Gupta Watches</h3>
								<h4 class="m-b-4 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
								<a href="<?= base_url() ?>view_products?min_price=399" class="text-dark text-uppercase ls-10">Shop Now</a>
							</div> -->
						</div><!-- End .banner -->

						<div class="banner banner3 banner-hover-shadow mb-2">
							<figure>
								<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner2'] ?>" alt="banner">
							</figure>
							<!-- <div class="banner-layer banner-layer-middle text-right">
								<h3 class="m-b-2">All Types</h3>
								<h4 class="mb-3 pb-1 text-secondary text-uppercase">Starting at ₹299</h4>
								<a href="<?= base_url() ?>view_products?min_price=299" class="text-dark text-uppercase ls-10">Shop Now</a>
							</div> -->
						</div><!-- End .banner -->
						<div class="banner banner2 text-uppercase banner-hover-shadow mb-2">
							<figure>
								<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner3'] ?>" alt="banner">
							</figure>
							<!-- <div class="banner-layer banner-layer-middle text-center pt-2">
								<h3 class="m-b-1 ls-n-20">Deal Promos</h3>
								<h4 class="m-b-4 text-body">Starting at ₹199</h4>
								<a href="<?= base_url() ?>view_products?min_price=199" class="text-dark text-uppercase ls-10">Shop Now</a>
							</div> -->
						</div><!-- End .banner -->
					</div>


					<?php
					if ($this->session->userdata('user_email')) { ?>
						<div style="text-align: center;">

							<a href="<?= base_url() ?>index.php/view_products" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">Browse Projects</button></a>
						</div>
					<?php	} else { ?>
						<div style="text-align: center;">

							<a href="<?= base_url() ?>index.php/user_login" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">Log In</button></a>
							&nbsp;
							&nbsp;
							<a href="<?= base_url() ?>index.php/user_signup" class="" title="Add to Cart"><button type="submit" class="btn btn-danger">Sign Up</button></a>
						</div>
					<?php }

					?>
					<br>

					<div style="text-align: center;">

						<a href="<?= base_url() ?>admin_login"  class="" title="Add to Cart"><button type="submit" class="btn btn-danger">Hire a Freelancer</button></a>
					</div>

					<br>


					<!-- <h2 class="section-title ls-n-10 m-b-4">Start Freelancing</h2> -->

					<div class="products-slider owl-carousel owl-theme dots-top m-b-1 pb-1">

						<?php foreach ($fetch_feature_product as $get) { ?>
							<div class="product-default inner-quickview inner-icon">
								<figure>
									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
										<div class="" style=" height:17rem">

											<img class="" src="<?= base_url() ?>admin_login/uploads/<?= $get->front_image ?>" style=" height:100%">

										</div>
									</a>
									<div class="label-group">
										<div class="product-label label-hot">HOT</div>
									</div>


									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="btn-quickview"> View</a>
								</figure>
								<div class="product-details">
									<div class="category-wrap">
										<div class="category-list">
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="product-category"><?= $get->category_name ?>, &nbsp; <?= $get->sub_category_name ?></a>
										</div>

									</div>
									<h2 class="product-title">
										<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>"><?= $get->product_name ?></a>
									</h2>
									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
										<div class="ratings-container">
											<div class="product-ratings">
												<span class="ratings" style="width:100%"></span><!-- End .ratings -->
												<!-- <span class="tooltiptext tooltip-top"></span> -->
											</div><!-- End .product-ratings -->
										</div><!-- End .product-container -->
									</a>

									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">

										<div class="price-box">
											<span class="old-price">₹<?= $get->product_actual_price ?></span>
											<span class="product-price">₹<?= $get->product_offer_price ?></span>
										</div><!-- End .price-box -->
									</a>
								</div><!-- End .product-details -->
							</div>
						<?php } ?>



					</div><!-- End .featured-proucts -->

					<!-- <div class="brands-slider owl-carousel owl-theme images-center mb-3" data-owl-options="{
							'responsive': {
								'768': {
									'items': 5
								}
							}
						}">
						<img src="<?= base_url() ?>assets/images/brands/brand1.png" width="140" height="60" alt="brand">
						<img src="<?= base_url() ?>assets/images/brands/brand2.png" width="140" height="60" alt="brand">
						<img src="<?= base_url() ?>assets/images/brands/brand3.png" width="140" height="60" alt="brand">
						<img src="<?= base_url() ?>assets/images/brands/brand4.png" width="140" height="60" alt="brand">
						<img src="<?= base_url() ?>assets/images/brands/brand5.png" width="140" height="60" alt="brand">
						<img src="<?= base_url() ?>assets/images/brands/brand6.png" width="140" height="60" alt="brand">
					</div>End .brands-slider -->



					<!-- <hr class="mt-1 mb-4"> -->


				</div><!-- End .col-lg-9 -->

				<div class="sidebar-overlay"></div>
				<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
				<aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
					<div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
						<h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

						<nav class="side-nav">
							<ul class="menu menu-vertical sf-arrows">
								<li class="active"><a href="<?= base_url() ?>index.php/home"><i class="icon-home"></i>Home</a></li>
								<li>
									<a href="<?= base_url() ?>index.php/view_products" class="sf-with-ul"><i class="sicon-badge"></i>Categories</a>
									<div class="megamenu megamenu-fixed-width megamenu-3cols">
										<div class="row">
											<?php foreach ($fetch_category as $category) { ?>

												<div class="col-lg-4">
													<a href="<?= base_url() ?>index.php/view_products?category_id=<?php echo $category->category_id; ?>" class="nolink"><?php echo $category->category_name; ?></a>

													<ul class="submenu">
														<?php foreach ($fetch_sub_category as $sub_category) { ?>

															<?php if ($sub_category->category_id == $category->category_id) { ?>
																<li><a href="<?= base_url() ?>index.php/view_products?sub_category_id=<?php echo $sub_category->sub_category_id; ?>"><?php echo $sub_category->sub_category_name; ?></a></li>
															<?php } ?>
														<?php } ?>
													</ul>
												</div>
											<?php } ?>











											<div class="col-lg-4 p-0">
												<!-- <img src="assets/images/menu-banner.jpg" alt="Menu banner"> -->
											</div>
										</div>
									</div><!-- End .megamenu -->
								</li>

								<li><a href="<?= base_url() ?>index.php/user_orders"><i class="sicon-book-open"></i>Bids History</a></li>


								<li><a href="<?= base_url() ?>index.php/about_us"><i class="sicon-users"></i>About Us</a></li>
								<li><a href="<?= base_url() ?>index.php/contact_us"><i class="icon-cat-gift"></i>Contact Us</a></li>

							</ul>
						</nav>
					</div><!-- End .side-menu-container -->

					<div class="widget widget-banners px-5 pb-3 text-center">
						<div class="owl-carousel owl-theme">
							

						

							<div class="banner d-flex flex-column align-items-center">
								<h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">New</em>Tasks </h3>
								<!-- <h4 class="sale-text font1 text-uppercase m-b-3">Easy<sup>To</sup><sub>Earn</sub></h4> -->
								<p>Complete Tasks to Earn instantly.</p>
								<a href="<?= base_url() ?>index.php/view_products" class="btn btn-dark btn-md font1">View Tasks</a>
							</div><!-- End .banner -->
						</div><!-- End .banner-slider -->
					</div><!-- End .widget -->



					<div class="widget widget-testimonials">
						<div class="owl-carousel owl-theme dots-left">


							<?php foreach ($fetch_members as $members) { ?>

								<div class="testimonial">
									<div class="testimonial-owner">
										<figure>
											<img src="<?= base_url() ?>admin_login/uploads/<?= $members->member_pic ?>" alt="client">
										</figure>

										<div>
											<h4 class="testimonial-title"><?= $members->member_name ?></h4>
											<span><?= $members->member_position ?></span>
										</div>
									</div><!-- End .testimonial-owner -->

									<blockquote class="ml-4 pr-0">
										<p><?= $members->about_member ?></p>
									</blockquote>
								</div><!-- End .testimonial -->
							<?php } ?>


						</div><!-- End .testimonials-slider -->
					</div><!-- End .widget -->


				</aside><!-- End .col-lg-3 -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</main><!-- End .main -->

	<footer class="footer bg-dark">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title">About Us</h4>
							<div style="width: 105px;">
								<img src="<?= base_url() ?>assets/images/download2.png" alt="Logo" class="m-b-3">
							</div>
							<p class="m-b-4 pb-1"><?= $basic_info['company_about_us_footer'] ?></p>
							<a href="<?= base_url() ?>index.php/about_us" class="read-more text-white">read more...</a>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget mb-2">
							<h4 class="widget-title mb-1 pb-1">Contact Info</h4>
							<ul class="contact-info m-b-4">
								<li>
									<span class="contact-info-label">Address:</span><?= $basic_info['company_address'] ?>
								</li>
								<li>
									<span class="contact-info-label">Phone:</span><a href="tel:"><?= $basic_info['company_mobile'] ?></a>
								</li>
								<li>
									<span class="contact-info-label">Email:</span> <a href="mailto:<?= $basic_info['company_email'] ?>"><?= $basic_info['company_email'] ?></a>
								</li>
								<li>
									<span class="contact-info-label">Working Days/Hours:</span>
									<?= $basic_info['company_working_hour'] ?>
								</li>
							</ul>
							<div class="social-icons">
								<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
								<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank" title="Twitter"></a>
								<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
							</div><!-- End .social-icons -->
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title pb-1">Customer Service</h4>

							<ul class="links">
								<?php if ($this->session->userdata('user_email')) { ?>
									<li><a href="<?= base_url() ?>index.php/view_products">View All Projects</a></li>
									<li><a href="<?= base_url() ?>index.php/user_orders">Bids History</a></li>
									<li><a href="<?= base_url() ?>index.php/user_profile">My Account</a></li>
									<li><a href="<?= base_url() ?>index.php/logout">LogOut</a></li>

									<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
									<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>

									<li><a href="<?= base_url() ?>index.php/privacy">Privacy</a></li>
								<?php	} else { ?>

									<li><a href="<?= base_url() ?>index.php/user_login">Log In</a></li>
									<li><a href="<?= base_url() ?>index.php/user_signup">Sign Up</a></li>

									<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
									<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>
									<li><a href="<?= base_url() ?>index.php/privacy">Privacy</a></li>
								<?php } ?>
							</ul>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title">Popular Tags</h4>

							<div class="tagcloud">
								<?php foreach ($fetch_tags as $tags) { ?>
									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $tags->advertisement_id ?>"><?= $tags->product_name ?></a>

								<?php } ?>
							</div>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .footer-middle -->

		<div class="container">
			<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
				<p class="footer-copyright py-3 pr-4 mb-0">© InfoTEch. 2020. All Rights Reserved</p>

				<img src="<?= base_url() ?>assets/images/payments.png" alt="payment methods" class="footer-payments py-3">
			</div>
		</div><!-- End .container -->
	</footer><!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">

				<ul class="mobile-menu">
					<li class="active"><a href="<?= base_url() ?>">Home</a></li>

					<li>
						<a href="<?= base_url() ?>index.php/view_products">Categories</a>
						<ul>
							<?php foreach ($fetch_category as $category) { ?>
								<li>
									<a href="<?= base_url() ?>index.php/view_products?category_id=<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></a>
									<ul>
										<?php foreach ($fetch_sub_category as $sub_category) { ?>

											<?php if ($sub_category->category_id == $category->category_id) { ?>
												<li><a href="<?= base_url() ?>index.php/view_products?sub_category_id=<?php echo $sub_category->sub_category_id; ?>"><?php echo $sub_category->sub_category_name; ?></a></li>
											<?php } ?>
										<?php } ?>
									</ul>
								</li>
							<?php } ?>

						</ul>
					</li>


					<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
					<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>
					<?php if ($this->session->userdata('user_email')) { ?>
						<li class=""><a href="<?= base_url() ?>index.php/logout">Logout</a></li>
					<?php } ?>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank"></a>
				<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
				<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank"></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->


	<!-- End .newsletter-popup -->
	<!-- Add Cart Modal -->


	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="<?= base_url() ?>assets/js/main.min.js"></script>

	<script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>

	<script>
		$(".destroy_cart_item").click(function() {
			var rowid = $(this).data("rowid");
			$.ajax({
					url: '<?php echo base_url(); ?>index.php/destroy_cart_item',
					type: 'POST',
					data: {
						rowid: rowid
					},
				})
				.done(function() {
					location.reload();
				});
		});
	</script>




	<script type="text/javascript">
		$(document).ready(function($) {
			$('#via_form').keyup(function() {

				// alert("hello");
				/* Act on the event */
				var seachText = $(this).val();
				if (seachText != '') {
					$.ajax({
							url: '<?= base_url(); ?>searching',
							type: 'POST',
							data: {
								search: seachText
							},
						})
						.done(function(response) {
							var data = $.parseJSON(response);
							var html = '';
							$.each(data, function(index, val) {
								html += "<a href='<?= base_url() ?>index.php/view_products?search=" + seachText + "'class='list-group-item list-group-item-action' border-1 >";
								html += val['product_name'];
								html += '</a>';

							});
							$('#show-list').html(html);
						});
				} else {
					$('#show-list').html('');
				}
				$('a').click(function(event) {
					$('#search').val($(this).text());
					$('#show-list').html('');
				});
			});
		});
	</script>





<?php if($this->session->userdata('user_details_id')){ ?>
	<script>
	window.addEventListener('DOMContentLoaded', (event) => {
		CometChatWidget.init({
			"appID": "313555def95f414",
			"appRegion": "us",
			"authKey": "20c46ce3a729f5ffe07899527afda0cd7588a56d"
		}).then(response => {
			console.log("Initialization completed successfully");


			// 			// OPTIONAL
			CometChatWidget.createOrUpdateUser({
			  "uid": "u<?= $this->session->userdata('user_details_id') ?>", 
			  "name": "<?= $this->session->userdata('user_name') ?>"
			//  "roles": "user"
			});

			CometChatWidget.login({
				"uid": "u<?= $this->session->userdata('user_details_id') ?>"
			}).then(response => {
				// var kush = 'superhero5';	

				CometChatWidget.launch({
					"widgetID": "ab6aa584-f178-4ca4-9e2f-b11b1d3fd4d2",
					"docked": "true",
					"alignment": "right", //left or right
					"roundedCorners": "true",
					"height": "450px",
					"width": "400px",
					// "defaultID": 'kush', //default UID (user) or GUID (group) to show,
				});

			



			}, error => {
				console.log("User login failed with error:", error);
				//Check the reason for error and take appropriate action.
			});
		}, error => {
			console.log("Initialization failed with error:", error);
			//Check the reason for error and take appropriate action.
		});


	});
</script>
<?php } ?>


</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Nov 2020 08:38:14 GMT -->

</html>