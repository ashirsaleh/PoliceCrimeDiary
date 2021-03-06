 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">List of Police Officers</h3>
                 <center>
                     <input type="text" style="border-radius: 10px; width:30%; margin-left:20px;" name="filter" value="" id="filter" placeholder="Search here..." autocomplete="off" />
                 </center>
                 <div class="float-right">
                     <?php if ($_SESSION['rank'] == "Admin") { ?>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                         Add user
                     </button>
                     <?php } ?>
                 </div>
             </div>
             <?php if (isset($validation)) : ?>
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error! </strong> <?php echo $validation->listErrors(); ?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>

             <?php endif ?>
             <div class="card-body">
                 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Full Name</th>
                             <th>Police Identity Number</th>
                             <th>Rank</th>
                             <th>Telephone Number</th>
                             <th>Description</th>
                             <?php if ($_SESSION['rank'] == "Admin") { ?>
                             <th width="15%">Action</th>
                             <?php } ?>

                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            if (empty($users)) {
                                echo "<tr><td colspan='8' style='color: red; text-align: center;'><h4>There are No Users</h4></td></tr>";
                            } else {
                                $counter = 0;
                                foreach ($users as $users) {
                                    $counter++;
                            ?>
                         <tr>
                             <td><?php echo $counter; ?></td>
                             <td><?php echo $users['Fname'] . ' ' . $users['Lname']; ?></td>
                             <td><?php echo $users['policeNo']; ?></td>
                             <td><?php echo $users['rank']; ?></td>
                             <td><?php echo $users['tel_number']; ?></td>
                             <td><?php echo $users['description']; ?></td>
                             <?php if ($_SESSION['rank'] == "Admin") { ?>
                             <td class="project-actions">
                                 <button data-id1=" <?php echo $users['policeId']; ?>" class="btn btn-primary btn-sm viewUser">
                                     <i class="fas fa-folder">
                                     </i>
                                     View
                                 </button>
                                 <button data-id2="<?php echo $users['policeId']; ?>" class="btn btn-warning btn-sm editUser">
                                     <i class="fas fa-pencil-alt">
                                     </i>
                                     Edit
                                 </button>
                                 <button data-id3="<?php echo $users['policeId']; ?>" class="btn btn-danger btn-sm deleteUser">
                                     <i class="fas fa-trash">
                                     </i>
                                     Delete
                                 </button>
                             </td>
                             <?php } ?>

                         </tr>
                         <?php
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
                                         <input type="text" name="Fname" required id="inputFirstname" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="inputLastname">Last name</label>
                                         <input type="text" name="Lname" required id="inputLastname" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="inputPoliceNo">Police Identification Number</label>
                                         <input type="text" name="policeNo" required id="inputPoliceNo" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="inputStatus">Rank</label>
                                         <select id="inputStatus" name="rank" required class="form-control">
                                             <option selected hidden disabled>Select Rank</option>
                                             <option value="Admin">Admin</option>
                                             <option value="Police Officer">Police Officer</option>
                                             <option value="Head Of Station">Head Of Station</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="password">Phone Number</label>
                                         <input type="tel" name="tel_number" id="phone" required class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="password">User password</label>
                                         <input type="password" name="password" id="passoword" required class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="inputDescription">Short Description </label>
                                         <textarea id="inputDescription" name="description" required class="form-control" rows="4"></textarea>
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
    var id = $('#id').val();
    $.ajax({
        url: '<?php echo base_url('users/EditUser'); ?>',
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
            alert("user has been updated");
            location.reload();
        }
    });
})
 </script>
