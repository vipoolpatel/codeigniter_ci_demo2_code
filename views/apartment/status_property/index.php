<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
      
<section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i>Status Property List</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-check"></i> Apartment </a></li>
                        <li class="active">Status Property List</li>
                    </ol>
                </section>
                    <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?=base_url()?>status/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New Status Property</a> 
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Status Property List</h3>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Status Property ID</th>
                  <th>Status Property</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
           <tbody>
       <?php
                    foreach ($getRecord as $row)
                    {
                    ?> 
                  <tr>
                  <td><?= $row->Id_Status_Property?></td>
                  <td><?= $row->Status_Property?></td>
                  <td><?= $row->Description?></td>
                 <td>
                   <a href="<?= base_url()?>status/edit/<?=$row->Id_Status_Property?>" class="btn btn-primary">Edit</a>  
                   <a href="<?= base_url()?>status/delete/<?=$row->Id_Status_Property?>" class="btn btn-danger">Delete</a>
                 </td>
              
                </tr>
               <?php } ?> 
           </tbody>
              </table>
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
                            
                            
                            
                        </div>
                    </div>
                </section>


</div>

<?php $this->load->view('header/footer'); ?>

<div class="control-sidebar-bg"></div> </div>

<?php $this->load->view('header/down'); ?>

</body>
</html>
