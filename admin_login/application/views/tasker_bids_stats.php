<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">All Orders</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>

                    <?php $i = 0;
                    foreach ($all_bids as $category) { 
                        $i++;

                     } ?>
                    <div class=""><small>All Bids</small>
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
                                <button type="button" class="btn btn-info"style="background-color:">View All Bids</button>
                            </a>
                        </div> -->

                        <br>
                        <h4 class="card-title">View All Bids</h4>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Project Name</th>
                                        <th>Bidder Name</th>
                                        <th>Bid Price</th>
                                        <th>Deliver Date</th>
                                        <th>Bid Date</th>

                                        <th>View More Details</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($all_bids)) {


                                        foreach ($all_bids as $category) { ?>
                                            <tr>


                                                <td style="width: 15%;">

                                                        <?php if($category->bid_status== 0){ ?>
                                                            <a href="<?php echo base_url(); ?>index.php/accept_bid?all_bids_id=<?php echo $category->all_bids_id; ?>&user_details_id=<?= $category->user_details_id ?>&add_id=<?= $category->add_id ?>">
                                                        <button type="button" class="btn btn-info"style="width: 100%;background-color:">Accept </button>
                                                    </a>

                                                    <a href="<?php echo base_url(); ?>index.php/reject_bid?all_bids_id=<?php echo $category->all_bids_id; ?>">
                                                        <button style="background: #e43e3e;margin: 5px 0px;width: 100%;"type="button" class="btn btn-info">Reject</button>
                                                    </a>
                                                       <?php }elseif($category->bid_status== 1){?>

                                                        <a href="#" class="commet" data-uid="u<?= $category->user_details_id ?>" >
                                                        <button style="background-color: #3acc42;margin: 5px 0px;width: 100%;"type="button" class="btn btn-info">Open Chat</button>
                                                        </a>
                                                
                                                      <?php }elseif($category->bid_status == 4){?>

                                                        <button style="margin: 5px 0px;width: 100%;"type="button" class="btn btn-success">Completed</button>

                                                      <?php }else{ ?>
                                                        <button style="background-color: #e43e3e;margin: 5px 0px;width: 100%;"type="button" class="btn btn-info">Rejected</button>
                                                      <?php } ?>

                                               
                                            </td>
                                                <td>
                                                <a href="" style="color: #4b6173">
                                                    <?php echo $category->product_name; ?>
                                                </a>    
                                                </td>
                                                <!-- <td>
                                                        
                                                        <div style="width: 200px;">
                                                            <img style="width: 100%;" src="<?php echo base_url() . "uploads/" . $category->front_image; ?>" alt="">
                                                        </div>
                                                        

                                                </td> -->
                                                <td><b><?php echo $category->user_name; ?></b></td>

                                                <td><b>₹<?php echo $category->bid_price; ?></b> </td>
                                                <td><b><?php echo $category->project_delivery; ?> Days</b> </td>


                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $category->bid_date; ?></span> </td>
                                                <td>
                                                    <div style="text-align: center; margin:6px " >
                                                    <a href="<?php echo base_url(); ?>index.php/view_proposal_details?all_bids_id=<?php echo $category->all_bids_id; ?>">
                                                        <button type="button" class="btn waves-effect waves-light btn-success">View Proposal Details</button>
                                                    </a>
                                                </div>
                                                </td>

                                            </tr>
                                        <?php }
                                    } else {  ?>
                                        <tr>
                                            <td colspan="2"> records not found</td>
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