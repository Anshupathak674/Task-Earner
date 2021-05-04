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

	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
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



	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

					<div class="header-right w-lg-max pl-2" style="margin:2px;">
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


						<!-- <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a> -->


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

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li>
								<a href="<?= base_url() ?>index.php/home">Home</a>
							</li>
							<li class="">
								<a href="<?= base_url() ?>index.php/view_products">Categories</a>
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

										<!-- <div class="col-lg-4 p-0">
											<img src="assets/images/menu-banner.jpg" alt="Menu banner">
										</div> -->
									</div>
								</div><!-- End .megamenu -->
							</li>

							<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
							<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>

							<?php if ($this->session->userdata('user_email')) { ?>
								<li class="float-right"><a href="<?= base_url() ?>logout">Logout</a></li>
							<?php } ?>

						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->

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