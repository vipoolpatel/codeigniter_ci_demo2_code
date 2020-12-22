<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
       <section class="content-header">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> Apartment </a></li>
                        <li class="active">Update Broker In   </li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Update Broker In</h3> </div>
                                       

                                              <form class="form-horizontal" method="POST" action="<?=base_url()?>brokerin/update">
                                              		<input type="hidden" value="<?=$edit->Broker_In?>" name="Broker_In">
                                                <div class="panel-body">
                                            <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Name <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Name" required="" value="<?= $edit->Name?>" type="text" placeholder="Name" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Email  <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Email" required="" value="<?= $edit->Email?>" placeholder="Email" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Phone <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Phone" required="" value="<?= $edit->Phone?>" placeholder="Phone" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                       <div class="box-footer">
                                       	<a href="<?= base_url()?>brokerin/broker_in" class="btn btn-danger">Cancel</a>
                                       <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                                          </div>
                                            </form>
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
