<!DOCTYPE html>
<html>
    <?php $this->load->view('header/top'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper"> 

            <?php $this->load->view('header/sidebar'); ?>

            <div class="content-wrapper">

                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-building-o"></i> Apartment </a></li>
                        <li class="active">Update Apartment   </li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <section class="content">
                                <div class="row">
                                    <!-- /.box-header -->
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Update Apartment</h3><br/>


                                                <br>
                                                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url() ?>apartment/update"> 
                                                    <input type="hidden" name="Id_Apartment" value="<?= $edit->Id_Apartment ?>"> 

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Status Property</label>

                                                            <select class="form-control" name="Status_Property">

                                                                <option value="">Select Status Property</option>
                                                                <?php
                                                                foreach ($status_property as $row_status) {
                                                                    $selected = '';
                                                                    if ($row_status->Id_Status_Property == $edit->Status_Property) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_status->Id_Status_Property ?>"><?= $row_status->Status_Property ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
<div class="col-md-6 mb-5">
<label>User</label>
<select class="form-control" name="Id_User">
<option value="">Select User</option>
<?php
foreach ($user as $row_user) {
$selected = '';
if ($row_user->Id_User == $edit->Id_User) {
    $selected = 'selected';
}
?>
<option <?= $selected ?> value="<?= $row_user->Id_User ?>"><?= $row_user->Username ?></option>
<?php } ?>
</select>
</div>
</div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Broker Out</label>
                                                            <select class="form-control" name="Id_Broker_Out">
                                                                <option value="">Select Broker Out</option>
                                                                <?php
                                                                foreach ($broker_out as $row_broker) {
                                                                    $selected = '';
                                                                    if ($row_broker->Id_Broker_Out == $edit->Id_Broker_Out) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_broker->Id_Broker_Out ?>"><?= $row_broker->Name ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Broker In</label>
                                                            <select class="form-control" name="Id_Broker_In">
                                                                <option value="">Select Broker In</option>
                                                                    <?php
                                                                    foreach ($broker_in as $row_boin) {
                                                                        $selected = '';
                                                                        if ($row_boin->Broker_In == $edit->Id_Broker_In) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_boin->Broker_In ?>"><?= $row_boin->Name ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 md-5">
                                                            <label>Developer</label>
                                                            <select class="form-control" name="Id_Developer">
                                                                <option value="">Select Developer</option>
                                                                    <?php
                                                                    foreach ($developer as $row_dev) {
                                                                        $selected = '';
                                                                        if ($row_dev->Id_Developer == $edit->Id_Developer) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_dev->Id_Developer ?>"><?= $row_dev->NameCompany ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6 mb-5">
                                                            <label>Particular	</label>
                                                            <select class="form-control" name="Id_Particular">
                                                                <option value="">Select Particular	</option>
                                                                <?php
                                                                foreach ($particular as $row_par) {
                                                                    $selected = '';
                                                                    if ($row_par->Id_Particular == $edit->Id_Particular) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_par->Id_Particular ?>"><?= $row_par->Name ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Date In </label>
                                                            <div class='input-group date' id='datepicker'>
                                                                <input type='text' class="form-control" value="<?= $edit->Date_In ?>" name="Date_In"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Date Out </label>
                                                            <div class='input-group date' id='datepicker1'>
                                                                <input type='text' class="form-control" value="<?= $edit->Date_Out ?>" name="Date_Out"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Expiration Date</label>
                                                            <div class='input-group date' id='datepicker2'>
                                                                <input type='text' class="form-control" value="<?= $edit->Expiration_Date ?>" name="Expiration_Date"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Price dollar	</label>
                                                            <input type="text" name="Price_dollar" class="form-control" value="<?= $edit->Price_dollar ?>" placeholder="Price dollar">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Comission Type</label>
                                                            <select class="form-control" name="Id_Comission_Type">
                                                                <option value="">Select Comission Type</option>
                                                                    <?php
                                                                    foreach ($cat_comission_type as $row_cat) {
                                                                        $selected = '';
                                                                        if ($row_cat->Id_Cat_Comission_Type == $edit->Id_Comission_Type) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_cat->Id_Cat_Comission_Type ?>"><?= $row_cat->Comission_Type ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Transaction Type</label>

                                                            <select class="form-control" name="Id_Transaction_Type">
                                                                <option value="">Select Transaction Type</option>
                                                                    <?php
                                                                    foreach ($cat_transaction_type as $row_tra) {
                                                                        $selected = '';
                                                                        if ($row_tra->Id_Cat_Transaction_Type == $edit->Id_Transaction_Type) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_tra->Id_Cat_Transaction_Type ?>"><?= $row_tra->Transaction_Type ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 1</label>
                                                            <input type="file" class="btn btn-primary" name="Photo1">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->Photo1 ?>">
                                                            <input type="hidden" value="<?= $edit->Photo1 ?>" name="old_imagename1">



                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 2</label>
                                                            <input type="file" class="btn btn-primary" name="Photo2">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->Photo2 ?>">
                                                            <input type="hidden" value="<?= $edit->Photo2 ?>" name="old_imagename2">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 3</label>
                                                            <input type="file" class="btn btn-primary" name="Photo3">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->Photo3 ?>">
                                                            <input type="hidden" value="<?= $edit->Photo3 ?>" name="old_imagename3">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 4</label>
                                                            <input type="file" class="btn btn-primary" name="Photo4">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->Photo4 ?>">
                                                            <input type="hidden" value="<?= $edit->Photo4 ?>" name="old_imagename4">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 5</label>
                                                            <input type="file" class="btn btn-primary" name="Photo5">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->Photo5 ?>">
                                                            <input type="hidden" value="<?= $edit->Photo5 ?>" name="old_imagename5">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 6</label>
                                                            <input type="file" class="btn btn-primary" name="photo6">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->photo6 ?>">
                                                            <input type="hidden" value="<?= $edit->photo6 ?>" name="old_imagename6">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 7</label>
                                                            <input type="file" class="btn btn-primary" name="photo7">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->photo7 ?>">
                                                            <input type="hidden" value="<?= $edit->photo7 ?>" name="old_imagename7">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 8</label>
                                                            <input type="file" class="btn btn-primary" name="photo8">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->photo8 ?>">
                                                            <input type="hidden" value="<?= $edit->photo8 ?>" name="old_imagename8">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 9</label>
                                                            <input type="file" class="btn btn-primary" name="photo9">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->photo9 ?>">
                                                            <input type="hidden" value="<?= $edit->photo9 ?>" name="old_imagename9">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Photo 10</label>
                                                            <input type="file" class="btn btn-primary" name="photo10">
                                                            <img  width="70" height="70"  src="<?= base_url() ?>uploads/<?= $edit->photo10 ?>">
                                                            <input type="hidden" value="<?= $edit->photo10 ?>" name="old_imagename10">
                                                        </div>
                                                    </div>


                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Department</label>
                                                            <select class="form-control" name="Id_Cat_Department">
                                                                <option value="">Select Cat Department</option>
                                                                <?php
                                                                foreach ($cat_department as $row_deo) {
                                                                    $selected = '';
                                                                    if ($row_deo->Id_Department == $edit->Id_Cat_Department) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_deo->Id_Department ?>"><?= $row_deo->Department ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat City</label>
                                                            <select class="form-control" name="Id_Cat_City">
                                                                <option value="">Select Cat City</option>
                                                                        <?php
                                                                        foreach ($cat_city as $row_poi) {
                                                                            $selected = '';
                                                                            if ($row_poi->Id_Cat_City == $edit->Id_Cat_City) {
                                                                                $selected = 'selected';
                                                                            }
                                                                            ?>
                                                                    <option <?= $selected ?> value="<?= $row_poi->Id_Cat_City ?>"><?= $row_poi->City ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Zone</label>
                                                            <select class="form-control" name="Id_Cat_Zone">
                                                                <option value="">Select Cat Zone</option>
                                                                <?php
                                                                foreach ($cat_zone as $row_iop) {
                                                                    $selected = '';
                                                                    if ($row_iop->Id_Zone == $edit->Id_Cat_Zone) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_iop->Id_Zone ?>"><?= $row_iop->Zone ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Area</label>
                                                            <select class="form-control" name="Id_Cat_Area">
                                                                <option value="">Select Cat Area</option>
                                                                <?php
                                                                foreach ($cat_area as $row_uy) {
                                                                    $selected = '';
                                                                    if ($row_uy->Id_Cat_Area == $edit->Id_Cat_Area) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_uy->Id_Cat_Area ?>"><?= $row_uy->Area ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Road To</label>
                                                            <select class="form-control" name="Id_Cat_Road_To">
                                                                <option value="">Select Cat Road To</option>
                                                                <?php
                                                                foreach ($cat_road_to as $row_hy) {
                                                                    $selected = '';
                                                                    if ($row_hy->Id_Road_To == $edit->Id_Cat_Road_To) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                           <option <?= $selected ?> value="<?= $row_hy->Id_Road_To ?>"><?= $row_hy->Road_To ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Enter To</label>
                                                            <select class="form-control" name="Id_Cat_Enter_To">
                                                                <option value="">Select Cat Enter To</option>
                                                                <?php
                                                                foreach ($cat_enter_to as $row_qw) {
                                                                    $selected = '';
                                                                    if ($row_qw->Id_Enter_To == $edit->Id_Cat_Enter_To) {
                                                                        $selected = 'selected';
                                                                    }
                                                                    ?>
                                                                    <option <?= $selected ?> value="<?= $row_qw->Id_Enter_To ?>"><?= $row_qw->Enter_To ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Address</label>
                                                            <textarea type="text" name="Address" placeholder="Address" class="form-control"><?= $edit->Address ?></textarea>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Comments</label>
                                                            <textarea type="text" name="Comments" placeholder="Comments" class="form-control"><?= $edit->Comments ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Mts 2</label>
                                                            <input type="text" name="Mts2" value="<?= $edit->Mts2 ?>" placeholder="Mts2" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Rooms</label>
                                                            <input type="text" name="Rooms" value="<?= $edit->Rooms ?>" placeholder="Rooms" class="form-control">
                                                        </div>
                                                    </div>



                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Principal Room Walking Closet </label>
    <div class="form-control">
        <label>Yes </label>&nbsp; &nbsp;    
        <input type="radio" value="1"<?= ($edit->Principal_Room_Walking_Closet == '1') ? 'checked' : '' ?> name="Principal_Room_Walking_Closet">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <label> No </label>&nbsp; &nbsp;
        <input type="radio" value="2"<?= ($edit->Principal_Room_Walking_Closet == '2') ? 'checked' : '' ?> name="Principal_Room_Walking_Closet">
    </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Principal Room Bathroom</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Principal_Room_Bathroom == '1') ? 'checked' : '' ?> name="Principal_Room_Bathroom">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Principal_Room_Bathroom == '2') ? 'checked' : '' ?> name="Principal_Room_Bathroom">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Service Room</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Service_Room == '1') ? 'checked' : '' ?> name="Service_Room">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Service_Room == '2') ? 'checked' : '' ?> name="Service_Room">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Studio</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" name="Studio" value="1"<?= ($edit->Studio == '1') ? 'checked' : '' ?>>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" name="Studio" value="2"<?= ($edit->Studio == '2') ? 'checked' : '' ?>>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Qty Bathrooms</label>
                                                            <input type="text" name="Qty_Bathrooms" value="<?= $edit->Qty_Bathrooms ?>" placeholder="Qty Bathrooms" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Balcony</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Balcony == '1') ? 'checked' : '' ?> name="Balcony">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Balcony == '2') ? 'checked' : '' ?> name="Balcony">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Balcony Mts 2</label>
                                                            <input type="text" value="<?= $edit->Balcony_mts2 ?>" name="Balcony_mts2" placeholder="Balcony Mts 2" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Living Room</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Living_Room == '1') ? 'checked' : '' ?> name="Living_Room">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Living_Room == '2') ? 'checked' : '' ?> name="Living_Room">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Dining Room</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Dining_Room == '1') ? 'checked' : '' ?> name="Dining_Room">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Dining_Room == '2') ? 'checked' : '' ?> name="Dining_Room">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Family Room</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Family_Room == '1') ? 'checked' : '' ?> name="Family_Room">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Family_Room == '2') ? 'checked' : '' ?> name="Family_Room">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Kitchen</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Kitchen == '1') ? 'checked' : '' ?> name="Kitchen">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Kitchen == '2') ? 'checked' : '' ?> name="Kitchen">
                                                            </div>
                                                        </div>
    <div class="col-md-6 mb-5">
        <label>Storage</label>
        <div class="form-control">
            <label>Yes </label>&nbsp; &nbsp;    
            <input type="radio" value="1"<?= ($edit->Storage == '1') ? 'checked' : '' ?> name="Storage">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <label> No </label>&nbsp; &nbsp;
            <input type="radio" value="2"<?= ($edit->Storage == '2') ? 'checked' : '' ?> name="Storage">
        </div>
    </div>
