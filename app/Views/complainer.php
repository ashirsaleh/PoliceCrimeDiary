<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Complainer</h3>
                <center>
                    <input type="text" style="border-radius: 10px; width:30%; margin-left:20px;" name="filter" value="" id="filter" placeholder="Search here..." autocomplete="off" />
                </center>
                <div class="float-right">
                    <!--  -->
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Date</th>
                            <th>Complaints</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($complainers)) {
                            echo "<tr><td colspan='6' class='' style='color: red; text-align: center;' ><h4>There are No Records</h4></td></tr>";
                        } else {
                            $counter = 0;
                            foreach ($complainers as $complaint) {
                                $counter++;
                        ?>
                        <tr>
                            <th><?php echo $counter; ?></th>
                            <td><?php echo $complaint['Fname'] . ' ' . $complaint['Lname']; ?></td>
                            <td><?php echo $complaint['address']; ?></td>
                            <td><?php echo $complaint['phoneNum']; ?></td>
                            <td><?php echo date('d/m/Y H:i', strtotime($complaint['date'])); ?></td>
                            <td><?php echo $complaint['natureComplaints']; ?></td>
                            <td class="project-actions text-right">
                                <button class="btn btn-primary btn-sm viewcomplainer" data-id1="<?php echo $complaint['complainerId']; ?>">
                                    <i class="fas fa-folder"></i>View
                                </button>
                                <a class="btn btn-danger btn-sm deleteCompaliner" data-id3="<?php echo $complaint['complainerId']; ?>">
                                    <i class="fas fa-trash"></i>Close
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                        </tfoot>
                </table>
                <hr>
                <div class="d-flex justify-content-center">
                    <a type="button" class="btn btn-primary" href="<?php echo site_url('AddComplaints'); ?>">
                        Record Complainer
                    </a>
                </div>
                <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
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
                <div class="modal modal-md fade" id="modal-view">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">View Complainer</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="viewcard-body" id="recordContent">

                            </div>
                            <br>
                            <div class="container">
                                <button class="btn btn-success float-right" onClick="printReceipt('recordContent')">Print</button>
                            </div>
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

function printReceipt(el) {
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write('<html><head><title>' + document.title + '</title>');
    mywindow.document.write('</head><body>');
    mywindow.document.write('<center><h1>Complaint</h1></center>');
    mywindow.document.write(document.getElementById(el).innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.print();
    return true;
}

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

    $('body').delegate('.deleteCompaliner', 'click', function() {
        var id = $(this).data('id3');
        $.ajax({
            url: '<?php echo base_url('complainer/deleteComplaints'); ?>',
            method: 'POST',
            data: {
                id: id
            },
            success: (data) => {
                location.reload();
                // console.log('data');

            },
            error: (err) => {
                console.log(err);
            }
        });
    });
    $('body').delegate('.viewcomplainer', 'click', function() {
        var id = $(this).data('id1');
        $('#modal-view').modal('show');
        $.ajax({
            url: '<?php echo site_url('complainer/viewcomplaints'); ?>',
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
            url: '<?php echo base_url('complainer/getUser'); ?>',
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
            url: '<?php echo base_url('complainer/editcomplainer'); ?>',
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
