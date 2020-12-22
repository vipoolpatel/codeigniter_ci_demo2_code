<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
   
    <section class="content-header">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-arrow-right"></i> Category </a></li>
                        <li class="active">Update Transaction Type  </li>
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
                                                <h3 class="box-title">Update Transaction Type</h3>
										    </div>
                                          
										         <form class="form-horizontal" method="POST" action="<?=base_url()?>transaction/update">
	<input type="hidden" name="Id_Cat_Transaction_Type" value="<?= $edit->Id_Cat_Transaction_Type?>">
                                                <div class="panel-body">
                                            <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Transaction Type  <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Transaction_Type" required="" type="text" placeholder="Transaction Type" value="<?= $edit->Transaction_Type?>" class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                       <div class="box-footer">
                                       	<a href="<?= base_url()?>transaction/transaction_type" class="btn btn-danger">Cancel</a>
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
