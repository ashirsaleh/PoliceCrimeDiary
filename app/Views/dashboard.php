<!-- Small boxes (Stat box) -->
<div class="row">
    <?php if ($_SESSION['rank'] == "Admin") { ?>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo $userCount; ?></h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url('users'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <?php } ?>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo $caseCount; ?></h3>

                <p>Cases</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('cases'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo $criminalCount; ?></h3>

                <p>Criminals</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url('criminals'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?php echo $complaintCount; ?></h3>

                <p>Complaints</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo site_url('complaints'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Complainers</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($complainers)) {
                            echo "<tr><td colspan='6' class='' style='color: red; text-align: center;' ><h4>There are No Complainers</h4></td></tr>";
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
                        </tr>
                        <?php
                            }
                        }
                        ?>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Defendant</h3>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Age of a Person</th>
                            <th>All charges</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($criminals)) {
                            echo "<tr><td colspan='9' class='' style='color: red; text-align: center;' ><h4>There are No Defendants</h4></td></tr>";
                        } else {
                            $counter = 1;
                            foreach ($criminals as $criminal) {
                        ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $criminal['fName'] . ' ' . $criminal['lName']; ?></td>
                            <td><?php echo $criminal['age']; ?></td>
                        </tr>
                        <?php
                                $counter++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
let link = document.querySelector('.dashboard');
link.classList.add('active');
</script>
