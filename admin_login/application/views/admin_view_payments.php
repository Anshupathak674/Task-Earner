<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Pyaments Done</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>

                    <?php $i = 0;
                    foreach ($fetch_payments as $category) {

                        $i++;
                    } ?>
                    <div class=""><small>Pyaments Done</small>
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
                                        <th>Tasker Name </th>

                                        <th>User Name </th>

                                        <th>Payment Date</th>
                                        <th>Amount </th>
                                        <th>Status</th>
                                 

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($fetch_payments)) {


                                        foreach ($fetch_payments as $category) { ?>
                                            <tr>


                                                <td style="width: 15%;">
                                                    <b>

                                                        <?php echo $i++; ?>.
                                                    </b>





                                                </td>
                                                <td>
                                                    
                                                        <?php echo $category->product_name; ?>
                                                   
                                                </td>
                                                <td>
                                                    
                                                    <?php echo $category->tasker_name; ?>
                                               
                                            </td>
                                            <td>
                                                    
                                                    <?php echo $category->user_name; ?>
                                               
                                            </td>
                                                <td>
                                                    <b>

                                                        <?php echo $category->payment_date; ?>

                                                    </b>


                                                </td>

                                                <td>Price: <b>₹<?php echo $category->bid_price; ?></b> &nbsp; </td>


                                                <td>
                                                    <?php

                                                  
                                                    if ($category->bid_status == 4) { ?>
                                                        <button type="button" style="width: 100%;" class="btn btn-success">Payment Done</button>
                                                    <?php }
                                                    ?>

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