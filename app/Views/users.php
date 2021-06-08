 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-header">
                 <h3 class="card-title">List of Police Oficers</h3>
             </div>
             <div class="card-body">
                 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                         <tr>
                             <th>Full Name</th>
                             <th>Police Identy Number</th>
                             <th>Rank</th>
                             <th>Telephone Number</th>
                             <th>Role</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td><?php echo session()->get('Fname'), ' ', session()->get('Lname')?></td>
                             <td><?php echo session()->get('policeNo')?></td>
                             <td><?php echo session()->get('rank')?></td>
                             <td><?php echo session()->get('tel_number')?></td>
                             <td><?php echo session()->get('role')?></td>
                             <td class="project-actions text-right">
                                 <a class="btn btn-primary btn-sm" href="#">
                                     <i class="fas fa-folder">
                                     </i>
                                     View
                                 </a>
                                 <a class="btn btn-info btn-sm" href="#">
                                     <i class="fas fa-pencil-alt">
                                     </i>
                                     Edit
                                 </a>
                                 <a class="btn btn-danger btn-sm" href="#">
                                     <i class="fas fa-trash">
                                     </i>
                                     Delete
                                 </a>
                             </td>
                         </tr>
                         </tfoot>
                 </table>
                 <hr>
                 <div class="row">
                     <div class="col-12">
                         <input type="submit" value="Add new User" class="btn btn-success float-right">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>






 <script type="text/javascript">
let link = document.querySelector('.users');
link.classList.add('active');
 </script>