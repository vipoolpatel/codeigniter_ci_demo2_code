<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

          <div class="content-wrapper">
  <section class="content-header">
                     <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i>  Requirement Apartment </a></li>
                        <li class="active">Update Requirement Apartment  </li>
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
<h3 class="box-title">Update Requirement Apartment</h3>


</div>
<!-- /.box-header -->
<form class="form-horizontal" action="<?=base_url()?>requirement_apartment/update" method="POST" enctype="multipart/form-data">

	<input type="hidden"  name="Id_Requirement_Apartment"  value="<?=$edit_requirement_apartment->Id_Requirement_Apartment?>">
<div class="box-body">



                
  <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Status Requirement</label>
      <select class="form-control" name="Status_Requirement">
      	<option value="">Select Status_Requirement</option>
 <?php
   foreach($status_requirement as $row_status){
    $selected = '';
    if($row_status->Id_Status_Requirement == $edit_requirement_apartment->Status_Requirement)
    {
      $selected = 'selected';
    }
    ?>
      <option <?=$selected?> value="<?= $row_status->Id_Status_Requirement?>"><?= $row_status->Status_Requirement?></option>
    <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>Client</label>
      <select class="form-control" name="Id_Client">
          <option value="">Select Client</option>
      	 <?php
    foreach($client as $row_client){
      $selected = '';
      if ($row_client->Id_Client == $edit_requirement_apartment->Id_Client) {
        $selected = 'selected';
      }
    ?>
      <option <?=$selected?> value="<?= $row_client->Id_Client?>"><?= $row_client->Name?></option>
    <?php } ?>
      </select>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Date Requirement </label>
      <div class='input-group date' id='datepicker'>
        <input type='text' value="<?=$edit_requirement_apartment->Date_Requirement?>" class="form-control" name="Date_Requirement"/>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
    <div class="col-md-6 mb-5">
      <label>Date Expiration </label>
       <div class='input-group date' id='datepicker1'>
        <input type='text' value="<?=$edit_requirement_apartment->Date_Expiration?>" class="form-control" name="Date_Expiration"/>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
  
  </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Department </label>
      <select class="form-control" name="Id_Department">
      	<option value="">Select Department </option>
         <?php
    foreach($cat_department as $row_department){
       $selected = '';
      if ($row_department->Id_Department == $edit_requirement_apartment->Id_Department) {
        $selected = 'selected';
      }
    ?>
      <option <?=$selected?> value="<?= $row_department->Id_Department?>"><?= $row_department->Department?></option>
    <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>City</label>
      <select class="form-control" name="Id_City">
      	<option value="">Select City</option>
        <?php
foreach ($cat_city as $row_city) {
 $selected = '';
 if ($row_city->Id_Cat_City == $edit_requirement_apartment->Id_City) {
  $selected = 'selected';
  }
?>
<option <?=$selected?> value="<?= $row_city->Id_Cat_City?>"><?= $row_city->City?></option>
<?php
}
        ?>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Zone </label>
      <select class="form-control" name="Id_Zone">
      	<option value="">Select Zone </option>
<?php
foreach ($cat_zone as $row_zone) {
$selected = '';
if ($row_zone->Id_Zone == $edit_requirement_apartment->Id_Zone) 
{
$selected = 'selected';
}  
?>
        <option <?=$selected?> value="<?= $row_zone->Id_Zone?>"><?=$row_zone->Zone?></option>
  <?php
}
?>
      </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>Enter To</label>
      <select class="form-control" name="Id_Enter_to">
      	<option value="">Select Enter To</option>
<?php
foreach ($cat_enter_to as $row_enter) {
$selected = '';
if ($row_enter->Id_Enter_To == $edit_requirement_apartment->Id_Enter_to) {
     $selected = 'selected';
   }   

?>
        <option <?=$selected?> value="<?=$row_enter->Id_Enter_To?>"><?=$row_enter->Enter_To?></option>
  <?php
}
?>
      </select>
    </div>
  </div>
 
   <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Road To </label>
      <select class="form-control" name="Id_Road_To">
      	<option value="">Select Road To</option>
        <?php
        foreach ($cat_road_to as $row_road) {
            $selected = '';
            if ($row_road->Id_Road_To == $edit_requirement_apartment->Id_Road_To) {
            $selected = 'selected';
                }    
        ?>
        <option <?=$selected?> value="<?= $row_road->Id_Road_To?>"><?=$row_road->Road_To?></option>
   <?php
}
   ?>
              </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>Area</label>
      <select class="form-control" name="Id_Area">
      	<option value="">Select Area</option>
        <?php
        foreach ($cat_area as $row_area) {
          $selected = '';
          if ($row_area->Id_Cat_Area == $edit_requirement_apartment->Id_Area) {
            $selected = 'selected';
          }
        ?>
        <option <?=$selected?> value="<?= $row_area->Id_Cat_Area?>"><?= $row_area->Area?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Minimun Rooms</label>
      <input type="text" value="<?=$edit_requirement_apartment->Minimun_Rooms?>" class="form-control" name="Minimun_Rooms" placeholder="Minimun Rooms ">
     </div>
    <div class="col-md-6 mb-5">
      <label>Minimun Parking</label>
      <input type="text" value="<?=$edit_requirement_apartment->Minimun_Parking?>" class="form-control" name="Minimun_Parking" placeholder="Minimun Parking">
    </div>
 </div>

 <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Price Requirement</label>
      <input type="text" class="form-control" value="<?=$edit_requirement_apartment->PriceRequirement?>" name="PriceRequirement" placeholder="Price Requirement">
     </div>
    <div class="col-md-6 mb-5">
      <label>Price Range $ Min</label>
      <input type="text" class="form-control" value="<?=$edit_requirement_apartment->Price_Range_dollar_Min?>" name="Price_Range_dollar_Min" placeholder="Price Range $ Min">
    </div>
 </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Price Range $ Max</label>
      <input type="text" class="form-control" value="<?=$edit_requirement_apartment->Price_Range_dollar_Max?>" name="Price_Range_dollar_Max" placeholder="Price Range $ Max">
     </div>
    <div class="col-md-6 mb-5">
      <label>Level Range Min</label>
      <input type="text" class="form-control" name="Level_Range_Min" value="<?=$edit_requirement_apartment->Level_Range_Min?>" placeholder="Level Range Min">
    </div>
 </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Level Range Max </label>
      <input type="text" class="form-control" value="<?=$edit_requirement_apartment->Level_Range_Max?>" name="Level_Range_Max" placeholder="Level Range Max">
     </div>
   <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Comments</label>
<input type="text" class="form-control" name="Comments" value="<?=$edit_requirement_apartment->Comments?>" placeholder="Comments">
     </div>
   
 </div>
 </div>



</div>
<div class="box-footer">
<a href="<?=base_url()?>requirement_apartment/requirement_apartment_list" class="btn btn-danger">Cancel</a>
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

<?php
$this->load->view('header/footer');
?>

<div class="control-sidebar-bg"></div>
</div>

<?php
$this->load->view('header/down');
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>



 <script>
  $(document).ready(function() {

   $( "#datepicker" ).datepicker();
  
$( "#datepicker1" ).datepicker();

});






    
</script>
</body>
</html>
