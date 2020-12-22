
<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

          <div class="content-wrapper">
     <section class="content-header">
                    <h1>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                         Status Requirement List

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-check"></i> Status Requirement</a></li>
                        <li class="active">Status Requirement List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?= base_url()?>status_requirement/add_status_requirement" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New 
Status Requirement</a>

                            <section class="content">
                               <div class="row">
                                    <div class="col-xs-12">
                                    	<div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Status Requirement List</h3>
                                            </div>
                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No.</th>
                                                            <th>Status Requirement</th>
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
                                                            <td><?=$row->Id_Status_Requirement?></td>
                                                            <td><?=$row->Status_Requirement?></td>
                                                            <td><?=$row->Description?></td>
<td>
  <a href="<?=base_url()?>status_requirement/edit_status_requirement/<?= $row->Id_Status_Requirement?>" class="btn btn-primary">Edit</a>
  <a href="<?=base_url()?>status_requirement/delete/<?= $row->Id_Status_Requirement?>" class="btn btn-danger">Delete</a>
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
