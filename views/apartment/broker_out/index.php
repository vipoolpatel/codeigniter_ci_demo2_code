<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
      
  <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> Broker Out List</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> Apartment </a></li>
                        <li class="active">Broker Out List</li>
                    </ol>
                </section>
         <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?= base_url()?>brokerout/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New  Broker Out</a> 
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
    <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Broker Out List</h3>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Broker Out ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Pbx</th>
                  <th>Company</th>
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
            	
            		<td><?= $row->Id_Broker_Out?></td>
            		<td><?= $row->Name?></td>
            		<td><?= $row->Email?></td>
            		<td><?= $row->Phone?></td>
            		<td><?= $row->Pbx?></td>
            		<td><?= $row->Company?></td>
            		<td><?= $row->Comment?></td>
            		<td><?= $row->Created_Date?></td>
            		<td>
            			<a href="<?= base_url()?>brokerout/edit/<?=$row->Id_Broker_Out?>" class="btn btn-primary">Edit</a>  
            			 <a href="<?= base_url()?>brokerout/delete/<?=$row->Id_Broker_Out?>" class="btn btn-danger">Delete</a>
            			
            		</td>
            	</tr>
<?php
}

                	?>
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

<?php $this->load->view('header/footer'); ?>

<div class="control-sidebar-bg"></div> </div>

<?php $this->load->view('header/down'); ?>

</body>
</html>
