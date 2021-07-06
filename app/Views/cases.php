<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Default Cases</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Case No:</th>
                                    <th>Criminal Name</th>
                                    <th>Charges</th>
                                    <th>Date Of Conviction</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (empty($cases)) {
                                    echo "<tr><td colspan='6' class='' style='color: red; text-align: center;' ><h4>There are No Records</h4></td></tr>";
                                } else {
                                    $counter = 1;
                                    foreach ($cases as $case) {
                                ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $case['caseNo']; ?></td>
                                    <td><?php echo $case['criminalName']; ?></td>
                                    <td><?php echo $case['charges']; ?></td>
                                    <td><?php echo date("d/m/Y H:i", strtotime($case['conDate'])); ?></td>
                                </tr>
                                <?php
                                        $counter++;
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<script type="text/javascript">
let link = document.querySelector('.criminals');
link.classList.add('active');
</script>
