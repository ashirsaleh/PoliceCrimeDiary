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
                 <form action="<?php echo site_url('AddComplaints'); ?>" method="POST" enctype="multipart/form-data">
                     <div class="card-body">
                         <?php if (isset($validation)) : ?>
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             <strong>Error! </strong> <?php echo $validation->listErrors(); ?>
                         </div>

                         <?php endif ?>
                         <div class="">
                             <p><b>The Information below should be fullfiled by Plaintiff</b></p>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label for="fullname">First Name:</label>
                                     <input type="text" name="FName" required maxlength="15" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="fullname">Last Name:</label>
                                     <input type="text" name="LName" required maxlength="15" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="address">Address:</label>
                                     <input type="address" name="address" required class="form-control">
                                 </div>
                             </div>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label>Phone Number:</label>
                                     <div class="input-group" style="width: 250px;">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                         </div>
                                         <input type="tel" class="form-control" required name="phoneNum">
                                     </div>
                                 </div>
                                 <div class="row d-flex justify-content-between">
                                     <div class="form-group">
                                         <label for="incident">Date of Action:</label>
                                         <input type="datetime-local" style="width: 250px;" required id="date" name="date" class="form-control">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="event">Nature Of Complaints:</label>
                             <textarea class="form-control" name="natureComplaints" required rows="4"></textarea>
                         </div>
                         <br>
                         <div class="card-body">
                             <p><b>Witness.</b>
                             <div class="d-flex justify-content-between">
                                 <div class="form-group">
                                     <label for="fullname">Full Name:</label>
                                     <input type="text" name="th_name" required class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <label for="address">Accusations:</label>
                                     <input type="text" name="accusation" required class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="event">Other Informations About the Defendant:</label>
                                 <textarea class="form-control" name="def_info" required rows="3"></textarea>
                             </div>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Describe what you saw</label>
                                 <textarea class="form-control" name="other_info" rows="3" required placeholder="Enter ..."></textarea>
                             </div>
                             <div>
                                 <p><b>Add vehicles if involved</b></p>
                                 <div class="d-flex justify-content-between">
                                     <div class="form-group">
                                         <label for="fullname">Type:</label>
                                         <input type="text" name="type" required class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Plate Number:</label>
                                         <input type="text" name="p_number" required class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="address">Color:</label>
                                         <input type="text" name="color" required class="form-control">
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="statement">Attach witness statement</label>
                                 <div class="input-group">
                                     <input type="file" class="form-control" required name="statement"
                                         accept=".doc,.docx,.png,.pdf,.jpg,.jpeg,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" multiple>
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
