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
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="qty-col">Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($cart_items== NULL){ ?>
                                <tr class="product-row">
                                <td colspan="5" >Your cart is empty! </td>

                                </tr>
                                
                            <?php } foreach ($cart_items as $cart) { ?>

                                <tr class="product-row">
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $cart['id'] ?>" class="product-image">
                                                <img src="<?= base_url() ?>admin_login/uploads/<?= $cart['image'] ?>" alt="product">
                                            </a>
                                        </figure>
                                        <h2 class="product-title">
                                            <a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $cart['id'] ?>"><?= $cart['name'] ?></a>
                                        </h2>
                                    </td>
                                    <td>₹<?= $cart['price'] ?></td>
                                    <td>
                                        <input class="vertical-quantity form-control update_cart " name="qty" value="<?= $cart['qty'] ?>" id="<?= $cart['rowid'] ?>" type="text">
                                    </td>
                                    <td>₹<?= $cart['subtotal'] ?></td>
                                </tr>

                                <tr class="product-action-row">
                                    <td colspan="4" class="clearfix">
                                        <div class="float-left">
                                            <!-- <a href="#" class="btn-move">Move to Wishlist</a> -->
                                        </div><!-- End .float-left -->

                                        <div class="float-right">
                                            <a href="#" title="Update product" class="btn-edit update_cart" data-rowid="<?= $cart['rowid'] ?>"><span class="sr-only">Update Cart</span><i class="icon-pencil"></i></a>
                                            <a href="#" class="btn-remove destroy_cart_item icon-cancel " data-rowid="<?= $cart['rowid'] ?>" title="Remove Product"></a>
                                        </div><!-- End .float-right -->
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="<?= base_url() ?>index.php/view_products" class="btn btn-outline-secondary">Continue Shopping</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <a href="#" class="btn btn-outline-secondary btn-clear-cart clear_cart ">Clear Shopping Cart</a>
                                        <!-- <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a> -->
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->

                <div class="cart-discount">
                    <h4>Apply Discount Code</h4>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter discount code" required>
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                            </div>
                        </div><!-- End .input-group -->
                    </form>
                </div><!-- End .cart-discount -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>Summary</h3>

                    <!-- <h4>
                        <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                    </h4> -->

                    <div class="collapse" id="total-estimate-section">
                        <form action="#">
                            <div class="form-group form-group-sm">
                                <label>Country</label>
                                <div class="select-custom">
                                    <select class="form-control form-control-sm">
                                        <option value="USA">United States</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="China">China</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-sm">
                                <label>State/Province</label>
                                <div class="select-custom">
                                    <select class="form-control form-control-sm">
                                        <option value="CA">California</option>
                                        <option value="TX">Texas</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-sm">
                                <label>Zip/Postal Code</label>
                                <input type="text" class="form-control form-control-sm">
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-custom-control">
                                <label>Flat Way</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="flat-rate">
                                    <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-custom-control">
                                <label>Best Rate</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="best-rate">
                                    <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->
                        </form>
                    </div><!-- End #total-estimate-section -->

                    <table class="table table-totals">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>₹<?php echo $this->cart->total(); ?>.00</td>
                            </tr>

                            <tr>
                                <td>Tax</td>
                                <td>₹0.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Order Total</td>
                                <td>₹<?php echo $this->cart->total(); ?>.00</td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php 
  $i = 0;
 foreach ($this->cart->contents() as $items) { ?>
                                                    
           <?php $i=$i+1; ?>

             <?php } ?>
                    <div class="checkout-methods">
                        <?php if($i==NULL){ ?>
                            <a href="<?= base_url() ?>index.php/view_products" class="btn btn-block btn-sm btn-primary">Continue Shopping</a>
                        <?php }else{ ?>
                            <a href="<?= base_url() ?>index.php/checkout" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
                        <?php } ?>
                       
                       
                    </div><!-- End .checkout-methods -->
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->

<script>
    $("a.update_cart").click(function() {
        var rowid = $(this).data("rowid");
		var update_quantity = document.getElementById(rowid);
        var update_quantity = $(update_quantity).val();

        $.ajax({
                url: '<?php echo base_url(); ?>index.php/update_cart',
                type: 'POST',
                data: {
                    rowid: rowid,
                    update_quantity: update_quantity
                },
            })
            .done(function() {
                location.reload();
            });
    });
</script>


<script>
    $(".clear_cart").click(function() {
 
        $.ajax({
                url: '<?php echo base_url(); ?>index.php/clear_cart',
                type: 'POST',
                data: {
                   
                },
            })
            .done(function() {
                location.reload();
            });
    });
</script>

