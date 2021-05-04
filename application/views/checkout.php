<main class="main">
    <!-- <nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</div>
			</nav> -->


            
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
        <ul class="checkout-progress-bar">
            <li class="active">
                <span>Shipping</span>
            </li>
            <li>
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <ul class="checkout-steps">
                    <li>

                        <?php if ($this->session->userdata('user_email')) { ?>
                            <h2 class="step-title">Shipping Address</h2>
                            <form action="<?= base_url() ?>index.php/checkout_review" method="POST" >
                                <div class="form-group required-field">
                                    <label>First Name </label>
                                    <input name="checkout_name" type="text" class="form-control" required>
                                </div><!-- End .form-group -->


                                <div class="form-group required-field">
                                    <label>Phone Number </label>
                                    <div class="form-control-tooltip">
                                        <input type="tel" name="checkout_mobile" maxlength="13" minlength="10"  class="form-control" required>
                                    
                                    </div><!-- End .form-control-tooltip -->
                                </div><!-- End .form-group -->


                                <div class="form-group required-field">
                                    <label>Address(Area and Street ) </label>
                                
                                    <input name="checkout_address" type="text" class="form-control" required>
                                   
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>City/District/Town </label>
                                    <input type="text" name="checkout_city" class="form-control" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label>State/Province</label>
                                    <div class="select-custom">
                                        <select class="form-control" name="checkout_state" >
                                            <option value="Delhi">Delhi</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Zip/Postal Code </label>
                                    <input type="text" maxlength="7" minlength="5" name="checkout_pin_code" class="form-control" required>
                                </div><!-- End .form-group -->
                            

                                <div class="form-group">
                                    <label>Country</label>
                                    <div class="select-custom">
                                        <select class="form-control" name="checkout_country">
                                            <option value="india">India</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .form-group -->

                             

                   <div style="text-align: center;" >
                       <button class="btn btn-primary" type="submit">NEXT</button>
                    </div>

                            </form>
                        <?php } else { ?>
                            <h2 class="step-title">Please Login First</h2>

                            <form action="#" id="user_checkout" >
                                <div class="form-group required-field">
                                    <label>Email Address </label>
                                    <div class="form-control-tooltip">
                                        <input  name="user_email" type="email" class="form-control" required>
                                        <!-- <span class="input-tooltip" data-toggle="tooltip" title="We'll send your order confirmation here." data-placement="right"><i class="icon-question-circle"></i></span> -->
                                    </div><!-- End .form-control-tooltip -->
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Password </label>
                                    <input name="user_password" type="password" class="form-control" required>
                                </div><!-- End .form-group -->

                                <!-- <p>You already have an account with us. Sign in or continue as guest.</p> -->
                                <div class="form-footer">
                                    
                                <button type="submit" class="btn btn-primary">LOGIN</button>

                                <a href="<?= base_url() ?>index.php/user_signup">
                                    <button type="button" class="btn btn-primary" style="background-color: #e82f2f;" >Sign Up</button>
                                </a>

                                    <!-- <a href="forgot-password.html" class="forget-pass"> Forgot your password?</a> -->
                                </div><!-- End .form-footer -->
                            </form>
                        <?php } ?>


                        <script type="text/javascript">
							$(document).ready(function($) {
								$('#user_checkout').submit(function(event) {

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

                    </li>
<!-- 
                    <li>
                        <div class="checkout-step-shipping">
                            <h2 class="step-title">Shipping Methods</h2>

                            <table class="table table-step-shipping">
                                <tbody>
                                    <tr>
                                        <td><input type="radio" name="shipping-method" value="flat"></td>
                                        <td><strong>$20.00</strong></td>
                                        <td>Fixed</td>
                                        <td>Flat Rate</td>
                                    </tr>

                                    <tr>
                                        <td><input type="radio" name="shipping-method" value="best"></td>
                                        <td><strong>$15.00</strong></td>
                                        <td>Table Rate</td>
                                        <td>Best Way</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li> -->
                </ul>
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>

                    <?php 
  $i = 0;
 foreach ($this->cart->contents() as $items) { ?>
                                                    
           <?php $i=$i+1; ?>

             <?php } ?>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section"><?php echo $i?> product<?php if($i==1){

                        }else{
                            echo('s');
                        } ?> in Cart</a>
                    </h4>

                    <div class="collapse" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>

                            <?php foreach($this->cart->contents() as $cart){?>
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $cart['id'] ?>" class="product-image">
                                                <img src="<?= base_url() ?>admin_login/uploads/<?= $cart['image'] ?>" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $cart['id'] ?>"><?= $cart['name'] ?></a>
                                            </h2>

                                            <span class="product-qty">Qty: <?= $cart['qty'] ?></span>
                                        </div>
                                    </td>
                                    <td class="price-col">₹<?= $cart['price'] ?></td>
                                </tr>
                           <?php }?>
                               

                              
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->

        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-steps-action">
                    <?php if($this->session->userdata('user_email')){ ?>
 
                        <!-- <a href="checkout-review.html" class="btn btn-primary float-right">NEXT</a> -->
                   <?php } ?>
                </div><!-- End .checkout-steps-action -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->