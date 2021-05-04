<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Inner Images</h4>

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>
                    <div class=""><small>Total Items</small>
                        <h4 class="text-info mb-0 font-medium"><?= count($fetch_advertisement_images) ?></h4>
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

                        <h4 class="card-title">Add More Images</h4>

                        <form class="form" action="<?= base_url() ?>index.php/edit_advertisement_images" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="advertisement_id" value="<?php echo $_GET['advertisement_id']

                                                                                ?>">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Add More Inner Images</label>
                                <div class=" col-sm-6">
                                    <input type="file" class="custom-file-input" required name="inside_images">
                                    <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url() ?>index.php/view_tasker_advertisement">
                                    <button type="button" class="btn btn-info" style="background: #e43e3e;margin: 7px;">Back</button>
                                </a>

                            </div>
                        </form>
                        <br>
                        <br>
                        <h4 class="card-title">View Images</h4>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($fetch_advertisement_images)) {


                                        foreach ($fetch_advertisement_images as $category) { ?>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;" src="<?php echo base_url() . "uploads/" . $category->inside_image; ?>" alt="">
                                                    </div>
                                                </td>


                                                <td class="actions">
                                                    <a class="remove" href="<?php echo base_url(); ?>index.php/delete_inside_image?advertisement_id=<?php echo $category->advertisement_id; ?>&inside_images_id=<?= $category->inside_images_id; ?>"><i class="fas fa-trash"></i></a>
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