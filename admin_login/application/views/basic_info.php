<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Profile</h4>

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
            <div class="col-md-12">

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

                        <h4 class="card-title">Welcome <?= $this->session->userdata('admin_name') ?></h4>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="fas fa-child"></i></span> <span class="hidden-xs-down">About Us</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="fas fa-phone-square"></i></span> <span class="hidden-xs-down">Contact Us</span></a> </li>

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#privacy" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-airballoon"></i></span> <span class="hidden-xs-down">Privacy</span></a> </li>


                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#team" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-bookmark-check"></i></span> <span class="hidden-xs-down">Our Team</span></a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="p-20">

                                    <form class="form" action="<?= base_url() ?>index.php/basic_info_check" method="POST">



                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" value="<?= $fetch_basic_info['company_name'] ?>" type="text" name="company_name">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Company Email</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_email'] ?>" class="form-control" type="text" name="company_email">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Mobile No.</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_mobile'] ?>" class="form-control" type="text" name="company_mobile">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_address'] ?>" class="form-control" type="text" name="company_address">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Working Days/Hours:</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_working_hour'] ?>" class="form-control" type="text" placeholder="eg: Mon-Sun/9:00 A.M. - 9:00 P.M." name="company_working_hour">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">About Us for Footer:</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="2" name="company_about_us_footer">
                                                <?= $fetch_basic_info['company_about_us_footer'] ?>
                                            </textarea>
                                            </div>
                                        </div>


                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Insta Profile Link</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_insta_link'] ?>" class="form-control" type="text" name="company_insta_link">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">FaceBook Profile Link</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_facebook_link'] ?>" class="form-control" type="text" name="company_facebook_link">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">YouTube Channel Link</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $fetch_basic_info['company_youtube_link'] ?>" class="form-control" type="text" name="company_youtube_link">
                                            </div>
                                        </div>


                                        <div class="col-sm-12" style="margin: auto;text-align: center;">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>

                                    </form>


                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="profile" role="tabpanel" style="padding: 0px;">



                                <div class="col-12">
                                    <div class="card">
                                        <form action="<?= base_url() ?>index.php/about_us_page" method="POST">

                                            <div class="card-body">
                                                <h4 class="card-title">Manage About Us Page</h4>

                                                <textarea class="summernote" name="about_us_page"> <?= $fetch_basic_info['about_us_page'] ?> </textarea>
                                            </div>

                                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>





                            </div>
                            <div class="tab-pane p-20" id="messages" role="tabpanel" style="padding:0px;">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="<?= base_url() ?>index.php/contact_us_page" method="POST">

                                            <div class="card-body">
                                                <h4 class="card-title">Manage Contact Us Page</h4>


                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">Company Location(IFrame Link)</label>
                                                    <div class="col-sm-6">
                                                        <input value="<?= $fetch_basic_info['contact_us_page'] ?>" class="form-control" type="text" name="contact_us_page">
                                                    </div>
                                                </div>



                                                <!-- <textarea class="summernote"  name="contact_us_page"> <?= $fetch_basic_info[''] ?> </textarea> -->

                                            </div>
                                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane p-20" id="privacy" role="tabpanel" style="padding:0px;">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="<?= base_url() ?>index.php/update_privacy" method="POST">

                                            <div class="card-body">
                                                <h4 class="card-title">Manage Privacy Page</h4>

                                                <textarea class="summernote" name="company_privacy"> <?= $fetch_basic_info['company_privacy'] ?> </textarea>

                                            </div>
                                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane p-20" id="terms" role="tabpanel" style="padding:0px;">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="<?= base_url() ?>index.php/update_terms" method="POST">

                                            <div class="card-body">
                                                <h4 class="card-title">Manage Contact Us Page</h4>

                                                <textarea class="summernote" name="company_terms"> <?= $fetch_basic_info['company_terms'] ?> </textarea>

                                            </div>
                                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>








                            <div class="tab-pane  p-20" id="team" role="tabpanel" style="padding: 0px;">



                                <div class="col-12">
                                    <div class="card">

                                        <form action="<?= base_url() ?>team" method="POST" enctype="multipart/form-data">

                                            <div class="card-body">
                                                <h4 class="card-title">Manage Team Members</h4>



                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">Member Name</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" type="text" name="member_name">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">Member Position</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" type="text" name="member_position">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-4 row">
                                                    <label class="col-sm-2 col-form-label">About Member</label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" type="text" name="about_member">
                                                    </div>
                                                </div>


                                                <div class="form-group mt-4  row">
                                                    <label class="col-sm-2 col-form-label">Profile Pic</label>
                                                    <div class=" col-sm-6">
                                                        <input type="file" class="custom-file-input" name="member_pic">
                                                        <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="col-sm-12" style="margin: auto;text-align: center;">
                                                <button type="submit" class="btn btn-info">Add Meber</button>
                                            </div>
                                        </form>
                                        <br>
                                        <br>

                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                    <tr>
                                                        <th>S. No.</th>
                                                        <th>Member Name</th>
                                                        <th>Member Position</th>
                                                        <th>Profice Pic</th>
                                                        <th>About Member</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    if (!empty($fetch_member)) {


                                                        foreach ($fetch_member as $member) { ?>
                                                            <tr>


                                                                <td style="width: 10%;"><?php echo $i++; ?>.</td>
                                                                <td><?php echo $member->member_name; ?></td>
                                                                <td><?php echo $member->member_position; ?></td>

                                                                <td>
                                                                <div style="width: 200px;">
                                                                <img style="width: 100%;" src="<?php echo base_url() ?>uploads/<?php echo $member->member_pic; ?>" alt="">
                                                            </div>
                                                               
                                                            
                                                            </td>
                                                                <td>
                                                                <?php echo $member->about_member; ?>

                                                                </td>


                                                                <td class="actions">
                                                                    <a href="<?php echo base_url(); ?>get_team?team_id=<?php echo $member->team_id; ?>"><i class="fas fa-edit"></i></a>

                                                                    <a class="remove" href="<?php echo base_url(); ?>delete_team?team_id=<?php echo $member->team_id; ?>"><i class="fas fa-trash"></i></a>
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
                </div>
            </div>
        </div>

    </div>