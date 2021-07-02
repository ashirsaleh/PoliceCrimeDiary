 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">List of Police Officers</h3>
                 <div class="float-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                         Add user
                     </button>
                 </div>
             </div>
             <?php
                if(isset($validation)){
                    echo $validation->listErrors();
                }
             ?>
             <div class="card-body">
                 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                         <tr>
                             <th>Full Name</th>
                             <th>Police Identity Number</th>
                             <th>Rank</th>
                             <th>Telephone Number</th>
                             <th>Role</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                        if (empty($users)) {
                            echo "<tr><td colspan='8' style='color: red; text-align: center;'><h4>There are No Users</h4></td></tr>";
                        } else {
                            $counter = 1;
                            foreach ($users as $users) {
                                ?>
                         <tr>
                             <td><?php echo $users['Fname'] . ' ' . $users['Lname']; ?></td>
                             <td><?php echo $users['policeNo']; ?></td>
                             <td><?php echo $users['rank']; ?></td>
                             <td><?php echo $users['tel_number']; ?></td>
                             <td><?php echo $users['age']; ?></td>
                             <td class="project-actions text-right d-flex justify-content-between"">
                                 <button data-id1=" <?php echo $users['policeId']; ?>"
                                 class="btn btn-primary btn-sm viewUser">
                                 <i class="fas fa-folder">
                                 </i>
                                 View
                                 </button>
                                 <button data-id2="<?php echo $users['policeId']; ?>"
                                     class="btn btn-info btn-sm editUser">
                                     <i class="fas fa-pencil-alt">
                                     </i>
                                     Edit
                                 </button>
                                 <button data-id3="<?php echo $users['policeId']; ?>"
                                     class="btn btn-danger btn-sm deleteUser">
                                     <i class="fas fa-trash">
                                     </i>
                                     Delete
                                 </button>
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
                                 <form action="<?php echo site_url('adduser') ?>" method="POST">
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
                                     <div class="row">
                                         <div class="col-12 p-3">
                                             <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                             <input type="submit" value="Add " class="btn btn-success float-right">
                                         </div>
                                 </form>
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
                         <form id="edituserform">
                             <div class="card-body" id="editcard">

                             </div>
                             <div class="row">
                                 <div class="col-12 p-3">
                                     <a data-dismiss="modal" class="btn btn-secondary">Cancel</a>
                                     <input type="submit" value="Edit User" class="btn btn-success float-right">
                                 </div>
                             </div>
                         </form>
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
                         <div class="row">
                             <div class="col-12 p-3">
                                 <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                             </div>
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
let link = document.querySelector('.users');
link.classList.add('active');

$(document).ready(function() {
    // $(document).on('submit', '#dataform', function(event) {
    //     event.preventDefault();
    //     $.ajax({
    //         url: '<?php echo base_url('users/addUser') ?>',
    //         headers: {
    //             'X-Requested-With': 'XMLHttpRequest'
    //         },
    //         method: 'POST',
    //         data: new FormData(this),
    //         contentType: false,
    //         processData: false,
    //         success: function(data) {

    //         },
    //         error: function() {
    //             alert('error');
    //         }

    //     });
    // });

    $('body').delegate('.deleteUser', 'click', function() {
        var id = $(this).data('id3');
        $.ajax({
            url: '<?php echo base_url('users/deleteUser'); ?>',
            method: 'POST',
            data: {
                id: id
            },
            success: (data) => {
                location.reload();
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
        var id = $('#id').data('id');
        $.ajax({
            url: '<?php echo base_url('users/edituser'); ?>',
            method: 'POST',
            data: {
                Fname: $('#editFirstName').val(),
                Lname: $('#editLastName').val(),
                policeNo: $('#editPoliceNo').val(),
                rank: $('#editRank').val(),
                tel_number: $('#editPhone').val(),
                password: $('#editPassword').val(),
                description: $('#editDescription').val(),
                id: id
            },
            success: function(data) {
                alert('ok');
                location.reload();
            }
        });
    });

});
 </script>