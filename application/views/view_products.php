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

	<div class="container">


		<div class="row">
			<div class="col-lg-9 main-content">
				<nav class="toolbox">
					<div class="toolbox-left">
						<div class="toolbox-item toolbox-sort">
							<label>Sort By:</label>

							<div class="select-custom">
								<select id="sorting" name="sorting" class="form-control">
									<option value="1" selected="selected">Default sorting</option>

									<option value="low_high">Sort by price: low to high</option>
									<option value="high_low">Sort by price: high to low</option>
									<option value="date">Sort by newness</option>

								</select>
							</div><!-- End .select-custom -->


						</div><!-- End .toolbox-item -->
					</div><!-- End .toolbox-left -->


				</nav>

				<div class="row " id="filter_data">

					<?php foreach ($fetch_add_by_get as $get) { ?>
						<div class="col-6 col-sm-4">
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
							
								<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="btn-quickview" > View</a>
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
					</div><!-- End .col-sm-4 -->
					<?php } ?>
				


				</div><!-- End .row -->

				<nav class="toolbox toolbox-pagination">
					<div class="toolbox-item toolbox-show">
						<!-- <label>Show:</label>

						<div class="select-custom">
							<select name="count" class="form-control">
								<option value="12">12</option>
								<option value="24">24</option>
								<option value="36">36</option>
							</select>
						</div> -->
					</div>

					<ul class="pagination toolbox-item" id="pagination">

						<li class="page-item active">
							<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
						</li>
						<!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><span class="page-link">...</span></li>
						<li class="page-item">
							<a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
						</li> -->
					</ul>
				</nav>
			</div><!-- End .col-lg-9 -->

			<div class="sidebar-overlay"></div>
			<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
			<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
				<div class="sidebar-wrapper">
					<div class="widget" style="margin: 6px 0px;">
						<h3 class="widget-title">
							<a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
						</h3>

						<div class="collapse show" id="widget-body-2">
							<div class="widget-body">
								<ul class="cat-list">
									<?php foreach ($fetch_category as $category) { ?>
										<li>
											<label style="color: #948989;">
												<input type="checkbox" class="common_selector category_id" value="<?= $category->category_id ?>">
												<?= $category->category_name ?>
											</label>
										</li>
									<?php	} ?>


								</ul>
							</div><!-- End .widget-body -->
						</div><!-- End .collapse -->
					</div><!-- End .widget -->

					<div class="widget">
						<h3 class="widget-title">
							<a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
						</h3>

						<div class="collapse show" id="widget-body-3">
							<div class="widget-body">


								<input type="hidden" id="max_price" name="max_price" value="100000">
								<input type="hidden" id="min_price" name="min_price" value="0">


								<div class="price-slider-wrapper">
									<div id="price-slider"></div><!-- End #price-slider -->
								</div><!-- End .price-slider-wrapper -->

								<div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
									<button type="submit" id="sub" class="btn btn-primary">Filter</button>


									<div class="filter-price-text">
										Price:
										₹<span class="filter-price-range"></span>
									</div><!-- End .filter-price-text -->
								</div><!-- End .filter-price-action -->

							</div><!-- End .widget-body -->
						</div><!-- End .collapse -->
					</div><!-- End .widget -->

					<div class="widget">
						<h3 class="widget-title">
							<a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">BRAND</a>
						</h3>

						<div class="collapse show" id="widget-body-4">
							<div class="widget-body">
								<ul class="cat-list">
									<?php foreach ($fetch_sub_category_names as $sub_category) { ?>
										<li>
											<label style="color: #948989;">
												<input type="checkbox" class="common_selector sub_category_name" value="<?= $sub_category->sub_category_name ?>">
												<?= $sub_category->sub_category_name ?>
											</label>
										</li>
									<?php	} ?>
								</ul>
							</div><!-- End .widget-body -->
						</div><!-- End .collapse -->
					</div><!-- End .widget -->


					<!-- colors -->
					<!-- <div class="widget">
						<h3 class="widget-title">
							<a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
						</h3>

						<div class="collapse show" id="widget-body-6">
							<div class="widget-body">
								<ul class="config-swatch-list">
									<li class="active">
										<a href="#" style="background-color: #000;"></a>
										<span>Black</span>
									</li>
									<li>
										<a href="#" style="background-color: #0188cc;"></a>
										<span>Blue</span>
									</li>
									<li>
										<a href="#" style="background-color: #81d742;"></a>
										<span>Green</span>
									</li>
									<li>
										<a href="#" style="background-color: #6085a5;"></a>
										<span>Indigo</span>
									</li>
									<li>
										<a href="#" style="background-color: #ab6e6e;"></a>
										<span>Red</span>
									</li>
									<li>
										<a href="#" style="background-color: #ddb373;"></a>
										<span>Brown</span>
									</li>
									<li>
										<a href="#" style="background-color: #6b97bf;"></a>
										<span>Light-Blue</span>
									</li>
									<li>
										<a href="#" style="background-color: #eded68;"></a>
										<span>Yellow</span>
									</li>
								</ul>
							</div>
						</div>
					</div> -->

					<div class="widget widget-featured">
						<h3 class="widget-title">Featured</h3>

						<div class="widget-body">
							<div class="owl-carousel widget-featured-products">
								<div class="featured-col">

								<?php foreach($fetch_feature_product1 as $get){ ?>
									<div class="product-default left-details product-widget">
										<figure>
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
												<img src="<?= base_url() ?>admin_login/uploads/<?= $get->front_image ?>">
											</a>
										</figure>
										<div class="product-details">
											<h2 class="product-title">
												<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>"><?= $get->product_name ?></a>
											</h2>
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
											<div class="ratings-container">
												<div class="product-ratings">
													<span class="ratings" style="width:100%"></span>
												</div><!-- End .product-ratings -->
											</div><!-- End .product-container -->

											</a>
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
											<div class="price-box">
												<span class="product-price">₹<?= $get->product_offer_price ?></span>
											</div><!-- End .price-box -->
											</a>
									
										</div><!-- End .product-details -->
									</div>
								 <?php } ?>
								
								
									
								</div><!-- End .featured-col -->

								<div class="featured-col">

								<?php foreach($fetch_feature_product2 as $get){ ?>

									<div class="product-default left-details product-widget">
										<figure>
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
												<img src="<?= base_url() ?>admin_login/uploads/<?= $get->front_image ?>">
											</a>
										</figure>
										<div class="product-details">
											<h2 class="product-title">
												<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>"><?= $get->product_name ?></a>
											</h2>
											<div class="ratings-container">
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
													<div class="product-ratings">
														<span class="ratings" style="width:100%"></span>
													</div>
											</a>
											</div><!-- End .product-container -->
											<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
											<div class="price-box">
												<span class="product-price">₹<?= $get->product_offer_price ?></span>
											</div>
											</a>

										</div><!-- End .product-details -->
									</div>

									<?php } ?>
									
								
								</div><!-- End .featured-col -->
							</div><!-- End .widget-featured-slider -->
						</div><!-- End .widget-body -->
					</div><!-- End .widget -->

					<!-- <div class="widget widget-block">
						<h3 class="widget-title">Custom HTML Block</h3>
						<h5>This is a custom sub-title.</h5>
						<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
					</div> -->
				</div><!-- End .sidebar-wrapper -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-3"></div><!-- margin -->
