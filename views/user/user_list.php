<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <?php $this->load->view('header/sidebar'); ?>
         <div class="content-wrapper">
            <section class="content-header">
               <h1><i class="fa fa-arrow-left" aria-hidden="true"></i>User List</h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-user"></i> User</a></li>
                  <li class="active">User List</li>
               </ol>
            </section>
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <a href="<?=base_url()?>user/add_user" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New User</a>
                     <section class="content">
                        <div class="row">
                           <div class="col-xs-12">
                              <div class="box">
                                 <div class="box-header">
                                    <h3 class="box-title">User List</h3>
                                 </div>
                                 <div class="box-body">
                                    <form action="<?=base_url()?>user/add_user" method="post">
                                       <table id="example1" class="table table-bordered table-striped">
                                          <thead>
                                             <tr>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                foreach ($getRecord as $row)
                                                {
                                                ?>
                                             <tr>
                                                <td><?=$row->Id_User?></td>
                                                <td><?=$row->Username?></td>
                                                <td><?=$row->Email?></td>
                                                <td><?=$row->Creation_Date?></td>
                                                <td>
    <a href="<?=base_url()?>user/edit_user/<?= $row->Id_User?>" class="btn btn-primary">Edit</a>
         <a href="<?=base_url()?>user/delete/<?= $row->Id_User?>" class="btn btn-danger">Delete</a>
                                                </td>
                                             </tr>
                                             <?php } ?>
                                          </tbody>
                                       </table>
                                    </form>
                                 </div>
                              </div>
                           </div>
                         </div>
                      </section>
                  </div>
               </div>
            </section>
         </div>
         <?php
            $this->load->view('header/footer');
            ?>
         <div class="control-sidebar-bg"></div>
      </div>
      <?php
         $this->load->view('header/down');
         ?>
   </body>
</html>
