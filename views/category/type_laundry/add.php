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
                        <li class="active">Add Type Laundry  </li>
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
                                                <h3 class="box-title">Create Type Laundry</h3>
                                            </div>
                                          
                                             <form class="form-horizontal" method="POST" action="<?=base_url()?>typelaundry/insert">
                                      <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Type Laundry <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">   
                                            	<div class="">
                                                    <input name="Type_Laundry" required="" type="text" placeholder="Type Laundry" class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                       <div class="box-footer">
                                       	<a href="<?= base_url()?>typelaundry/type_laundry" class="btn btn-danger">Cancel</a>
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
