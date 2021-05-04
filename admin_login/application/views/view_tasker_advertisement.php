<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Projects</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>
                    <div class=""><small>Total Projects</small>
                        <h4 class="text-info mb-0 font-medium"><?= count($fetch_advertisement) ?></h4>
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

                        <?php
                        function limit_text($text, $limit)
                        {
                            if (str_word_count($text, 0) > $limit) {
                                $words = str_word_count($text, 2);
                                $pos   = array_keys($words);
                                $text  = substr($text, 0, $pos[$limit]) . '.....';
                            }
                            return $text;
                        }

                        ?>

                        <h4 class="card-title">View Projects</h4>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Project Name</th>
                                        <th>Project Date</th>
                                       
                                        <th>Front Image</th>
                                      
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($fetch_advertisement)) {

                                        foreach ($fetch_advertisement as $category) { ?>
                                            <tr>


                                                <td style="width: 10%;"><?php echo $i++; ?>.</td>
                                                <td><?php echo $category->product_name; ?>
                                                
                                                <div style="text-align: center; margin:6px " >
                                                    <a href="<?php echo base_url(); ?>all_details_advertisement?advertisement_id=<?php echo $category->advertisement_id; ?>">
                                                        <button type="button" class="btn btn-info">All Info</button>
                                                    </a>
                                                  
                                                </div>
                                            </td>
                                                <th><b><?php echo $category->advertisement_date; ?></b></th>
                                              

                                                <td>
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;"  src="<?php echo base_url() . "uploads/" . $category->front_image; ?>" alt="">
                                                    </div>
                                                <div style="text-align: center; margin:6px " >
                                                    <a href="<?php echo base_url(); ?>index.php/get_advertisement_main_image?advertisement_id=<?php echo $category->advertisement_id; ?>">
                                                        <button type="button" class="btn btn-info">Update Main Image</button>
                                                    </a>
                                                     <a href="<?php echo base_url(); ?>index.php/get_advertisement_images?advertisement_id=<?php echo $category->advertisement_id; ?>">
                                                        <button style="background: #e43e3e;margin: 7px;"type="button" class="btn btn-info">View Inside Images</button>
                                                    </a>
                                                </div>

                                                </td>

                                              
                                                <!-- <td><?php echo $category->product_offer_price; ?></td>
                                                <td><?php echo limit_text($category->product_description, 10); ?></td>
                                                 -->


                                                <td class="actions">
                                                    <!-- <a href="<?php echo base_url(); ?>index.php/get_advertisement?advertisement_id=<?php echo $category->advertisement_id; ?>"><i class="fas fa-edit"></i></a> -->

                                                    <a class="remove" href="<?php echo base_url(); ?>index.php/delete_tasker_advertisement?advertisement_id=<?php echo $category->advertisement_id ; ?>"><i class="fas fa-trash"></i></a>
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