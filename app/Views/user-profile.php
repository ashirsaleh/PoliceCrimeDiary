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

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder">
                                <div class="container">
                                    <div class="picture-container">
                                        <h6 class="">Set your profile picture</h6>
                                        <div class="picture">
                                            <img src="" class="picture-src" id="wizardPicturePreview" title="">
                                            <input type="file" id="wizard-picture" class="">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center p-2">
                                        <button class="btn btn-sm bg-primary ">Save your Picture</button>
                                    </div>
                                </div>
                            </div>
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

<script>
$(document).ready(function() {
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function() {
        readURL(this);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>