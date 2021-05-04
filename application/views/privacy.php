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
			<div class="page-header page-header-bg text-left" style="background: 70%/cover #D4E1EA url('<?= base_url() ?>assets/images/page-header-bg.jpg');">
				<div class="container">
					<h1><?= $basic_info['company_name'] ?><span>STANDARD WITH SMARTNESS	</span>
					</h1>
					<a href="<?= base_url() ?>index.php/contact_us" class="btn btn-dark">Contact</a>
				</div><!-- End .container -->
			</div><!-- End .page-header -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Privacy</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="about-section">
				<div class="container">
                    <h4>Privacy</h4>
					<?= $basic_info['company_privacy'] ?>
                </div><!-- End .container -->
                <br>
                <br>
                <br>

                <div style="
    width: 28px;
    float: right;
    margin: -10px 54px;
"> 
<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank" title="Insta Profile" style="
    border-radius: 25px;
    background-color: rgb(222 9 9 / 80%);
"></a>

                </div>

                <div style="
    width: 28px;
    float: right;
    margin: -10px -37px;
"> 


            
                    <a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" target="blank" title="Chat with us on Whatsapp"  >

                        <img src="<?= base_url() ?>assets/whatsapp.png"  style="width:100%;" alt=""> 
                    </a>

                </div>
			</div><!-- End .about-section -->

			<div class="testimonials-section">
				<div class="container">
					<h2 class="subtitle text-center">OUR TEAM</h2>

					<div class="testimonials-carousel owl-carousel owl-theme images-left" data-owl-options="{
                        'lazyLoad': true,
                        'autoHeight': true,
                        'dots': false,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '992': {
                                'items': 2
                            }
                        }
					}">
					
					<?php foreach($fetch_members as $members){ ?>
						
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

							<blockquote>
								<p><?= $members->about_member ?></p>
							</blockquote>
						</div><!-- End .testimonial -->
						<?php } ?>
					

					
					
					</div><!-- End .testimonials-slider -->
				</div><!-- End .container -->
			</div><!-- End .testimonials-section -->






			<div class="features-section bg-gray">
				<div class="container">
                    <h2 class="subtitle">WHY CHOOSE US</h2>
                    
					<div class="row">
						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-shipped"></i>

								<div class="feature-box-content">
									<h3>Free Shipping</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->
						
						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-us-dollar"></i>

								<div class="feature-box-content">
									<h3>100% Money Back Guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-online-support"></i>

								<div class="feature-box-content">
									<h3>Online Support 24/7</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .features-section -->


		
		</main><!-- End .main -->