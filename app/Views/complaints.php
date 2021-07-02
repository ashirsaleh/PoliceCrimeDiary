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
                     <div class="">
                         <p><b>The Information below should be fullfiled by Plaintiff</b></p>
                         <div class="d-flex justify-content-between">
                             <div class="form-group">
                                 <label for="fullname">First Name:</label>
                                 <input type="text" id="name" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="fullname">Last Name:</label>
                                 <input type="text" id="name" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="address">Address:</label>
                                 <input type="text" id="address" class="form-control">
                             </div>
                         </div>
                         <div class="d-flex justify-content-between">
                             <div class="form-group">
                                 <label>Phone Number:</label>
                                 <div class="input-group" style="width: 250px;">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                     </div>
                                     <input type="text" class="form-control">
                                 </div>
                             </div>
                             <div class="row d-flex justify-content-between">
                                 <div class="form-group">
                                     <label for="incident">Dateof Action:</label>
                                     <input type="datetime-local" style="width: 250px;" id="date" name="dateArrested"
                                         class="form-control">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="event">Nature Of Complaints:</label>
                         <textarea id="event" class="form-control" rows="4"></textarea>
                     </div>
                 </div>
                 <br>
                 <div class="card-body">
                     <p><b>People involved in the action.</b>
                     <div class="d-flex justify-content-between">
                         <div class="form-group">
                             <label for="fullname">First Name:</label>
                             <input type="text" id="name" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="fullname">Last Name:</label>
                             <input type="text" id="name" class="form-control">
                         </div>
                         <div class="form-group">
                             <label for="address">Accusations:</label>
                             <input type="text" id="address" class="form-control">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="event">Other Informations About the Defendant:</label>
                         <textarea id="event" class="form-control" rows="3"></textarea>
                     </div>
                     <div class="row d-flex float-right pb-3">
                         <a class="btn btn-primary">
                             <b>Add People Involved </b><i class="fa fa-user-plus"></i>
                         </a>
                     </div>
                 </div>
                 <div class="card-body">
                     <div class="form-group">
                         <label>Describe what you saw</label>
                         <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                     </div>
                     <div>
                         <p><b>Add vehicles if involved</b></p>
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
             <div class="row ">
                 <div class="col-12 px-5">
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