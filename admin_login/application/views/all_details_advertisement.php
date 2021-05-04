<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <!-- <h4 class="page-title">View Order Details</h4> -->
                     
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                             
                            </div>
                            <!-- <div class=""><small>Total Items</small> -->
                                <!-- <h4 class="text-info mb-0 font-medium"><?= count($fetch_category) ?></h4></div> -->
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
                              
                                <h4 class="card-title">View All Project Details</h4>
                              
                            <br>


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <!-- <thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                               
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <tr>
                                                <th style="width: 50%;" >Project Date</th>
                                                <th> <b> <?= $fetch_advertisement['advertisement_date'] ?></b></th>
                                            </tr>
                                            
                                            <tr>
                                            <th>Project Name</th>
                                            <th> <b> <?= $fetch_advertisement['product_name'] ?></b></th>
                                            </tr>

                                            <tr>
                                            <th>Category</th>
                                            <th> <b> <?= $fetch_advertisement['category_name'] ?></b></th>
                                            </tr>

                                            <tr>
                                            <th>Sub Category</th>
                                            <th> <b> <?= $fetch_advertisement['sub_category_name'] ?></b></th>
                                            </tr>


                                            <tr>
                                            <th>Offer Price</th>
                                            <th> <b> <?= $fetch_advertisement['product_offer_price'] ?></b></th>
                                            </tr>
                                            <tr>
                                            <th>Description</th>
                                            <th> <b> <?= $fetch_advertisement['product_description'] ?></b></th>
                                            </tr>

                                            <tr>
                                            <th>Main Description</th>
                                            <th> <b> <?= $fetch_advertisement['product_description_main'] ?></b></th>
                                            </tr>
                                          

                                            <tr>
                                            <th>More Details</th>
                                            <th> <b> <?= $fetch_advertisement['product_more_description'] ?></b></th>
                                            </tr>

                                        </tbody>
                                    
                                    </table>
                                    <div style="text-align: center;" >

                                        
                                        <button onclick="goBack()" type="button" class="btn btn-info">Back</button>
                                   
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
  
          