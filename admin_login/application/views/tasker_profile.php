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

                        <h4 class="card-title">Welcome <?= $this->session->userdata('tasker_name') ?></h4>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                           
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="p-20">

                                    <form class="form" action="<?= base_url() ?>index.php/update_tasker_profile" method="POST" enctype="multipart/form-data">



                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" value="<?= $tasker_profile['tasker_name'] ?>" type="text" name="tasker_name">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-6">
                                                <input disabled value="<?= $tasker_profile['tasker_email'] ?>" class="form-control" type="text" name="tasker_email">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Mobile No.</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $tasker_profile['tasker_mobile'] ?>" class="form-control" type="number" name="tasker_mobile">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-6">
                                                <input value="<?= $tasker_profile['tasker_address'] ?>" class="form-control" type="text" name="tasker_address">
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-6">
                                                <input  value="<?= $tasker_profile['tasker_password'] ?>" class="form-control" type="text" placeholder="eg: Mon-Sun/9:00 A.M. - 9:00 P.M." name="tasker_password">
                                            </div>
                                        </div>



                                        <div class="form-group mt-4 row">
                                            <label class="col-sm-2 col-form-label">Profile Pic</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="file" name="tasker_profile_pic">
                                            </div>
                                        </div>

                                        <div class="col-sm-12" style="margin: auto;text-align: center;">
                                            <button type="submit" class="btn btn-info">Update Profile</button>
                                        </div>

                                    </form>
                                    <br>
                                        <br>

                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                    <tr>
                                                        <th>Current Profile Pic</th>
                                                      

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                  
                                                            <tr>

                                                            <td>
                                                                <div style="width: 200px;">
                                                                <img style="width: 100%;" src="<?php echo base_url() ?>uploads/<?php echo $tasker_profile['tasker_profile_pic']; ?>" alt="">
                                                            </div>
                                                               
                                                            
                                                            </td>
                                                              
                                                              
                                                               
                                                            </tr>
                                                      
                                                   


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