</div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Storage Mts 2</label>
                                                            <input type="text" value="<?= $edit->Storage_mts2 ?>" name="Storage_mts2" placeholder="Storage_mts2" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Parking</label>
                                                            <input type="text" value="<?= $edit->Parking ?>" name="Parking" placeholder="Parking" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Recreational Areas</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Recreational_Areas == '1') ? 'checked' : '' ?> name="Recreational_Areas">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Recreational_Areas == '2') ? 'checked' : '' ?> name="Recreational_Areas">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Business Center</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Business_Center == '1') ? 'checked' : '' ?> name="Business_Center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Business_Center == '2') ? 'checked' : '' ?> name="Business_Center">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Building Garden</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Building_Garden == '1') ? 'checked' : '' ?> name="Building_Garden">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Building_Garden == '2') ? 'checked' : '' ?> name="Building_Garden">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Gym</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Gym == '1') ? 'checked' : '' ?> name="Gym">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Gym == '2') ? 'checked' : '' ?> name="Gym">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Cat Type Laundry</label>
                                                            <select class="form-control" name="Cat_Type_Laundry">
                                                                <option value="">Select Cat Road To</option>
                                                                    <?php
                                                                    foreach ($cat_type_laundry as $row_bo) {
                                                                        $selected = '';
                                                                        if ($row_bo->Id_Type_Laundry == $edit->Cat_Type_Laundry) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_bo->Id_Type_Laundry ?>"><?= $row_bo->Type_Laundry ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Level</label>
                                                            <input type="text" value="<?= $edit->Level ?>" name="Level" placeholder="Level" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Elevator</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Elevator == '1') ? 'checked' : '' ?> name="Elevator">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Elevator == '2') ? 'checked' : '' ?> name="Elevator">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Type Apartment</label>
                                                            <select class="form-control" name="Id_Type_Apartment">
                                                                <option value="">Select Type Apartment</option>
                                                                    <?php
                                                                    foreach ($cat_type_apartment as $row_io) {
                                                                        $selected = '';
                                                                        if ($row_io->Id_Cat_Type_Apartment == $edit->Id_Type_Apartment) {
                                                                            $selected = 'selected';
                                                                        }
                                                                        ?>
                                                                    <option <?= $selected ?> value="<?= $row_io->Id_Cat_Type_Apartment ?>"><?= $row_io->Type_Apartment ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Penthouse</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Penthouse == '1') ? 'checked' : '' ?> name="Penthouse">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Penthouse == '2') ? 'checked' : '' ?> name="Penthouse">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Apartment Garden</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Apartment_Garden == '1') ? 'checked' : '' ?> name="Apartment_Garden">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Apartment_Garden == '2') ? 'checked' : '' ?> name="Apartment_Garden">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-5">
                                                            <label>Pergola</label>
                                                            <div class="form-control">
                                                                <label>Yes </label>&nbsp; &nbsp;    
                                                                <input type="radio" value="1"<?= ($edit->Pergola == '1') ? 'checked' : '' ?> name="Pergola">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                                <label> No </label>&nbsp; &nbsp;
                                                                <input type="radio" value="2"<?= ($edit->Pergola == '2') ? 'checked' : '' ?> name="Pergola">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-5">
                                                            <label>Created Date </label>
                                                            <div class='input-group date' id='datepicker3'>
                                                                <input type='text' value="<?= $edit->Created_Date ?>" class="form-control" name="Created_Date"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="box-footer">
                                                        <a href="<?= base_url() ?>apartment/apartment_list" class="btn btn-danger">Cancel</a>
                                                        <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                                                    </div>
                                                </form> 


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

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function () {

                $("#datepicker").datepicker();

                $("#datepicker1").datepicker();

                $("#datepicker2").datepicker();

                $("#datepicker3").datepicker();

            });

        </script>
    </body>
</html>
