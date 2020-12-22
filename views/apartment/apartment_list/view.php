<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
      
      <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i>  Detail Apartment   </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-building-o"></i> Apartment </a></li>
                        <li class="active">Apartment Detail </li>
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
                                                <h3 class="box-title">Detail Apartment  </h3>

                                                <a href="<?= base_url()?>apartment/apartment_list" class="btn btn-success pull-right">Back</a>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                     
                                                
                                                <div class="col-md-6">
                                                    <b>Sr No:</b><?= $row->Id_Apartment?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Status Property:</b><?= $row->Status_Property?>
                                                </div>
                                                <br />
                                                <br />
                                               
                                                <div class="col-md-6">
                                                    <b>User:</b><?= $row->Username?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Broker Out:</b><?= $row->Name?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Broker In:</b><?= $row->Name?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Developer:</b><?= $row->NameCompany?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Particular:</b><?= $row->Name?>

                                                </div>
                                                <div class="col-md-6">
                                                    <b>Date In :</b><?= $row->Date_In?>
                                                </div>
                                                <br />
                                                <br /><div class="col-md-6">
                                                    <b>Date Out:</b><?= $row->Date_Out?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Expiration Date:</b><?= $row->Expiration_Date?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Price dollar:</b><?= $row->Price_dollar?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Comission Type:</b><?= $row->Comission_Type?>
                                                </div>
                                              
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Transaction Type:</b><?= $row->Transaction_Type?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Cat Department:</b><?= $row->Department?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Cat City:</b><?= $row->City?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Cat Zone:</b><?= $row->Zone?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Cat Area:</b><?= $row->Area?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Cat Road To:</b><?= $row->Road_To?>
                                                </div>
                                                <br />
                                                <br /><div class="col-md-6">
                                                    <b>Cat Enter To:</b><?= $row->Enter_To?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Address:</b><?= $row->Address?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Comments:</b><?= $row->Comments?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Mts 2:</b><?= $row->Mts2?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Rooms:</b><?= $row->Rooms?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Principal Room Walking Closet:</b><?= $row->Principal_Room_Walking_Closet?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Principal Room Bathroom:</b><?= $row->Principal_Room_Bathroom?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Service Room:</b><?= $row->Service_Room?>
                                                </div>
                                                <br />
                                                <br /><div class="col-md-6">
                                                    <b>Studio:</b><?= $row->Studio?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Qty Bathrooms:</b><?= $row->Qty_Bathrooms?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Balcony:</b><?= $row->Balcony?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Balcony Mts 2:</b><?= $row->Balcony_mts2?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Living Room:</b><?= $row->Living_Room?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Dining Room:</b><?= $row->Dining_Room?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Family Room:</b><?= $row->Family_Room?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Kitchen:</b><?= $row->Kitchen?>
                                                </div>
                                                 <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Storage:</b><?= $row->Storage?>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <b>Storage Mts 2:</b><?= $row->Storage_mts2?>
                                                </div>
                                                 <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Parking:</b><?= $row->Parking?>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <b>Recreational Areas:</b><?= $row->Recreational_Areas?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Business Center:</b><?= $row->Business_Center?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Building Garden:</b><?= $row->Building_Garden?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Gym:</b><?= $row->Gym?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Cat Type Laundry:</b><?= $row->Type_Laundry?>
                                                </div>
                                                 <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Level:</b><?= $row->Level?>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <b>Elevator:</b><?= $row->Elevator?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Type Apartment:</b><?= $row->Type_Apartment?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Penthouse:</b><?= $row->Penthouse?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Apartment Garden:</b><?= $row->Apartment_Garden?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <b>Pergola:</b><?= $row->Pergola?>
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Created Date:</b><?= $row->Created_Date?>
                                                </div>
                                                 <br />
                                                <br />

                                                <div class="col-md-6">
                                                    <b>Photo 1:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->Photo1?>">

                                                </div>
                                                <div class="col-md-6">
                                                    <b>Photo 2:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->Photo2?>">
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Photo 3:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->Photo3?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Photo 4:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->Photo4?>">
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Photo 5:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->Photo5?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Photo 6:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->photo6?>">
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Photo 7:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->photo7?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Photo 8:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->photo8?>">
                                                </div>
                                                <br />
                                                <br />
                                                <div class="col-md-6">
                                                    <b>Photo 9:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->photo9?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Photo 10:</b><img width="80" height="80" src="<?=base_url()?>uploads/<?=$row->photo10?>">
                                                </div>
                                              
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
