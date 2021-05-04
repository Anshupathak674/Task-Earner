<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Manage Sub Categories</h4>
                     
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                             
                            </div>
                            <div class=""><small>Total Items</small>
                                <h4 class="text-info mb-0 font-medium"><?= count($fetch_sub_category) ?></h4></div>
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
                              
                                <h4 class="card-title">Add Sub Category</h4>
                               
                                <form class="form" action="<?= base_url() ?>index.php/sub_category_check" method="POST" >

                                <div class="form-group mt-4 row">
                                        <label for="example-month-input2" class="col-sm-3 col-form-label">Select Category</label>
                                        <div class="col-sm-6">
                                            <select required name="category_id" class="custom-select col-12" >
                                            <option selected="">Select Category</option>

                                            <?php
                                                foreach ($fetch_category as $category) { ?>
                                                <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>

                                            
                                           <?php }
                                            ?>
                                             
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Enter Sub Category Name</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="sub_category_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin: auto;text-align: center;">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                
                                </form>
                                <br>
                            <br>
                                <h4 class="card-title">View Categories</h4>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Category Name</th>
                                                <th>Sub Category Name</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1;
                                            if (!empty($fetch_sub_category)) {


                                                foreach ($fetch_sub_category as $category) { ?>
                                        <tr>


                                            <td style="width: 10%;" ><?php echo $i++; ?>.</td>
                                            <td><?php echo $category->category_name; ?></td>
                                            <td><?php echo $category->sub_category_name; ?></td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $category->sub_category_date; ?></span> </td>


                                            <td class="actions">
                                                <a class="remove" href="<?php echo base_url(); ?>index.php/delete_sub_category?sub_category_id=<?php echo $category->sub_category_id; ?>" ><i class="fas fa-trash"></i></a>
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
  
          