<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Payments</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>

                    <?php $i = 0;
                    foreach ($fetch_active_projects as $category) {
                        if($category->bid_status == 4){

                            $i++;
                        }
                    } ?>
                    <div class=""><small>Payments Done</small>
                        <h4 class="text-info mb-0 font-medium"><?= $i ?></h4>
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
                        <!-- <div style="text-align: center;" >

                                <a href="<?php echo base_url(); ?>index.php/all_orders">
                                <button type="button" class="btn btn-info"style="background-color:">View All Orders</button>
                            </a>
                        </div> -->

                        <h4 class="card-title">Unpaid Projects</h4>
                        <br>


                        <div class="row">
                            <!-- Column -->

                            <?php foreach ($fetch_active_projects as $projects) {
                        if($projects->bid_status == 1){
                                
                                ?>

                                <div class="col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top img-responsive" src="<?php if ($projects->user_profile_pic) { ?>
                                        <?= base_url() ?>uploads/<?= $projects->user_profile_pic ?>
<?php } else { ?>
    <?= base_url() ?>assets/images/users/1.jpg
<?php  } ?>" alt="Profile Pic Not Available">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center mb-3">
                                                <span><i class="ti-calendar"></i> <?= $projects->bid_date ?></span>
                                                <div class="ml-auto">
                                                    <a href="javascript:void(0)" class="link">
                                                        <i class="mdi mdi-briefcase-check"></i> <?= $projects->project_delivery ?> days</a>
                                                </div>
                                            </div>
                                            <h3 class="font-normal"><?= $projects->product_name ?></h3>
                                            <p class="mb-0 mt-2">Bidder Name: <?= $projects->user_name ?></p>
                                            <p class="mb-0 mt-2">Bid Price: ₹<?= $projects->bid_price ?></p>
                                            <p class="mb-0 mt-2">Member Since: <?= $projects->user_date ?></p>

                                            <a href="<?= base_url() ?>tasker_do_payment?all_bids_id=<?= $projects->all_bids_id ?>">

                                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-3">Make Payment</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php  } 
                            }
                            ?>



                            <!-- Column -->
                            <!-- Column -->

                            <!-- Column -->
                            <!-- Column -->

                            <!-- Column -->
                        </div>
                        <br>

                        <h4 class="card-title">Payment Complete</h4>
                        <br>

                        <div class="row">
                            <!-- Column -->

                            <?php foreach ($fetch_active_projects as $projects) {
                                if($projects->bid_status == 4){

                                
                                ?>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top img-responsive" src="<?php if ($projects->user_profile_pic) { ?>
                                        <?= base_url() ?>uploads/<?= $projects->user_profile_pic ?>
<?php } else { ?>
    <?= base_url() ?>assets/images/users/1.jpg
<?php  } ?>" alt="Profile Pic Not Available">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center mb-3">
                                                <span><i class="ti-calendar"></i> <?= $projects->bid_date ?></span>
                                                <div class="ml-auto">
                                                    <a href="javascript:void(0)" class="link">
                                                        <i class="mdi mdi-briefcase-check"></i> <?= $projects->project_delivery ?> days</a>
                                                </div>
                                            </div>
                                            <h3 class="font-normal"><?= $projects->product_name ?></h3>
                                            <p class="mb-0 mt-2">Bidder Name: <?= $projects->user_name ?></p>
                                            <p class="mb-0 mt-2">Bid Price: ₹<?= $projects->bid_price ?></p>
                                            <p class="mb-0 mt-2">Member Since: <?= $projects->user_date ?></p>

                                         

                                                <button class="btn btn-info btn-rounded waves-effect waves-light mt-3">Paid On: <?= $projects->payment_date ?></button>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php  } 
                            
}
?>



                            <!-- Column -->
                            <!-- Column -->

                            <!-- Column -->
                            <!-- Column -->

                            <!-- Column -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>