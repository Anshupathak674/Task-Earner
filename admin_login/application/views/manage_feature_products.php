<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Feature Products</h4>
                     
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                             
                            </div>
                            <div class=""><small>Max 6 feature products</small>
                                <!-- <h4 class="text-info mb-0 font-medium"><?= count($fetch_sub_category) ?></h4></div> -->
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
                              <?php if(count($products) > 5){ ?>
                                <h4 class="card-title">You Can Add Only 6 Feature Products</h4>
                                
                             <?php }else{ ?>
                                <h4 class="card-title">Add Feature Products</h4>
                               
                               <form class="form" action="<?= base_url() ?>index.php/add_feature_product" method="POST" >

                               <div class="form-group mt-4 row">
                                       <label for="example-month-input2" class="col-sm-3 col-form-label">Select Product</label>
                                       <div class="col-sm-6">
                                       <select class="select2 form-control custom-select" style="width: 100%; height:36px;"  name="advertisement_id" >
                                   <option>Select</option>
                                   <?php
                                               foreach ($view_advertisement as $category) { ?>
                                       <option value="<?= $category->advertisement_id ?>"><?= $category->product_name ?></option>
                                   
                                       <?php }
                                           ?>
                               </select>
                                       </div>
                                   </div>

                                   <div class="col-sm-12" style="margin: auto;text-align: center;">
                                   <button type="submit" class="btn btn-info">Submit</button>
                               </div>
                               
                               </form>
                            <?php } ?>
                               
                                <br>
                            <br>
                                <h4 class="card-title">View Categories</h4>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1;
                                            if (!empty($products)) {


                                                foreach ($products as $category) { ?>
                                        <tr>


                                            <td style="width: 10%;" ><?php echo $i++; ?>.</td>
                                            <td><?php echo $category->product_name; ?></td>
                                            <td>
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;"  src="<?php echo base_url() . "uploads/" . $category->front_image; ?>" alt="">
                                                    </div>
                                                </td>
                                            <td class="actions">
                                                <a class="remove" href="<?php echo base_url(); ?>index.php/remove_feature_product?advertisement_id=<?php echo $category->advertisement_id; ?>" ><i class="fas fa-trash"></i></a>
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
  
          