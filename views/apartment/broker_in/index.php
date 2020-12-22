<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
       <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> Broker In List</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> Apartment </a></li>
                        <li class="active">Broker In List</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?= base_url()?>brokerin/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New  Broker In</a> 
                            <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title"> Broker In List</h3>
                                             
                                            </div>
                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Broker In ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    	<?php
                                                    	foreach ($getRecord as $row) {
                                                    	?>
                                                    	<tr>
                                                    		<td><?= $row->Broker_In?></td>
                                                    		<td><?= $row->Name?></td>
                                                    		<td><?= $row->Email?></td>
                                                    		<td><?= $row->Phone?></td>
                                                    		<td><?= $row->Created_Date?></td>
                   
                                                    		<td>
                    <a href="<?= base_url()?>brokerin/edit/<?= $row->Broker_In?>" class="btn btn-primary">Edit</a>
                   <a href="<?= base_url()?>brokerin/delete/<?= $row->Broker_In?>" class="btn btn-danger">Delete</a>

                  
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
