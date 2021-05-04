<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Read Reviews</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>
                    <div class=""><small>Total Items</small>
                        <h4 class="text-info mb-0 font-medium"><?= count($contact_us_review) ?></h4>
                    </div>
                </div>
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
            <div class="col-12">
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

                        <h4 class="card-title">View Advertisements</h4>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Review</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($contact_us_review)) {


                                        foreach ($contact_us_review as $category) { ?>
                                            <tr>


                                                <td style="width: 10%;"><?php echo $i++; ?>.</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $category->contact_review_date; ?></span> </td>
                                                <th><?php echo $category->contact_name; ?></th>

                                                <td><?php echo $category->contact_phone; ?></td>
                                                <td><?php echo $category->contact_email; ?></td>
                                                <td><?php echo $category->contact_message; ?></td>

                                                <td class="actions">

                                                    <a class="remove" href="<?php echo base_url(); ?>index.php/delete_contact_us_review?contact_us_reviews_id=<?php echo $category->contact_us_reviews_id ; ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else {  ?>
                                        <tr>
                                            <td colspan="5"> records not found</td>
                                        </tr>
                                    <?php } ?>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>