<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Manage Front Page</h4>

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

                        <!-- <h4 class="card-title">Welcome <?= $this->session->userdata('admin_name') ?></h4> -->

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Main Banner</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="fas fa-child"></i></span> <span class="hidden-xs-down">Mini Banner</span></a> </li>
                            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"><i class="fas fa-phone-square"></i></span> <span class="hidden-xs-down">Sale Items</span></a> </li> -->

                            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#privacy" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-airballoon"></i></span> <span class="hidden-xs-down">Quotes</span></a> </li> -->
                            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#terms" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-bookmark-check"></i></span> <span class="hidden-xs-down">Terms Of Use</span></a> </li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="p-20">


                                    <form class="form" action="<?= base_url() ?>index.php/main_banner" method="POST" enctype="multipart/form-data">

                                        <h4 class="card-title">Manage Main Banners</h4>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Main Banner 1</label>
                                            <div class=" col-sm-6">

                                                <input type="file" class="custom-file-input" name="main_banner1">
                                                <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Main Banner 2</label>
                                            <div class=" col-sm-6">

                                                <input type="file" class="custom-file-input" name="main_banner2">
                                                <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Main Banner 3</label>
                                            <div class=" col-sm-6">

                                                <input type="file" class="custom-file-input" name="main_banner3">
                                                <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                            </div>
                                        </div>


                                        <div class="col-sm-12" style="margin: auto;text-align: center;">
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>

                                    </form>
                                    <h4 class="card-title">View Images</h4>

                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">

                                            <tbody>

                                                <tr>
                                                    <th>Main Banner1</th>
                                                    <td>
                                                        <div style="width: 200px;">
                                                            <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['main_banner1'] ?>" alt="">
                                                        </div>


                                                    </td>


                                                </tr>

                                                <tr>
                                                    <th>Main Banner 2</th>
                                                    <td>
                                                        <div style="width: 200px;">
                                                            <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['main_banner2'] ?>" alt="">
                                                        </div>


                                                    </td>


                                                </tr>

                                                <tr>
                                                    <th>Main Banner 3</th>
                                                    <td>
                                                        <div style="width: 200px;">
                                                            <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['main_banner3'] ?>" alt="">
                                                        </div>
                                                    </td>


                                                </tr>



                                            </tbody>

                                        </table>
                                    </div>



                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="profile" role="tabpanel" style="padding: 0px;">

                                <form class="form" action="<?= base_url() ?>index.php/mini_banner" method="POST" enctype="multipart/form-data">

                                    <h4 class="card-title">Manage Mini Banners</h4>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mini Banner 1</label>
                                        <div class=" col-sm-6">

                                            <input type="file" class="custom-file-input" name="mini_banner1">
                                            <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mini Banner 2</label>
                                        <div class=" col-sm-6">

                                            <input type="file" class="custom-file-input" name="mini_banner2">
                                            <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mini Banner 3</label>
                                        <div class=" col-sm-6">

                                            <input type="file" class="custom-file-input" name="mini_banne3">
                                            <label class="custom-file-label" for="inputGroupFile01">Single Image Upload</label>

                                        </div>
                                    </div>


                                    <div class="col-sm-12" style="margin: auto;text-align: center;">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>

                                </form>


                                <h4 class="card-title">View Images</h4>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <tbody>

                                            <tr>
                                                <th>Mini Banner1</th>
                                                <td>
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['mini_banner1'] ?>" alt="">
                                                    </div>


                                                </td>


                                            </tr>

                                            <tr>
                                                <th>Mini Banner 2</th>
                                                <td>
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['mini_banner2'] ?>" alt="">
                                                    </div>


                                                </td>


                                            </tr>

                                            <tr>
                                                <th>Mini Banner 3</th>
                                                <td>
                                                    <div style="width: 200px;">
                                                        <img style="width: 100%;" src="<?= base_url() ?>uploads/<?= $fetch_main_banner['mini_banner3'] ?>" alt="">
                                                    </div>
                                                </td>


                                            </tr>



                                        </tbody>

                                    </table>
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

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>