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
        <ul class="checkout-progress-bar">
            <li>
                <span>Shipping</span>
            </li>
            <li class="active">
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>
                    <?php
                    $i = 0;
                    foreach ($this->cart->contents() as $items) { ?>

                        <?php $i = $i + 1; ?>

                    <?php } ?>
                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section"><?php echo $i ?> product<?php if ($i == 1) {
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo ('s');
                                                                                                                                                                                                } ?> in Cart</a>
                    </h4>

                    <div class="collapse" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>

                                <?php foreach ($this->cart->contents() as $cart) { ?>
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
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Ship To:
                        <a href="<?= base_url() ?>index.php/checkout" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <address>
                        <?= $checkout_name ?> <br>
                        <?= $checkout_address ?>, <?= $checkout_city ?>, <br>
                        <?= $checkout_state ?> - <?= $checkout_pin_code ?>, <br>
                        India<br>
                        (+91) <?= $checkout_mobile ?>
                    </address>
                </div><!-- End .checkout-info-box -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Shipping Method:
                        <!-- <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a> -->
                    </h3>

                    <p>Flat Rate - Fixed</p>
                </div><!-- End .checkout-info-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-8 order-lg-first">
                <div class="checkout-payment">
                    <h2 class="step-title">Payment Method:</h2>

                    <h4>Check / Money order</h4>

                    <div class="form-group-custom-control">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                            <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
                        </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-group -->

                    <div id="checkout-shipping-address">
                        <address>
                            <?= $checkout_name ?> <br>
                            <?= $checkout_address ?>, <?= $checkout_city ?>, <br>
                            <?= $checkout_state ?> - <?= $checkout_pin_code ?>, <br>
                            India<br>
                            (+91) <?= $checkout_mobile ?>
                        </address>

                        <form action="<?= base_url() ?>index.php/place_order" method="POST">
                        <input type="hidden" name="checkout_name" value="<?= $checkout_name ?>">
                        <input type="hidden" name="checkout_address" value=" <?= $checkout_address ?>,<?= $checkout_city ?>,<?= $checkout_state ?>-<?= $checkout_pin_code ?>,India">
                        <input type="hidden" name="checkout_mobile" value="<?= $checkout_mobile ?>">


                        <div style="text-align: center;">
                            <button class="btn btn-primary" type="submit">Place Order</button>
                        </div>

                    </form>
                    </div><!-- End #checkout-shipping-address -->

                    <div id="new-checkout-address" class="show">

                    </div><!-- End #new-checkout-address -->


                  


                </div><!-- End .checkout-payment -->

                <!-- <div class="checkout-discount">
                    <h4>
                        <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                    </h4>

                    <div class="collapse" id="checkout-discount-section">
                        <form action="#">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter discount code" required>
                            <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                        </form>
                    </div>
                </div> -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->