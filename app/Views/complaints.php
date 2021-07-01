 <section class="content">
     <div class="row justify-content-center">
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
                     <p><b>The Information below should be fullfiled by Plaintiff</b></p>
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
                             <label for="address">Address:</label>
                             <input type="text" id="address" class="form-control">
                         </div>
                     </div>
                     <div class="row d-flex justify-content-between">
                         <div class="form-group">
                             <label for="CaseNo">Date:</label>
                             <input type="date" id="date" style="width: 200px;" class="form-control">
                         </div>
                         <div class="bootstrap-timepicker">
                             <div class="form-group">
                                 <label>Time:</label>

                                 <div class="input-group date" id="timepicker" data-target-input="nearest">
                                     <input type="timepicker" class="form-control datetimepicker-input"
                                         data-target="#timepicker" />
                                     <div class="input-group-append" data-target="#timepicker"
                                         data-toggle="datetimepicker">
                                         <div class="input-group-text"><i class="far fa-clock"></i></div>
                                     </div>
                                 </div>
                                 <!-- /.input group -->
                             </div>
                             <!-- /.form group -->
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Phone mask:</label>

                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-phone"></i></span>
                             </div>
                             <input type="text" class="form-control"
                                 data-inputmask="'mask': ['9999-999-999 [x999999]', '+0999 999 999 9999[9]-9999']"
                                 data-mask>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="event">Nature Of Complaints:</label>
                         <textarea id="event" class="form-control" rows="4"></textarea>
                     </div>
                     <p>
                         <b>Name of The people involved.</b>
                     <p>
                     <div class="d-flex justify-content-between">
                         <div class="form-group">
                             <label for="fullname">Full Name:</label>
                             <input type="text" id="name" style="width: 500px;" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="address">Location:</label>
                             <input type="text" id="address" class="form-control">
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Describe what you saw</label>
                         <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                     </div>
                     <p>
                         <b>Add vehicles if involved</b>
                     </p>
                     <div class="d-flex justify-content-between">
                         <div class="form-group">
                             <label for="fullname">Type:</label>
                             <input type="text" id="name" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="address">Plate Number:</label>
                             <input type="text" id="address" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="address">Color:</label>
                             <input type="text" id="address" class="form-control">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputFile">Attach witness statement</label>
                         <div class="input-group">
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile">
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                             </div>
                             <div class="input-group-append">
                                 <span class="input-group-text">Upload</span>
                             </div>
                         </div>
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