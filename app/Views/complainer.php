<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Complainer</h3>
                <div class="float-right">
                    <!--  -->
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Time</th>
                            <th>Telephone Number</th>
                            <th>Date</th>
                            <th>Nature Of Complaints</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                     if (empty($complainers)){
                         echo "<tr><td colspan='6' class='' style='color: red; text-align: center;' ><h4>There are No Records</h4></td></tr>";
                     }else{
                         $counter = 1;
                         foreach ($complainers as $complaint){ 
                            ?>
                        <tr>
                            <td><?php echo $complaint['Fname'].' '. $complaint['Lname']; ?></td>
                            <td><?php echo $complaint['address']; ?></td>
                            <td><?php echo $complaint['time']; ?></td>
                            <td><?php echo $complaint['p_number']; ?></td>
                            <td><?php echo $complaint['date']; ?></td>
                            <td><?php echo $complaint['nature_complaints']; ?></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" data-id1="<?php echo $complaint['complainer_id']; ?>">
                                    <i class="fas fa-folder"></i>View
                                </a>
                                <a class="btn btn-info btn-sm" href="#
                                    data-id2=" <?php echo $complaint['complainer_id']; ?>" data-toggle="modal"
                                    data-target="#modal-edit">
                                    <i class="fas fa-pencil-alt"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm modal-delete"
                                    data-id3="<?php echo $complaint['complainer_id']; ?>">
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
                    <a type="button" class="btn btn-primary" href="complaints">
                        Record Crime
                    </a>
                </div>
                <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">y
                                <h4 class="modal-title">Edit complainer details</h4>
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
                                        <label for="inputPoliceNo">Phone number</label>
                                        <input type="text" name="phone" id="phonenumber" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="incident">Date:</label>
                                        <input type="date" id="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Nature of complaints </label>
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
                            <div class="viewcard-body">

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
let link = document.querySelector('.complainer');
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
            url: '<?php echo site_url('complainers/viewcomplainer'); ?>',
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
            url: '<?php echo base_url('complainers/getUser'); ?>',
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
            url: '<?php echo base_url('complainers/editcomplainer'); ?>',
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