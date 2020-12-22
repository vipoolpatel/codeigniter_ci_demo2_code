<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<?php $this->load->view('header/sidebar'); ?>

          <div class="content-wrapper">

  <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> Detail Requirement Apartment   </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> Requirement Apartment </a></li>
                        <li class="active">Requirement Apartment List </li>
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
                                                <h3 class="box-title">Detail Requirement Apartment </h3>


                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">







                <div class="col-md-6">
                    <b>Requirement Status  :</b><?= $row->Status_Requirement?>
                </div>
                <div class="col-md-6">
                    <b> Minimum Rooms  :</b><?= $row->Minimun_Rooms?>
                </div>
                                                <br />
                                                <br />

                <div class="col-md-6">
                    <b>Client Name :</b> <?= $row->Name?>
                </div>
                <div class="col-md-6">
                    <b> Minimum Parking  :</b> <?= $row->Minimun_Parking?>
                </div>
                                                <br />
                                                <br />

                <div class="col-md-6">
                    <b>Date Requirement :</b><?= $row->Date_Requirement?>
                </div>
                <div class="col-md-6">
                    <b>Price Requirement   :</b><?= $row->PriceRequirement?>

                </div>
                                                <br />
                                                <br />

                <div class="col-md-6">
                    <b>Date Expiration  : </b><?= $row->Date_Expiration?>
                </div>
                <div class="col-md-6">
                    <b> Price Range $ Min  :</b><?= $row->Price_Range_dollar_Min?>
                </div>
                                                <br />
                                                <br />
                <div class="col-md-6">
                    <b>Department   :</b> <?= $row->Department?>
                </div>
                <div class="col-md-6">
                    <b>Price Range $ Max   :</b> <?= $row->Price_Range_dollar_Max?>
                </div>
                                                <br />
                                                <br />
                <div class="col-md-6">
                    <b>City    :</b>       <?= $row->City?>
                </div>
                <div class="col-md-6">
                    <b>Level Range Min  :</b> <?= $row->Level_Range_Min?>
                </div>




                <br />
                <br />

                <div class="col-md-6">
                    <b> Zone   :</b> <?= $row->Zone?>
                </div>
                <div class="col-md-6">
                    <b>Level Range Max:</b><?= $row->Level_Range_Max?>

                </div>


                <br />
                <br />
                <div class="col-md-6">
                    <b>Enter To    :</b> <?= $row->Enter_To?>
                </div>
                <div class="col-md-6">
                    <b> Road To  :</b><?= $row->Road_To?>
                </div>

                <br />
                <br />
                <div class="col-md-6">
                    <b>Area   :</b> <?= $row->Area?>
                </div>
                <div class="col-md-6">
                    <b>Comments    :</b> <?= $row->Comments?>
                </div>
                <br />
                <br />

                <div class="col-md-6">
                    <b>Created Date   :</b> <?= $row->Created_Date?>
                </div>






                                <div class="box-footer">
<a href="<?=base_url()?>requirement_apartment/requirement_apartment_list" class="btn btn-danger pull-right">Cancel</a>

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
