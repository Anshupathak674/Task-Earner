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
                        <h2>Update Profile Pic</h2>
                        <!-- <h6>Enter Your Current Password To Make Changes</h6> -->
						
						<form action="<?= base_url() ?>index.php/change_user_profile_pic" method="POST" enctype="multipart/form-data" >
						

							<div class="form-group required-field">
								<label for="acc-email">Profile Pic</label>
								<input type="file" required   class="form-control" id="acc-email" name="user_profile_pic" required>
							</div><!-- End .form-group -->

							

							<div class="required text-right">* Required Field</div>
							<div class="form-footer">
								<a href="<?= base_url() ?>index.php/view_products"><i class="icon-angle-double-left"></i>Back To Bidding</a>

								<div class="form-footer-right">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div><!-- End .form-footer -->
						</form>

                        <table>
                        <th>Current Profile Pic</th>
                        <td>
                        <div style="width: 200px;" >
                            <img style="width: 100%;" src="<?= base_url() ?>admin_login/uploads/<?= $this->session->userdata('user_profile_pic') ?>" alt="">
                        </div>
                        </td>
                        </table>
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