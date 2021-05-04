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
    

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">



				<div id="map">

					<iframe src="<?= $basic_info['contact_us_page'] ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div><!-- End #map -->

				<div class="row">
					<div class="col-md-8">
						<h2 class="light-title">Write <strong>Us</strong></h2>

						<form action="<?= base_url() ?>index.php/contact_us_reviews" method="POST" >
							<div class="form-group required-field">
								<label for="contact-name">Name</label>
								<input type="text" class="form-control" id="contact-name" name="contact_name" required>
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-email">Email</label>
								<input type="email" class="form-control" id="contact-email" name="contact_email" required>
							</div><!-- End .form-group -->

							<div class="form-group">
								<label for="contact-phone">Phone Number</label>
								<input type="tel" class="form-control" id="contact_phone" name="contact_phone">
							</div><!-- End .form-group -->

							<div class="form-group required-field">
								<label for="contact-message">What’s on your mind?</label>
								<textarea cols="30" rows="1" id="contact_message" class="form-control" name="contact_message" required></textarea>
							</div><!-- End .form-group -->

							<div class="form-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-8 -->

					<div class="col-md-4">
						<h2 class="light-title">Contact <strong>Details</strong></h2>

						<div class="contact-info">
							<div>
								<i class="icon-phone"></i>
								<p><a href="tel:"><?= $basic_info['company_mobile'] ?></a></p>
								<!-- <p><a href="tel:">0201 203 2032</a></p> -->
							</div>
							<div>
								<i class="social-icon social-instagram icon-instagram" style="background-color: #0088cc;" ></i>
								<p><a href="<?= $basic_info['company_insta_link'] ?>"><?= $basic_info['company_name'] ?></a></p>
								<p><a href="<?= $basic_info['company_insta_link'] ?>">Click to Visit </a></p>
							</div>
							<div>
								<i class="icon-mail-alt"></i>
								<p><a href="mailto:<?= $basic_info['company_email'] ?>"><?= $basic_info['company_email'] ?></a></p>
								<p><a href="mailto:<?= $basic_info['company_email'] ?>">Click to Email Us</a></p>
							</div>
							<!-- <div>
								<i class="icon-skype"></i>
								<p>porto_skype</p>
								<p>porto_template</p>
							</div> -->
						</div><!-- End .contact-info -->
					</div><!-- End .col-md-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-8"></div><!-- margin -->
		</main><!-- End .main -->
