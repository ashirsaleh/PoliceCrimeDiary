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
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Age of a Person</th>
                            <th>All charges</th>
                            <th width="18%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($criminals)) {
                            echo "<tr><td colspan='9' class='' style='color: red; text-align: center;' ><h4>There are No Records</h4></td></tr>";
                        } else {
                            $counter = 1;
                            foreach ($criminals as $criminal) {
                        ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $criminal['fName'] . ' ' . $criminal['lName']; ?></td>
                            <td><?php echo $criminal['age']; ?></td>
                            <td><?php echo $criminal['charges']; ?></td>
                            <td class="project-actions text-right d-flex justify-content-between">
                                <a data-id1="<?php echo $criminal['accuserId']; ?>" class="btn btn-primary btn-sm viewDefendant">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a data-id1="<?php echo $criminal['accuserId']; ?>" class="btn btn-warning btn-sm editDefendant">
                                    <i class="fas fa-tasks">
                                    </i>
                                    Assign Case
                                </a>
                                <a class="btn btn-danger btn-sm deleteDefendant" data-id3="<?php echo $criminal['accuserId']; ?>">
                                    <i class="fas fa-trash"></i> Close
                                </a>
                            </td>
                        </tr>
                        <?php
                                $counter++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                <div class="d-flex justify-content-center">
                    <a type="button" class="btn btn-primary" href="crime">
                        Record Crime
                    </a>
                </div>

                <div class="float-center">

                </div>
                <div class="modal fade" id="modal-view">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">View Defendant</h4>
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
            <div class="modal fade" id="modal-assign">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark-primary">
                        <div class="modal-header">
                            <h4 class="modal-title">Assign New Case </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editdefendantform">
                            <div class="editcard card-body">

                            </div>
                            <div class="row">
                                <div class="col-12 p-3">
                                    <a data-dismiss="modal" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Assign" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!-- /.card-body -->
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

        $('body').delegate('.deleteDefendant', 'click', function() {
            var id = $(this).data('id3');
            $.ajax({
                url: '<?php echo base_url('crime/deleteDefendant'); ?>',
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
        $('body').delegate('.viewDefendant', 'click', function() {
            var id = $(this).data('id1');
            $('#modal-view').modal('show');
            $.ajax({
                url: '<?php echo site_url('crime/viewdefendant'); ?>',
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
    })


    $('body').delegate('.editDefendant', 'click', function() {
        var id = $(this).data('id2');
        $('#modal-assign').modal('show');
        $.ajax({
            url: '<?php echo base_url('criminals/assignDefendant'); ?>',
            method: 'POST',
            data: {
                id: id
            },
            success: function(data) {
                $('.editcard').html(data);
            }
        });

    });
    $(document).on('submit', '#editdefendantform', function(event) {
        event.preventDefault();
        var id = $('#id').val();
        $.ajax({
            url: '<?php echo base_url('Criminals/editDefendant'); ?>',
            method: 'POST',
            data: {
                cname: $('#cname').val(),
                charges: $('#charges').val(),
                caseNo: $('#caseNo').val(),
                assigned: $('#assign').val(),
                id: id
            },
            success: function(data) {
                alert('Case assigned to ' + $('#assign').val());
                location.reload();
            },
            error: (err) => {
                console.log(err);
            }

        });
    })
    </script>
