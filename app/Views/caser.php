 <section class="content">
     <div class="row d-flex">
         <div class="col-md-8">
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

                     <div class="form-group">
                         <label for="fullname">Criminal Name:</label>
                         <input type="text" id="name" style="width: 500px;" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="fullname">Case No:</label>
                         <input type="number" id="name" style="width: 500px;" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="fullname">Case Status:</label>
                         <input type="text" id="name" style="width: 500px;" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="fullname">Action Committed:</label>
                         <input type="text" id="name" style="width: 500px;" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="fullname">Conviction:</label>
                         <input type="text" id="name" style="width: 500px;" class="form-control">
                     </div>

                     <div class="row d-flex justify-content-between">
                         <div class="form-group">
                             <label for="incident">Date of conviction:</label>
                             <input type="date" style="width: 200px;" id="date" class="form-control">
                         </div>
                         <div class="bootstrap-timepicker">
                             <div class="form-group">
                                 <label>Time of conviction:</label>
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
                     <!-- /.card-body -->
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <a href="header.php" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Add " class="btn btn-success float-right">
                 </div>
             </div>
             <!-- /.card --><br>
         </div>
 </section>
 <!-- /.content -->
 </div>




 <script type="text/javascript">
let link = document.querySelector('.form');
link.classList.add('active');
 </script>