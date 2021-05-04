<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Update Our Team</h4>

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


                        <h4 class="card-title">Update Our Team</h4>





                        <form class="form" action="<?= base_url() ?>edit_team" enctype="multipart/form-data"  method="POST">
                            <input type="hidden" name="team_id" value="<?= $get_team['team_id'] ?>" >
                         

                            <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">Member Name</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" value="<?= $get_team['member_name'] ?>" type="text" name="member_name">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">Member Position</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" value="<?= $get_team['member_position'] ?>" type="text" name="member_position">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">About Member</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" value="<?= $get_team['about_member'] ?>" type="text" name="about_member">
                                                    </div>
                                                </div>


                                                <div class="form-group mt-4  row">
                                                    <label class="col-sm-2 col-form-label">Profile Pic</label>
                                                    <div class=" col-sm-6">
                                                        <input type="file" class="custom-file-input" name="member_pic">
                                                        <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>
                                                    </div>
                                                </div>


                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>