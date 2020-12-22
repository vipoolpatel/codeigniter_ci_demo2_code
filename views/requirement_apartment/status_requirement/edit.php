<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

          <div class="content-wrapper">
     <section class="content-header">
                   
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-check"></i>  Status Requirement </a></li>
                        <li class="active">Update Status Requirement  </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                       
                            <section class="content">
                       
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
Update Status Requirement
</h3>
                    
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" action="<?=base_url()?>status_requirement/update" method="POST">

                <input type="hidden"  name="Id_Status_Requirement"  value="<?=$edit_status_requirement->Id_Status_Requirement?>">


              <div class="box-body">
                  <div class="col-md-12">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Status Requirement *</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="" name="Status_Requirement" required="" value="<?=$edit_status_requirement->Status_Requirement?>">
                  </div>
                </div>
                   </div>
                  <div class="col-md-2"></div></div>
                  <div class="col-md-12">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                      <textarea class="form-control" placeholder="" name="Description"><?=$edit_status_requirement->Description?></textarea>
                  </div>
                </div>
                      </div>
                  <div class="col-md-2"></div></div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?= base_url()?>status_requirement/status_requirement_list" class="btn btn-danger">Cancle</a>
                  <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
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