</main><!-- End .main -->

<script>
	$(document).ready(function() {


    $(".addToCartButton").click(function(){
      var add_id =  $(this).data("advertisement_id")
	  
$.ajax({
        url: '<?php echo base_url(); ?>index.php/add_to_cart',
        type: 'POST',
        data: {add_id: add_id},
    })
    .done(function() {
        location.reload();
    });
    });
});

</script>

<script>
	$(document).ready(function() {

		function filter_data(page) {
			$('#filter_data').html("<div class='loading-overlay' style='visibility: visible;opacity: inherit;'><div class='bounce-loader'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div></div>");
			var action = 'fetch_data';
			var sorting = $('#sorting').val();
			var min_price = $('#min_price').val();
			var max_price = $('#max_price').val();
			var via_form = $('#via_form').val();

			
			var category_id = get_filter('category_id');
			var sub_category_name = get_filter('sub_category_name');
			$.ajax({
					url: "<?php echo base_url(); ?>fetch_data",
					method: "POST",
					// dataType: "JSON",
					data: {
						action: action,
						min_price: min_price,
						max_price: max_price,
						category_id: category_id,
						sub_category_name: sub_category_name,
						sorting: sorting,
						via_form: via_form
					},

				})
				.done(function(response) {
					var data = JSON.parse(response);
					// alert('Success');
					// die();
					var html = "";
					$.each(data, function(index, val) {

						html += "<div class='col-6 col-sm-4'>";
						html += "<div class='product-default inner-quickview inner-icon'>";
						html += " <figure>";

						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + ">";
						html += "<div style='height:17rem'>";
						html += "<img src=" + "'<?= base_url() ?>admin_login/uploads/" + val['front_image'] + "'" + "style='height:100%'>";
						html += "</div>";

						html += " </a>";
						
						html += "<div class='label-group'>";
						html += "<div class='product-label label-hot'>ON SALE";
						html += "</div>";
						html += "</div>";

						

						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + "class='btn-quickview' title='View'>View";
						html += " </a>";
						html += " </figure>";

						html += "<div class='product-details'>";

						html += "<div class='category-wrap'>";
						html += "<div class='category-list'>";
						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + "class='product-category' title='View'>" + val['category_name'];
						html += " </a>, &nbsp";

						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + "class='product-category' title='View'>" + val['sub_category_name'];
						html += " </a>";
					

						html += "<h2 class='product-title'>";
						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + ">" + val['product_name'];
						html += " </a>";
						html += "</h2>";

						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + ">" ;
						html += "<div class='ratings-container'>";
						html += "<div class='product-ratings'>";
						html += "<span class='ratings' style='width:100%;'></span>";
						// html += "<span class='tooltiptext tooltip-top'></span>";
						html += "</div>";
						html += "</div>";
						html += " </a>";

						html += "<a href=" + "'<?= base_url() ?>index.php/view_product_details?advertisement_id=" + val['advertisement_id'] + "'" + ">" ;
						html += "<div class='price-box'>";
						html += "<span class='old-price'>₹" + val['product_actual_price'] + "</span>";
						html += "<span class='product-price'>₹" + val['product_offer_price'] + "</span>";
						html += "</div>";
						html += " </a>";


						html += "</div>";
						html += "</div>";
						html += "</div>";

					});
					$('#filter_data').html(html);

				})
		}

		function get_filter(class_name) {
			var filter = [];
			$('.' + class_name + ':checked').each(function() {
				filter.push($(this).val());
			});
			return filter;
		}

		$('.common_selector').click(function() {
			filter_data(1);
		});

		$('#sub').click(function() {
			filter_data(1);
		});
		

		$('#sorting').change(function() {
			filter_data(1);
		});

		

	})
</script>



