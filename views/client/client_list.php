<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

          <div class="content-wrapper">
              <section class="content-header">
                    <h1>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>Client List</h1>
                       <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> Client</a></li>
                        <li class="active">Client List </li>
                    </ol>
                </section>
               <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?=base_url()?>client/add_client" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New Client</a>
                            <section class="content">
               <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Client List</h3>
               </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Client ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Comment</th>
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
                  <td><?= $row->Id_Client?></td>
                  <td><?= $row->Name?></td>
                  <td><?= $row->Email?></td>
                  <td><?= $row->Tel?></td>
                  <td><?= $row->Comment?></td>
                  <td><?= $row->Creation_Date?></td>
              <th>
                <a href="<?=base_url()?>client/edit_client/<?= $row->Id_Client?>" class="btn btn-primary">Edit</a>
                <a href="<?=base_url()?>client/delete/<?= $row->Id_Client?>" class="btn btn-danger">Delete</a>
              </th>
                </tr>
                <?php } ?>
               
              
                </tbody>
              </table>
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
