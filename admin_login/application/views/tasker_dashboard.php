<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

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
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- ============================================================== -->
                    <!-- Info Box -->
                    <!-- ============================================================== -->
                    <div class="card-body border-top">
                        <div class="row mb-0">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                    <div><span>Active Projects</span>
                                        <h3 class="font-medium mb-0"><?php
                                                                        $i == 0;
                                                                        foreach ($fetch_advertisement as $add) {
                                                                            $i++;
                                                                        }
                                                                        echo ($i);
                                                                        ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                    <div><span>New Bids</span>
                                        <h3 class="font-medium mb-0"><?php
                                                                        $j = 0;
                                                                        foreach ($all_bids as $bids) {
                                                                            if ($bids->bid_status == 1) {
                                                                                $j++;
                                                                            }
                                                                        }
                                                                        echo ($j);
                                                                        ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
                                    <div><span>Overall Projects</span>
                                        <h3 class="font-medium mb-0"><?= $i; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>Payout</span>
                                        <h3 class="font-medium mb-0">68.90</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">New Bids</h4>
                                <!-- <h5 class="card-subtitle">Overview of Latest Month</h5> -->
                            </div>
                            <div class="ml-auto d-flex no-block align-items-center">
                                <a href="<?php echo base_url(); ?>index.php/tasker_bids_stats">
                                    <button type="button" class="btn btn-info">View All</button>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Project Name</th>
                                        <th class="border-0">Bidder Name</th>
                                        <th class="border-0">Bid Price</th>
                                        <th class="border-0">Deliver In</th>
                                        <th class="border-0">View More</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if ($all_bids) {
                                        foreach ($all_bids as $bids) { ?>
                                            <tr>

                                                <td><b><?= $bids->product_name ?></b></td>
                                                <td><b><?= $bids->user_name ?></b></td>
                                                <td><b><?= $bids->bid_price ?></b></td>
                                                <td><b><?= $bids->project_delivery ?></b></td>
                                                <td>
                                                    <div class="ml-auto d-flex no-block align-items-center">
                                                        <a href="<?php echo base_url(); ?>index.php/tasker_bids_stats">
                                                            <button type="button" class="btn btn-info">View All</button>
                                                        </a>
                                                    </div>
                                                </td>


                                            </tr>
                                        <?php  }
                                    } else { ?>
                                        <tr>
                                            <td colspan="6"> records not found</td>
                                        </tr>
                                    <?php }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h4>Recent Projects </h4>
        </div>


        <div class="row">
            <!-- column -->

            <!-- column -->

            <!-- ============================================================== -->
            <!-- Info Box -->
            <?php

            foreach ($fetch_advertisement as $add) { ?>
                <div class="col-lg-4">
                    <div class="card  card-hover">
                        <div class="card-body">
                            <h4 class="card-title"><?= $add->product_name ?></h4>
                            <div style="width: 200px;">
                                <img style="width: 50%;" src="<?php echo base_url() ?>uploads/<?php echo $add->front_image; ?>" alt="">
                            </div>
                            <div class="d-flex no-block align-items-center mt-4">
                                <div class="">
                                    <h3 class="font-medium mb-0">₹ <?= $add->product_offer_price ?></h3><span class="">Total Bounce</span>
                                </div>
                                <div class="ml-auto">
                                    <div style="max-width:150px; height:60px;" class="mb-5">
                                        <canvas id="bouncerate"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  }

            ?>



        </div>

        <div style="margin: auto;text-align:center;width:max-content" class="ml-auto d-flex no-block align-items-center">
            <a href="<?php echo base_url(); ?>index.php/tasker_bids_stats">
                <button type="button" style="margin: auto;text-align:center;width:150px;height:45px" class="btn btn-info">View All</button>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>