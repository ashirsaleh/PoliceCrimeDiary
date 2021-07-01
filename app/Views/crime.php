 <section class="content">
     <div class="row d-flex">
         <div class="col-md-12">
             <div class="card card-primary">
                 <div class="card-header">
                     <h3 class="card-title">TANZANIA POLICE FORCE</h3>
                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                     </div>
                 </div>
                 <form action="<?php echo site_url('addcriminal') ?>" method="POST">
                     <div class="card-body">
                         <div class="d-flex justify-content-between">
                             <div class="form-group">
                                 <label for="fullname">First Name:</label>
                                 <input type="text" id="name" name="fName" style="width: 250px;" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="fullname">Last Name:</label>
                                 <input type="text" id="name" name="lName" style="width: 250px;" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="incident">Age:</label>
                                 <input type="number" id="age" name="age" class="form-control">
                             </div>
                         </div>
                         <div class="row d-flex justify-content-between">
                             <div class="form-group">
                                 <label for="incident">Date Arrested:</label>
                                 <input type="datetime-local" style="width: 200px;" id="date" name="dateArrested"
                                     class="form-control">
                             </div>

                         </div>

                         <div class="form-group">
                             <label for="areataken">Location Arrested:</label>
                             <input type="text" id="area" name="locationArrested" class="form-control">
                         </div>
                         <div class="row d-flex justify-content-between">
                             <div class="form-group">
                                 <label for="areataken">Name of Gurdian:</label>
                                 <input type="text" id="area" name="guardianName" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="areataken">Relationship:</label>
                                 <input type="text" id="area" name="gRelation" class="form-control">
                             </div>
                         </div>

                         <div class="form-group">
                             <label for="summary">Factual Circumstances:</label>
                             <textarea id="summary" name="circumstance" class="form-control" rows="4"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="areataken">Amount of Bail Set:</label>
                             <input type="number" id="area" name="bailset" class="form-control"
                                 placeholder="Tsh xxxxx/=">
                         </div>
                         <div class="form-group">
                             <label for="charges">All charges:</label>
                             <input type="text" id="charges" name="charges" class="form-control">
                         </div>
                     </div>
                     <!-- /.card-body -->

                     <div class="row">
                         <div class="col-12">
                             <a href="header.php" class="btn btn-secondary">Cancel</a>
                             <input type="submit" value="Add " class="btn btn-success float-right">
                         </div>
                     </div>
                 </form>
                 <!-- /.card --> <br>
             </div>
         </div>
 </section>
 <!-- /.content -->
 </div>




 <script type="text/javascript">
let link = document.querySelector('.form');
link.classList.add('active');
 </script>