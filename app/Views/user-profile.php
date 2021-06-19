<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo base_url('assets/images/userimg.jpg')?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">
                            <?php echo session()->get('Fname'), ' ', session()->get('Lname') ?></h3>
                        <p class="text-muted text-center"><?php echo session()->get('rank') ?></p>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            <li class="nav-item"><a class="nav-link" href="#aboutme" data-toggle="tab">About me</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName"
                                            placeholder="<?php print_r($_SESSION['Fname']) ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail"
                                            placeholder="<?php print_r($_SESSION['Lname']) ?> " disabled required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2"
                                            placeholder="Old Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2"
                                            placeholder="New Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Full name</strong>

                        <p class="text-muted">
                        <p><?php echo session()->get('Fname'), ' ', session()->get('Lname') ?></p>
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">Dar Es Salaam,Tanzania</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Password</strong>
                        <p><?php echo session()->get('users/password') ?></p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i>Telephone</strong>
                        <p><?php echo session()->get('tel_number') ?></p>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>