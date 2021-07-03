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
                 <form action="<?php echo site_url('complainer/addComplaints'); ?>" method="POST">
                     <div class="card-body">
                         <div class="">
                             <p><b>The Information below should be fullfiled by Plaintiff</b></p>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label for="fullname">First Name:</label>
                                     <input type="text" name="FName" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="fullname">Last Name:</label>
                                     <input type="text" name="LName" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="address">Address:</label>
                                     <input type="address" name="address" class="form-control">
                                 </div>
                             </div>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label>Phone Number:</label>
                                     <div class="input-group" style="width: 250px;">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                         </div>
                                         <input type="phone-number" class="form-control" name="phoneNum">
                                     </div>
                                 </div>
                                 <div class="row d-flex justify-content-between">
                                     <div class="form-group">
                                         <label for="incident">Date of Action:</label>
                                         <input type="datetime-local" style="width: 250px;" id="date" name="date"
                                             class="form-control">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="event">Nature Of Complaints:</label>
                             <textarea class="form-control" name="natureComplaints" rows="4"></textarea>
                         </div>
                         <br>
                         <div class="card-body">
                             <p><b>People involved in the action.</b>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label for="fullname">Full Name:</label>
                                     <input type="text" name="th_name" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="address">Accusations:</label>
                                     <input type="text" name="accusation" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="event">Other Informations About the Defendant:</label>
                                 <textarea class="form-control" name="def_info" rows="3"></textarea>
                             </div>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Describe what you saw</label>
                                 <textarea class="form-control" name="other_info" rows="3"
                                     placeholder="Enter ..."></textarea>
                             </div>
                             <div>
                                 <p><b>Add vehicles if involved</b></p>
                                 <div class="d-flex justify-content-between">
                                     <div class="form-group">
                                         <label for="fullname">Type:</label>
                                         <input type="text" name="type" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Plate Number:</label>
                                         <input type="text" name="p_number" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Color:</label>
                                         <input type="text" name="color" class="form-control">
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputFile">Attach witness statement</label>
                                 <div class="input-group">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="w_statement">
                                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                     </div>
                                     <div class="input-group-append">
                                         <span class="input-group-text">Upload</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- /.card-body -->
                         <div class="row ">
                             <div class="col-12 px-5">
                                 <a href="header.php" class="btn btn-secondary">Cancel</a>
                                 <input type="submit" value="Add " class="btn btn-success float-right">
                             </div>
                         </div>
                     </div>
                 </form>
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