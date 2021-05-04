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
					<div class="widget">
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
								<li><a href="<?= base_url() ?>logout">LogOut</a></li>

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
			<p class="footer-copyright py-3 pr-4 mb-0">© <?= $basic_info['company_name'] ?>. 2020. All Rights Reserved</p>

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
				<li class="active"><a href="<?= base_url() ?>index.php/home">Home</a></li>

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


				<li><a href="<?= base_url() ?>index.php/user_orders">Bids History</a></li>
				<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
				<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>
				<?php if ($this->session->userdata('user_email')) { ?>
					<li class=""><a href="<?= base_url() ?>logout">Logout</a></li>
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

<!-- Add Cart Modal -->


<a id="scroll-top" href="#top" title="Top" role="button">

	<i class="icon-angle-up"></i></a>


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





<!-- Plugins JS File -->
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins.min.js"></script>
<script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>

<!-- Main JS File -->
<script src="<?= base_url() ?>assets/js/main.min.js"></script>
<script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
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


<script>
$(".commet").click(function() {
		var uid = $(this).data("uid");

		CometChatWidget.openOrCloseChat(true);
		CometChatWidget.chatWithUser(uid);
	});
</script>
<?php } ?>






<!-- End of LiveChat code -->

</body>

</html>