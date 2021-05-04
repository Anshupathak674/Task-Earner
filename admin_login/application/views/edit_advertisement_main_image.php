<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Images</h4>

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
            <div class="col-sm-12">
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


                        <h4 class="card-title">Update Images</h4>

                        <form class="form" action="<?= base_url() ?>index.php/edit_advertisement_main_image" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="advertisement_id" value="<?= $fetch_advertisement['advertisement_id'] ?>" >
                            <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Update Main Image</label>
                                    <div class=" col-sm-6">
                                     
                                            <input type="file" class="custom-file-input" required name="front_image">
                                            <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>
                               
                                    </div>
                            </div>

                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url() ?>index.php/view_tasker_advertisement">
                                    <button type="button" class="btn btn-info" style="background: #e43e3e;margin: 7px;" >Back</button>
                                </a>

                            </div>
                        </form><br>
                        <div style="width: 500px; margin:auto; ">
                                                        <img style="width: 100%;border: 2px solid #338fd8;border-radius: 12px;" src="<?php echo base_url() . "uploads/" . $fetch_advertisement['front_image']; ?>" alt="">
                                                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
