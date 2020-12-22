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
                        <li class="active">Update Developer   </li>
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
                                                <h3 class="box-title">Update Developer</h3> </div>
                                        <form class="form-horizontal" method="POST" action="<?=base_url()?>developer/update">
                                        		<input type="hidden" value="<?=$edit->Id_Developer?>" name="Id_Developer">
                                                <div class="panel-body">
                                            <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Company Name <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="NameCompany" value="<?= $edit->NameCompany?>" required="" type="text" placeholder="Company Name" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Name Contact 1  <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="NameContact1" value="<?= $edit->NameContact1?>" required="" placeholder="Name Contact 1" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Telephone 1 <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Tel1" value="<?= $edit->Tel1?>" required="" placeholder="Telephone 1" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Email 1  <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Email1" value="<?= $edit->Email1?>" required="" placeholder="Email 1" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Position 1  <span style="color: #ff0000">*</span></label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Position1" value="<?= $edit->Position1?>" required="" placeholder="Position 1" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Name Contact 2</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="NameContact2" value="<?= $edit->NameContact2?>" placeholder="Name Contact 2" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Telephone 2</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Tel2" value="<?= $edit->Tel2?>" placeholder="Telephone 2" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Email 2 </label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Email2" value="<?= $edit->Email2?>" placeholder="Email 2" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Position 2 </label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Position2" value="<?= $edit->Position2?>" placeholder="Position 2" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Website</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Web" value="<?= $edit->Web?>" placeholder="Website" type="text" class="form-control" value="">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Address </label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <textarea class="form-control" type="text" placeholder="Address" name="Address"><?= $edit->Address?></textarea>
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Nit </label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <input name="Nit" value="<?= $edit->Nit?>" placeholder="Nit" type="text" class="form-control">
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Comment  </label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <div class="">
                                                    <textarea class="form-control" placeholder="Comment" type="text" name="Comment"><?= $edit->Comment?></textarea>
                                                    <div class="error"></div>
                                                </div>                                            
                                            </div>
                                        </div>

                                    </div>
                                       <div class="box-footer">
                                       	<a href="<?= base_url()?>developer/developer" class="btn btn-danger">Cancel</a>
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
