 <section class="content">
     <div class="row">
         <div class="col-md-10">
             <div class="card card-primary">
                 <div class="card-header">
                     <h3 class="card-title">POLICE REPORT</h3>

                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label for="inputPoliceNo">Case No:</label>
                         <input type="text" id="caseno" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="CaseNo">Case No:</label>
                         <input type="date" id="date" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="reportingofficer">Reporting Officer:</label>
                         <input type="text" id="officer" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="incident">Incident:</label>
                         <textarea id="incident" class="form-control" rows="4"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="event">Detail of Event:</label>
                         <textarea id="event" class="form-control" rows="4"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="areataken">Area Taken:</label>
                         <input type="text" id="area" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="summary">Summary:</label>
                         <textarea id="summary" class="form-control" rows="4"></textarea>
                     </div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <div class="row">
                 <div class="col-12">
                     <a href="#" class="btn btn-secondary">Cancel</a>
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