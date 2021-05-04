<main class="main">


<div class="category-banner-container bg-gray">
		<div class="col-12  " id="login_error">
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
			<div class="container">
				<div class="row">
					
					<div class="col-md3"></div>
					<div class="col-md-6" style="margin: 2px auto;" > 
						
					<div class="col-12" >
                            <?php if ($msg = $this->session->flashdata('msg')) {
                                if ($msg_class = $this->session->flashdata('msg_class')) {
                            ?>
                                    <div style="border-radius:12px; " class="alert mt-2 <?= $msg_class ?>">
                                        <h4 style="color: white;"> <?= $msg ?> </h4>
                                    </div>
                            <?php         }
                            }

                            ?>
                        </div>
						<form action="<?= base_url() ?>index.php/user_login_check_new" method="POST" >							
							<h2 class="title mb-2">User Login</h2>
							<input type="email" name="user_email" class="form-control" placeholder="Email Address" required>
							<input type="password" minlength="6" maxlength="12" name="user_password" class="form-control" placeholder="Password" required>

							<div class="form-footer">
								<button style="margin: auto;" type="submit" class="btn btn-primary">Log In</button>
                                &nbsp;
                                <a style="margin: auto;"  href="<?= base_url() ?>index.php/home" class="" ><button type="button" class="btn btn-danger">Back</button></a>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->

					<div class="col-md3"></div>

				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->