<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Criminals</h3>
                <div class="float-right">
                    <!--  -->
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Case Number</th>
                            <th>Rank</th>
                            <th>Telephone Number</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                     if (empty($users)){
                         echo "<tr><td colspan='6' class='' style='color: red; text-align: center;' ><h4>There are No Records</h4></td></tr>";
                     }else{
                         $counter = 1;
                         foreach ($users as $users){ 
                            ?>
                        <tr>
                            <td><?php echo $users['Fname'].' '. $users['Lname']; ?></td>
                            <td><?php echo $users['policeNo']; ?></td>
                            <td><?php echo $users['rank']; ?></td>
                            <td><?php echo $users['tel_number']; ?></td>
                            <td><?php echo $users['age']; ?></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" data-id1="<?php echo $users['policeId']; ?>"
                                    data-toggle="modal" data-target="#modal-view" href="#">
                                    <i class="fas fa-folder"></i>View
                                </a>
                                <a class="btn btn-info btn-sm" href="#" data-id2="<?php echo $users['policeId']; ?>"
                                    data-toggle="modal" data-target="#modal-edit">
                                    <i class="fas fa-pencil-alt"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm modal-delete"
                                    data-id3="<?php echo $users['policeId']; ?>">
                                    <i class="fas fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                            $counter++;
                         }
                        }
                        ?>
                        </tfoot>
                </table>
                <hr>
                <div class="d-flex justify-content-center">
                    <a type="button" class="btn btn-primary" href="form1">
                        Record Crime
                    </a>
                </div>

                <div class="float-center">

                </div>
                <div class="modal fade" id="modal-add">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">Add new user </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('adduser')?>" method="POST">
                                    <div class="form-group">
                                        <label for="inputFirstname">First name</label>
                                        <input type="text" name="Fname" id="inputFirstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLastname">Last name</label>
                                        <input type="text" name="Lname" id="inputLastname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPoliceNo">Police Identification Number</label>
                                        <input type="text" name="policeNo" id="inputPoliceNo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Rank</label>
                                        <select id="inputStatus" name="rank" class="form-control custom-select">
                                            <option selected disabled>Select Rank</option>
                                            <option>Police Officer</option>
                                            <option>Head Of Station</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">User password</label>
                                        <input type="password" name="password" id="passowrd" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Short Description </label>
                                        <textarea id="inputDescription" name="description" class="form-control"
                                            rows="4"></textarea>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-3">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Add " class="btn btn-success float-right">
                                </div>
                                </form>
                            </div>
                            <br>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit user details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('edituser')?>" method="POST">
                                    <div class="form-group">
                                        <label for="inputFirstname">First name</label>
                                        <input type="text" name="Fname" id="inputFirstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLastname">Last name</label>
                                        <input type="text" name="Lname" id="inputLastname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPoliceNo">Police Identification Number</label>
                                        <input type="text" name="policeNo" id="inputPoliceNo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Rank</label>
                                        <select id="inputStatus" name="rank" class="form-control custom-select">
                                            <option selected disabled>Select Rank</option>
                                            <option>Police Officer</option>
                                            <option>Head Of Station</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">User password</label>
                                        <input type="password" name="password" id="passowrd" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Short Description </label>
                                        <textarea id="inputDescription" name="description" class="form-control"
                                            rows="4"></textarea>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-3">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Add " class="btn btn-success float-right">
                                </div>
                                </form>
                            </div>
                            <br>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-view">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">View user</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h4>Full name: <span
                                        class=""><?php echo session()->get('Fname'), ' ', session()->get('Lname') ?></span>
                                </h4>
                            </div>
                            <br>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
let link = document.querySelector('.criminals');
link.classList.add('active');
</script>