<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
        <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i>Department List</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-arrow-right"></i> Category  </a></li>
                        <li class="active">Department List</li>
                    </ol>
                </section>
         <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?= base_url()?>department/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New Department </a> 
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Department List</h3>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Department ID</th>
                  <th>Department</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($getRecord as $row) {
                    ?>
                    <tr>
                    	<td><?= $row->Id_Department?></td>
                    	<td><?= $row->Department?></td>
                    	<td>
                    		<a href="<?= base_url()?>department/edit/<?= $row->Id_Department?>" class="btn btn-primary">Edit</a>
                    		<a href="<?= base_url()?>department/delete/<?= $row->Id_Department?>" class="btn btn-danger">Delete</a>
                    	</td>
                    </tr>

                    <?php

}
                    ?>
               
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
