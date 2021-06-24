<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Defendant</h3>
                <div class="float-right">
                    <!--  -->
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Time Arrested</th>
                            <th>Location Arrested</th>
                            <th>Relationship</th>
                            <th>Age of a Person</th>
                            <th>Amount Of Bail</th>
                            <th>All charges</th>
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
                            <td><?php echo $defendants['Fname'].' '. $users['Lname']; ?></td>
                            <td><?php echo $defendants['t_arrested']; ?></td>
                            <td><?php echo $defendants['L_location']; ?></td>
                            <td><?php echo $defendants['relaltionship']; ?></td>
                            <td><?php echo $defendants['age']; ?></td>
                            <td><?php echo $defendants['bail']; ?></td>
                            <td><?php echo $defendants['charges']; ?></td>
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
                    <a type="button" class="btn btn-primary" href="crime">
                        Record Crime
                    </a>
                </div>

                <div class="float-center">

                </div>
                <div>
                    <div class="modal fade" id="modal-edit">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark-primary">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit defendant details</h4>
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
                                            <label for="inputPoliceNo">Time arrested</label>
                                            <input type="text" name="time" id="tarrested" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="incident">Date Arrested:</label>
                                            <input type="date" id="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Amount of Bail</label>
                                            <input type="text" name="bail" id="bail" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">All charges </label>
                                            <textarea id="inputcharges" name="charges" class="form-control"
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

    $(document).ready(function() {
        $(document).on('submit', '#dataform', function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?php echo base_url('users/addUser') ?>',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {

                },
                error: function() {
                    alert('error');
                }

            });
        });

        $('body').delegate('.deleteUser', 'click', function() {
            var id = $(this).data('id3');
            $.ajax({
                url: '<?php echo base_url('users/deleteUser'); ?>',
                method: 'POST',
                data: {
                    id: id
                },
                success: (data) => {
                    console.log('data');
                },
                error: (err) => {
                    console.log(err);
                }
            });
        });
        $('body').delegate('.viewUser', 'click', function() {
            var id = $(this).data('id1');
            $('#modal-view').modal('show');
            $.ajax({
                url: '<?php echo site_url('users/viewuser'); ?>',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('.viewcard-body').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });

        });
        $('body').delegate('.editUser', 'click', function() {
            var id = $(this).data('id2');
            $('#modal-edit').modal('show');
            $.ajax({
                url: '<?php echo base_url('users/getUser'); ?>',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#editcard').html(data);
                }
            });

        });
        $(document).on('submit', '#edituserform', function(event) {
            event.preventDefault();
            var id = $('#editusername').data('id');
            $.ajax({
                url: '<?php echo base_url('users/edituser'); ?>',
                method: 'POST',
                data: {
                    name: $('#editusername').val(),
                    type: $('#editusertype').val(),
                    quantity: $('#edituserquantity').val(),
                    expiry: $('#edituserexpiry').val(),
                    price: $('#edituserprice').val(),
                    barcode: $('#editbarcode').val(),
                    id: id
                },
                success: function(data) {
                    alert('ok');
                }
            });
        });

    });
    </script>
    </script>