<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
     <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> Detail  Apartment Developer  </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i>  Apartment Developer </a></li>
                        <li class="active"> Apartment Developer </li>
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
                                                <h3 class="box-title">Detail Apartment Developer</h3>

                                               
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                
                 
                     
                  
                      
                                                
                                                
                <div class="col-md-6">
                    <b>Id Developer  :</b><?= $row->Id_Developer?>
                </div>
                <div class="col-md-6">
                    <b> Company Name :</b><?= $row->NameCompany?>
                </div>
                                                <br />
                                                <br />
                
                <div class="col-md-6">
                    <b>Name Contact 1:</b> <?= $row->NameContact1?>
                </div>
                <div class="col-md-6">
                    <b> Telephone 1 :</b> <?= $row->Tel1?>
                </div>     
                                                <br />
                                                <br />
                                                    
                                                
                                                
                <div class="col-md-6">
                    <b>Email 1  :</b><?= $row->Email1?>
                </div>
                <div class="col-md-6">
                    <b>Position 1  :</b><?= $row->Position1?>
                </div>
                                                <br />
                                                <br />
                
                <div class="col-md-6">
                    <b>Name Contact 2:</b> <?= $row->NameContact2?>

 
                </div>
                <div class="col-md-6">
                    <b> Telephone 2 :</b> <?= $row->Tel2?>
                </div>     
                                                <br />
                                                <br />
               
                                       
                <div class="col-md-6">
                    <b>Email 2   :</b><?= $row->Email2?>
                </div>
                <div class="col-md-6">
                    <b>Position 2 :</b><?= $row->Position2?>

                </div>
                                                <br />
                                                <br />
                
                <div class="col-md-6">
                    <b>Website :</b> <?= $row->Web?>

 
                </div>
                <div class="col-md-6">
                    <b> Address:</b> <?= $row->Address?>
                </div>     
                                                <br />
                                                <br />
                  <div class="col-md-6">
                    <b>Nit  :</b> <?= $row->Nit?>

 
                </div>
                <div class="col-md-6">
                    <b> Comment :</b> <?= $row->Comment?>
                </div>     
                                                <br />
                                                <br />
               
                <div class="col-md-6">
                    <b> Created Date :</b> <?= $row->Created_Date?>
                </div>     
                                <br />
                                                <br />
               
                                                
                                                
                                <div class="box-footer">
<a href="<?=base_url()?>developer/developer" class="btn btn-danger pull-right">Cancel</a>

</div>                
                                                
                                                
                                                
                                                
                                                
                                                
                                            
                                            </div>
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

<?php $this->load->view('header/footer'); ?>

<div class="control-sidebar-bg"></div> </div>

<?php $this->load->view('header/down'); ?>

</body>
</html>
