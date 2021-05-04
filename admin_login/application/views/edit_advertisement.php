<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Advertisements</h4>

            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-12">
                            <?php if ($msg = $this->session->flashdata('msg')) {
                                if ($msg_class = $this->session->flashdata('msg_class')) {
                            ?>
                                    <div class="alert <?= $msg_class ?>">
                                        <h4> <?= $msg ?> </h4>
                                    </div>
                            <?php         }
                            }

                            ?>
                        </div>


                        <h4 class="card-title">Add Advertisements</h4>

                        <form class="form" action="<?= base_url() ?>index.php/edit_advertisement" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="advertisement_id" value="<?= $fetch_advertisement['advertisement_id'] ?>" >
                            <div class="form-group mt-4 row">
                                <label for="example-month-input2" class="col-sm-3 col-form-label">Select Category</label>
                                <div class="col-sm-6">
                                    <select id="category_id" required name="category_id" class="custom-select col-12">
                                        <option value="<?= $fetch_advertisement['category_id'] ?>" selected=""><?= $fetch_advertisement['category_name'] ?></option>

                                        <?php
                                        foreach ($fetch_category as $category) { ?>
                                            <?php
                                            if ($category->category_id != $fetch_advertisement['category_id']) { ?>
                                                <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                            <?php }
                                            ?>



                                        <?php }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mt-4 row">
                                <label for="example-month-input2" class="col-sm-3 col-form-label">Select Sub Category</label>
                                <div class="col-sm-6">
                                    <select id="sub_category" required name="sub_category_id" class="custom-select col-12">
                                        <option value="<?= $fetch_advertisement['sub_category_id'] ?>" selected=""><?= $fetch_advertisement['sub_category_name'] ?></option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-6">
                                    <input class="form-control" value="<?= $fetch_advertisement['product_name'] ?>" type="text" name="product_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-3 col-form-label">Product Quantity</label>
                                <div class="col-sm-6">
                                    <input class="form-control" required min="0" type="number" value="<?= $fetch_advertisement['product_quantity'] ?>" name="product_quantity">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Actual Price</label>
                                <div class="col-sm-6">
                                    <input class="form-control" value="<?= $fetch_advertisement['product_actual_price'] ?>" type="number" name="product_actual_price" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Offer Price</label>
                                <div class="col-sm-6">
                                    <input value="<?= $fetch_advertisement['product_offer_price'] ?>" class="form-control" type="number" name="product_offer_price" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo ($fetch_advertisement['product_description']) ?>" type="text" name="product_description" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Main Description</label>
                                <div class="col-sm-6">

                            
                                 
                                </div>
                            </div>
                            <textarea required class="summernote" rows="2" name="product_description_main"><?php echo ($fetch_advertisement['product_description_main']) ?></textarea>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">More Info</label>
                                <div class="col-sm-6">
                                   
                                </div>
                            </div>
                            <textarea required class=" summernote" rows="2" name="product_more_description"><?php echo ($fetch_advertisement['product_more_description']) ?></textarea>
                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#category_id').change(function() {
                var category_id = $('#category_id').val();
                if (category_id != '') {
                    $.ajax({
                            url: '<?= base_url(); ?>index.php/fetch_sub_category',
                            type: 'POST',
                            data: {
                                category_id: category_id
                            }
                        })
                        .done(function(response) {
                            var data = $.parseJSON(response);
                            var html = "";
                            html += '<option>Select Sub Category </option>';
                            $.each(data, function(index, val) {
                                html += '<option value="' + val["sub_category_id"] + '">' + val["sub_category_name"] + '</option>';
                            });
                            $('#sub_category').html(html);
                        });

                }
            })
        })
    </script>