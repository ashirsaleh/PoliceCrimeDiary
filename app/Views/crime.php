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
                 <div class="card-body">
                     <div class="d-flex justify-content-between">
                         <div class="form-group">
                             <label for="fullname">First Name:</label>
                             <input type="text" id="name" style="width: 250px;" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="fullname">Last Name:</label>
                             <input type="text" id="name" style="width: 250px;" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="incident">Age:</label>
                             <input type="number" id="age" class="form-control">
                         </div>
                     </div>
                     <div class="row d-flex justify-content-between">
                         <div class="form-group">
                             <label for="incident">Date Arrested:</label>
                             <input type="date" style="width: 200px;" id="date" class="form-control">
                         </div>
                         <div class="bootstrap-timepicker">
                             <div class="form-group">
                                 <label>Time Arrested:</label>
                                 <div class="input-group date" id="timepicker" data-target-input="nearest">
                                     <input type="timepicker" style="width: 200px;"
                                         class="form-control datetimepicker-input" data-target="#timepicker" />
                                     <div class="input-group-append" data-target="#timepicker"
                                         data-toggle="datetimepicker">
                                         <div class="input-group-text"><i class="far fa-clock"></i></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="areataken">Location Arrested:</label>
                         <input type="text" id="area" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="areataken">Name of Gurdian/Relationship:</label>
                         <input type="text" id="area" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="summary">Factual Circumstances:</label>
                         <textarea id="summary" class="form-control" rows="4"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="areataken">Amount of Bail Set:</label>
                         <input type="number" id="area" class="form-control" placeholder="Tsh xxxxx/=">
                     </div>
                     <div class="form-group">
                         <label for="charges">All charges:</label>
                         <input type="text" id="charges" class="form-control">
                     </div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <div class="row">
                 <div class="col-12">
                     <a href="header.php" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Add " class="btn btn-success float-right">
                 </div>
             </div>
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