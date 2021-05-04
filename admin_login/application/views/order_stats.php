<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">All bids</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>

                    <?php $i = 0;
                    foreach ($fetch_user_orders as $category) { 
                        
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
                                <button type="button" class="btn btn-info"style="background-color:">View All Orders</button>
                            </a>
                        </div> -->

                        <br>
                        <h4 class="card-title">All Bids</h4>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Project Name </th>
                                        <th>Bid Date</th>
                                        <th>Bid Pirce & Delivery Date</th>
                                        <th>Status</th>
                                        <th>View More Details</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($fetch_user_orders)) {


                                        foreach ($fetch_user_orders as $category) { ?>
                                            <tr>


                                                <td style="width: 15%;">
                                                    <b>

                                                        <?php echo $i++; ?>.
                                                    </b>
                                                    

                                                      

                                               
                                            </td>
                                                <td>
                                                <a style="color: #49556d;" href="<?= base_url() ?>all_details_admin_advertisement?advertisement_id=<?= $category->advertisement_id ?>">
                                                <?php echo $category->product_name; ?>
                                                </a>
                                                </td>
                                                <td>
                                                <b>

                                                <?php echo $category->bid_date; ?>
                                                        
                                                    </b>
                                                        

                                                </td>

                                                <td>Price: <b>₹<?php echo $category->bid_price; ?></b> &nbsp; & Delivery: <b><?php echo $category->project_delivery; ?> Days<b> </td>


                                                <td>
                                              <?php 
                                             
                                                if($category->bid_status==1){ ?>
 <button style="width: 100%"type="button" class="btn btn-info">Pending </button>
                                                    <?php }
                                                     if($category->bid_status==2){ ?>
                            
                            <button style="background: #e43e3e;width: 100%;"type="button" class="btn btn-info">Rejected</button>
                                                        <?php }
                                                         if($category->bid_status==3){ ?>
<button type="button" style="width: 100%;" class="btn btn-info">Bid Accepted</button>
                                                            <?php }
                                                              if($category->bid_status==4){ ?>
                              <button type="button" style="width: 100%;" class="btn btn-success">Payment Done</button>
                                                                <?php }
                                              ?>
                                                
                                                </td>
                                                <td>
                                                    <div style="text-align: center; margin:6px " >
                                                    <a href="<?php echo base_url(); ?>index.php/view_order_details?all_bids_id=<?php echo $category->all_bids_id; ?>">
                                                        <button type="button" class="btn waves-effect waves-light btn-success">View Deviliry Details</button>
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