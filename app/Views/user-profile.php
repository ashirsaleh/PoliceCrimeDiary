<style>
/*Profile Pic Start*/
.picture-container {
    position: relative;
    cursor: pointer;
    text-align: center;
}

.picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}

.picture:hover {
    border-color: #2ca8ff;
}

.content.ct-wizard-green .picture:hover {
    border-color: #05ae0e;
}

.content.ct-wizard-blue .picture:hover {
    border-color: #3472f7;
}

.content.ct-wizard-orange .picture:hover {
    border-color: #ff9500;
}

.content.ct-wizard-red .picture:hover {
    border-color: #ff3b30;
}

.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src {
    width: 100%;
}
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <form action="<?php echo base_url('userprofile/store'); ?>" name="ajax_form" id="ajax_form"
                    method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="profile-pic-wrapper">
                                <div class="pic-holder">
                                    <div class="container">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <i class="picture-src fa fa-user fa-5x p-1" id="wizardPicturePreview"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="profile-username text-center">
                                <?php echo ucfirst($user['Fname']), ' ', ucfirst($user['Lname']); ?></h3>
                            <p class="text-muted text-center"><?php echo $user['rank']; ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </form>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutme" data-toggle="tab">About Me</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="aboutme">
                                <!-- The timeline -->
                                <div class="form-horizontal">
                                    <strong><i class="fas fa-book mr-1"></i> Full name</strong>

                                    <p class="text-muted">
                                    <p><?php echo ucfirst($user['Fname']), ' ', ucfirst($user['Lname']) ?></p>
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-book mr-1"></i> Police Number </strong>

                                    <p class="text-muted">
                                    <p><?php echo ucfirst($user['policeNo']); ?></p>
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Phone Number</strong>

                                    <p class="text-muted"><?php echo ucfirst($user['tel_number']) ?></p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i>Description</strong>
                                    <p><?php echo ucfirst($user['description']) ?></p>
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <!-- <div class="tab-pane hidden" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName"
                                                placeholder="<?php print_r($_SESSION['Fname']) ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputname2"
                                                placeholder="<?php print_r($_SESSION['Lname']) ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputOld" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">New
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Confirm
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="confirmPaswword"
                                                placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>