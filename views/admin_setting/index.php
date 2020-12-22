<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
      
        <!-- Content Header (Page header) -->
                <section class="content-header">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-cog"></i> Admin Setting</a></li>
                        
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
                                                <h3 class="box-title">Admin Setting</h3>
                                            </div>

                                            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?=base_url()?>admin_setting/update">
                                            	<input type="hidden" name="id" value="<?= $edit->id?>">
                                                <div class="panel-body">
                                            <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Website Name<span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="sitename" value="<?= $edit->sitename?>" required="" type="text" placeholder="Website Name" class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Email Address<span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="email" required="" value="<?= $edit->email?>" type="text" placeholder="Email Address" class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label"> Website URL<span style="color: #ff0000">*</span></label>

 
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="website_url" value="<?= $edit->website_url?>" required="" type="text" placeholder="Road To " class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

<div class="form-group">
        <label class="col-sm-2 control-label">Upload Logo </label>
          <img width="100" height="100" src="<?=base_url()?>uploads/<?=$edit->upload_logo?>">
          <div class="col-sm-4">
           <input type="file" name="upload_logo">
           <input type="hidden" value="<?=$edit->upload_logo?>" name="old_imagename">
                                                                    </div>
                                                                </div>


    <div class="form-group">
<label class="col-sm-2 control-label">Icon </label>
<img width="100" height="100" src="<?=base_url()?>uploads/<?=$edit->icon?>">
<div class="col-sm-4">
<input type="file" name="icon">
<input type="hidden" value="<?=$edit->icon?>" name="old_imagenameicon">
        </div>
    </div>

                                    </div>
                                       <div class="box-footer">
                                       	
                                       <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
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
