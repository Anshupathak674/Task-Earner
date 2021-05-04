<main class="main">

	<div class="category-banner-container bg-gray">
		<div class="col-12" id="login_error">
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

		<div class="product-single-container product-single-default mt-2">
			<div class="row">
				<div class="col-md-5 product-single-gallery">
					<div class="product-slider-container">
						<div class="product-single-carousel owl-carousel owl-theme">

							<?php foreach ($view_advertisement_images as $images) { ?>
								<div class="product-item">
									<img class="product-single-image" src="<?= base_url() ?>admin_login/uploads/<?= $images->inside_image ?>" data-zoom-image="<?= base_url() ?>admin_login/uploads/<?= $images->inside_image ?>" />
								</div>
							<?php } ?>



						</div>
						<!-- End .product-single-carousel -->
						<span class="prod-full-screen">
							<i class="icon-plus"></i>
						</span>
					</div>
					<div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
						<?php foreach ($view_advertisement_images as $images) { ?>

							<div class="owl-dot">
								<div style="width: 112px;height: 112px;">

									<img src="<?= base_url() ?>admin_login/uploads/<?= $images->inside_image ?>" style="width: 100%; height:100%" />
								</div>
							</div>
						<?php } ?>


					</div>
				</div><!-- End .product-single-gallery -->

				<div class="col-md-7 product-single-details">
					<h1 class="product-title"><?= $view_advertisement['product_name'] ?></h1>

					<div class="ratings-container">
						<div class="product-ratings">
							<span class="ratings" style="width:60%"></span>
						</div><!-- End .product-ratings -->

						<!-- ( 6 Reviews ) -->
					</div><!-- End .ratings-container -->

					<hr class="short-divider">

					<div class="price-box">
						<span class="product-price">₹<?= $view_advertisement['product_offer_price'] ?></span>
					</div><!-- End .price-box -->

					<div class="product-desc" style=" margin-bottom: 0.2rem;">
						<p>
							<?= $view_advertisement['product_description'] ?>
							<!-- <a href="#">(read more)</a> -->
						</p>
					</div><!-- End .product-desc -->

					<?php

					if ($all_bids) {

						foreach ($all_bids as $bids) {

							if ($bids->add_id == $view_advertisement['advertisement_id']) {
								if ($bids->bid_status == 0) { ?>
									<button type="button" class="btn btn-info">Pending For Approval</button>

								<?php	}
								if ($bids->bid_status == 4) { ?>
									<button type="button" class="btn btn-success">Payment Completed</button>
									&nbsp;
               &nbsp;
			   <a class="commet" data-uid="t<?= $bids->tasker_details_id ?>" href="#" class=""><button type="button" class="btn btn-info">Open Chat</button></a>

								<?php	}
								if ($bids->bid_status == 1) { ?>
									<button type="button" class="btn btn-success">Accepted</button>
								
               &nbsp;
               &nbsp;
			   <a class="commet" data-uid="t<?= $bids->tasker_details_id ?>" href="#" class=""><button type="button" class="btn btn-info">Open Chat</button></a>
									
								<?php }
								if ($bids->bid_status == 2) { ?>
									<button type="button" class="btn btn-danger">Rejected</button>
								<?php }
							} else { ?>
								<hr class="divider">

								<form action="<?= base_url() ?>add_to_cart" method="POST">

									<div class="product-action">
										<div class="product-single-qty">

											<label>Bid Amount (₹) </label>

											<input style="color:#222529" class=" form-control" value="<?= $view_advertisement['product_offer_price'] ?>" required name="bid_price" type="number">

											<input type="hidden" value="<?php echo $view_advertisement['advertisement_id']; ?>" name="add_id">
											<input type="hidden" value="<?= $view_advertisement['tasker_details_id'] ?>" name="tasker_details_id">
										</div><!-- End .product-single-qty -->
										&nbsp;
										&nbsp;
										&nbsp;
										&nbsp;
										&nbsp;
										<div class="product-single-qty">

											<label>Delivered in (DAYS)</label>

											<input style="color:#222529" class=" form-control" value="7" name="project_delivery" required type="number">


										</div><!-- End .product-single-qty -->

										<div class="form-group required-field">
											<label>Describe your proposal </label>
											<div class="form-control-tooltip">
												<textarea style="color:#222529" cols="30" rows="1" id="contact-message" class="form-control" name="proposal_description" required=""></textarea>
											</div><!-- End .form-control-tooltip -->
										</div>


										<button type="submit" class="btn btn-dark add-cart " title="Place Bid">Place Bid</button>
									</div><!-- End .product-action -->
								</form>
						<?php }
							break;
						}
					} else { ?>
						<hr class="divider">

						<form action="<?= base_url() ?>add_to_cart" method="POST">

							<div class="product-action">
								<div class="product-single-qty">

									<label>Bid Amount (₹) </label>

									<input style="color:#222529" class=" form-control" value="<?= $view_advertisement['product_offer_price'] ?>" required name="bid_price" type="number">
									<input type="hidden" value="<?= $view_advertisement['tasker_details_id'] ?>" name="tasker_details_id">
									<input type="hidden" value="<?php echo $view_advertisement['advertisement_id']; ?>" name="add_id">
								</div><!-- End .product-single-qty -->
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								&nbsp;
								<div class="product-single-qty">

									<label>Delivered in (DAYS)</label>

									<input style="color:#222529" class=" form-control" value="7" name="project_delivery" required type="number">


								</div><!-- End .product-single-qty -->

								<div class="form-group required-field">
									<label>Describe your proposal </label>
									<div class="form-control-tooltip">
										<textarea style="color:#222529" cols="30" rows="1" id="contact-message" class="form-control" name="proposal_description" required=""></textarea>
									</div><!-- End .form-control-tooltip -->
								</div>


								<button type="submit" class="btn btn-dark add-cart " title="Place Bid">Place Bid</button>
							</div><!-- End .product-action -->
						</form>
					<?php }

					?>



					<hr class="divider mb-1">

					<div class="product-single-share">
						<label class="sr-only">Share:</label>

						<div class="social-icons mr-2">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $view_advertisement['advertisement_id'] ?>" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
							<a href="whatsapp://send?text=<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $view_advertisement['advertisement_id'] ?>" class="social-icon fab social-linkedin" target="_blank" title="Whatsapp"><img src="<?= base_url() ?>assets/whatsapp.png" style="    width: 19px; margin: -10px 0px;background-color:white;" alt=""></a>
							<a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
							<a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
						</div><!-- End .social-icons -->

						<!-- <a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a> -->
					</div><!-- End .product single-share -->
				</div><!-- End .product-single-details -->
			</div><!-- End .row -->
		</div><!-- End .product-single-container -->

		<div class="product-single-tabs">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="product-tab-more-info" data-toggle="tab" href="#product-more-info-content" role="tab" aria-controls="product-more-info-content" aria-selected="false">More Info</a>
				</li>

				<!-- <li class="nav-item">
							<a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (3)</a>
						</li> -->
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
					<div class="product-desc-content">
						<p><?= $view_advertisement['product_description_main'] ?>.</p>
						<!-- <ul>
									<li><i class="fa fa-check-circle"></i>100% Verified Product</li>
									<li><i class="fa fa-check-circle"></i>For bulk purchares contact us</li>
									<li><i class="fa fa-check-circle"></i>Deliver in 15 to 20 days</li>
								</ul> -->

					</div><!-- End .product-desc-content -->
				</div><!-- End .tab-pane -->

				<div class="tab-pane fade fade" id="product-more-info-content" role="tabpanel" aria-labelledby="product-tab-more-info">
					<div class="product-desc-content">
						<p><?= $view_advertisement['product_more_description'] ?>.</p>
					</div><!-- End .product-desc-content -->
				</div><!-- End .tab-pane -->



				<div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
					<div class="product-reviews-content">
						<div class="row">
							<div class="col-xl-7">
								<h2 class="reviews-title">3 reviews for Product Long Name</h2>

								<ol class="comment-list">
									<li class="comment-container">
										<div class="comment-avatar">
											<img src="assets/images/avatar/avatar1.jpg" width="65" height="65" alt="avatar" />
										</div><!-- End .comment-avatar-->

										<div class="comment-box">
											<div class="ratings-container">
												<div class="product-ratings">
													<span class="ratings" style="width:80%"></span><!-- End .ratings -->
												</div><!-- End .product-ratings -->
											</div><!-- End .ratings-container -->

											<div class="comment-info mb-1">
												<h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
											</div><!-- End .comment-info -->

											<div class="comment-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
											</div><!-- End .comment-text -->
										</div><!-- End .comment-box -->
									</li><!-- comment-container -->

									<li class="comment-container">
										<div class="comment-avatar">
											<img src="assets/images/avatar/avatar2.jpg" width="65" height="65" alt="avatar" />
										</div><!-- End .comment-avatar-->

										<div class="comment-box">
											<div class="ratings-container">
												<div class="product-ratings">
													<span class="ratings" style="width:80%"></span><!-- End .ratings -->
												</div><!-- End .product-ratings -->
											</div><!-- End .ratings-container -->

											<div class="comment-info mb-1">
												<h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
											</div><!-- End .comment-info -->

											<div class="comment-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
											</div><!-- End .comment-text -->
										</div><!-- End .comment-box -->
									</li><!-- comment-container -->

									<li class="comment-container">
										<div class="comment-avatar">
											<img src="assets/images/avatar/avatar3.jpg" width="65" height="65" alt="avatar" />
										</div><!-- End .comment-avatar-->

										<div class="comment-box">
											<div class="ratings-container">
												<div class="product-ratings">
													<span class="ratings" style="width:80%"></span><!-- End .ratings -->
												</div><!-- End .product-ratings -->
											</div><!-- End .ratings-container -->

											<div class="comment-info mb-1">
												<h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
											</div><!-- End .comment-info -->

											<div class="comment-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
											</div><!-- End .comment-text -->
										</div><!-- End .comment-box -->
									</li><!-- comment-container -->
								</ol><!-- End .comment-list -->
							</div>

							<div class="col-xl-5">
								<div class="add-product-review">
									<form action="#" class="comment-form m-0">
										<h3 class="review-title">Add a Review</h3>

										<div class="rating-form">
											<label for="rating">Your rating</label>
											<span class="rating-stars">
												<a class="star-1" href="#">1</a>
												<a class="star-2" href="#">2</a>
												<a class="star-3" href="#">3</a>
												<a class="star-4" href="#">4</a>
												<a class="star-5" href="#">5</a>
											</span>

											<select name="rating" id="rating" required="" style="display: none;">
												<option value="">Rate…</option>
												<option value="5">Perfect</option>
												<option value="4">Good</option>
												<option value="3">Average</option>
												<option value="2">Not that bad</option>
												<option value="1">Very poor</option>
											</select>
										</div>

										<div class="form-group">
											<label>Your Review</label>
											<textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
										</div><!-- End .form-group -->


										<div class="row">
											<div class="col-md-6 col-xl-12">
												<div class="form-group">
													<label>Your Name</label>
													<input type="text" class="form-control form-control-sm" required>
												</div><!-- End .form-group -->
											</div>

											<div class="col-md-6 col-xl-12">
												<div class="form-group">
													<label>Your E-mail</label>
													<input type="text" class="form-control form-control-sm" required>
												</div><!-- End .form-group -->
											</div>
										</div>

										<input type="submit" class="btn btn-dark ls-n-15" value="Submit">
									</form>
								</div><!-- End .add-product-review -->
							</div>
						</div>
					</div><!-- End .product-reviews-content -->
				</div><!-- End .tab-pane -->
			</div><!-- End .tab-content -->
		</div><!-- End .product-single-tabs -->

		<div class="products-section pt-0">
			<h2 class="section-title">Related Products</h2>
			<div class="products-slider owl-carousel owl-theme dots-top">

				<?php foreach ($view_related_products as $get) { ?>
					<div class="product-default inner-quickview inner-icon">
						<figure>
							<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
								<div class="" style=" height:17rem">

									<img src="<?= base_url() ?>admin_login/uploads/<?= $get->front_image ?>" style="height: 100%;">
								</div>
							</a>
							<div class="label-group">
								<span class="product-label label-sale">HOT</span>
							</div>
							<div class="btn-icon-group">
								<button class="btn-icon btn-add-cart addToCartButton" data-advertisement_id="<?php echo $get->advertisement_id; ?>"><i class="icon-shopping-cart"></i></button>
							</div>
							<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="btn-quickview" title="View">View</a>
						</figure>
						<div class="product-details">
							<div class="category-wrap">
								<div class="category-list">
									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="product-category"><?= $get->category_name ?>, &nbsp; <?= $get->sub_category_name ?></a>
								</div>
							</div>
							<h3 class="product-title">
								<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>"><?= $get->product_name ?></a>
							</h3>
							<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:100%"></span><!-- End .ratings -->
										<!-- <span class="tooltiptext tooltip-top">4</span> -->
									</div><!-- End .product-ratings -->
								</div><!-- End .ratings-container -->
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

			</div><!-- End .products-slider -->

		</div><!-- End .products-section -->
	</div><!-- End .container -->
</main><!-- End .main -->



<script>
	$(".addToCartButton").click(function() {
		var add_id = $(this).data("advertisement_id")

		$.ajax({
				url: '<?php echo base_url(); ?>index.php/add_to_cart',
				type: 'POST',
				data: {
					add_id: add_id
				},
			})
			.done(function() {
				location.reload();
			});
	});
</script>