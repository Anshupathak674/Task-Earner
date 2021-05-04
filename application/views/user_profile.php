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

			<div class="container mt-2 ">
				<div class="row">
					<div class="col-lg-9 order-lg-last dashboard-content">
                        <h2>Edit Account Information</h2>
                        <h6>Enter Your Current Password To Make Changes</h6>
						
						<form action="<?= base_url() ?>index.php/change_user_detials" method="POST" enctype="multipart/form-data" >
							<div class="row">
								<div class="col-sm-11">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group required-field">
												<label for="acc-name">First Name</label>
												<input value="<?= $fetch_user_data['user_name'] ?>"  type="text" class="form-control" id="acc-name" name="user_name" required>
											</div><!-- End .form-group -->
										</div><!-- End .col-md-4 -->

									

									
									</div><!-- End .row -->
								</div><!-- End .col-sm-11 -->
							</div><!-- End .row -->

							<div class="form-group required-field">
								<label for="acc-email">Email</label>
								<input type="email" value="<?= $fetch_user_data['user_email'] ?>"   class="form-control" id="acc-email" name="user_email" required>
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="acc-password">Current Password</label>
								<input type="password" name="user_password_old" class="form-control" id="acc-password"  required>
							</div><!-- End .form-group -->


						


							<div class="mb-2"></div><!-- margin -->

							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="change-pass-checkbox" value="1">
								<label class="custom-control-label" for="change-pass-checkbox">Change Password</label>
							</div><!-- End .custom-checkbox -->

							<div id="account-chage-pass">
								<h3 class="mb-2">Change Password</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="acc-pass2">New Password</label>
											<input type="password" minlength="6" maxlength="16"  value="" class="form-control" id="acc-pass2" name="user_new_password">
										</div><!-- End .form-group -->
									</div><!-- End .col-md-6 -->

									<div class="col-md-6">
										<div class="form-group required-field">
											<label for="acc-pass3">Confirm Password</label>
											<input type="password" value="" class="form-control" id="acc-pass3" minlength="6" maxlength="16" name="user_confirm_password">
										</div><!-- End .form-group -->
									</div><!-- End .col-md-6 -->
								</div><!-- End .row -->
							</div><!-- End #account-chage-pass -->

							<div class="required text-right">* Required Field</div>
							<div class="form-footer">
								<a href="<?= base_url() ?>index.php/view_products"><i class="icon-angle-double-left"></i>Back To Bidding</a>

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-lg-9 -->




                   



					<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>

							<ul class="list">
								<li class="active"><a href="<?= base_url() ?>index.php/user_profile">Account Dashboard</a></li>
								<!-- <li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li> -->
								<li><a href="<?= base_url() ?>index.php/user_orders">My Bids</a></li>
								<li><a href="<?= base_url() ?>index.php/user_profile_pic">My Profile</a></li>

								<!-- <li><a href="#">Billing Agreements</a></li>
								<li><a href="#">Recurring Profiles</a></li> -->
								<!-- <li><a href="<?= base_url() ?>index.php/user_reviews">My Product Reviews</a></li> -->
								<!-- <li><a href="#">My Tags</a></li>
								<li><a href="#">My Wishlist</a></li>
								<li><a href="#">My Applications</a></li>
								<li><a href="#">Newsletter Subscriptions</a></li>
								<li><a href="#">My Downloadable Products</a></li> -->
							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->