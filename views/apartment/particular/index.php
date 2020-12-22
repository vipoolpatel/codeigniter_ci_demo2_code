<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
       <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> 
							Particular List
							</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-circle"></i> Apartment </a></li>
                        <li class="active">Particular List</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?= base_url()?>particular/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New  Particular</a> 
                            <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Particular List</h3>
                                               
                                            </div>
                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Particular ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Comment</th>
                                                            <th>Created Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    	<?php
														foreach ($getRecord as $row) {
													    ?>
                                                    	<tr>
     														<td><?= $row->Id_Particular?></td>
     														<td><?= $row->Name?></td>
     														<td><?= $row->Email?></td>
     														<td><?= $row->Phone?></td>
     														<td><?= $row->Comment?></td>
     														<td><?= $row->Created_Date?></td>
     														<td>
     															<a href="<?= base_url()?>particular/edit/<?= $row->Id_Particular?>" class="btn btn-primary">Edit</a>

     															<a href="<?= base_url()?>particular/delete/<?= $row->Id_Particular?>" class="btn btn-danger">Delete</a>
     														</td>

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

<?php $this->load->view('header/footer'); ?>

<div class="control-sidebar-bg"></div> </div>

<?php $this->load->view('header/down'); ?>

</body>
</html>
