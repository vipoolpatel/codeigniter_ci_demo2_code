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
                        <li class="active">Add Requirement Apartment  </li>
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
<h3 class="box-title">Create Requirement Apartment</h3>


</div>
<!-- /.box-header -->
<form class="form-horizontal" action="<?=base_url()?>requirement_apartment/insert" method="POST" enctype="multipart/form-data">
<div class="box-body">



                
  <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Status Requirement</label>
      <select class="form-control" name="Status_Requirement">
      	<option value="">Select Status_Requirement</option>
 <?php
    foreach($status_requirement as $row_status){
    ?>
      <option value="<?= $row_status->Id_Status_Requirement?>"><?= $row_status->Status_Requirement?></option>
    <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>Client</label>
      <select class="form-control" name="Id_Client">
          <option value="">Select Client</option>
      	 <?php
    foreach($client as $row_client){
    ?>
      <option value="<?= $row_client->Id_Client?>"><?= $row_client->Name?></option>
    <?php } ?>
      </select>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Date Requirement </label>
      <div class='input-group date' id='datepicker'>
        <input type='text' class="form-control" name="Date_Requirement" required="" />
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
    <div class="col-md-6 mb-5">
      <label>Date Expiration </label>
       <div class='input-group date' id='datepicker1'>
        <input type='text' class="form-control" name="Date_Expiration" required="" />
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
    ?>
      <option value="<?= $row_department->Id_Department?>"><?= $row_department->Department?></option>
    <?php } ?>
      </select>
    </div>
    <div class="col-md-6 mb-5">
      <label>City</label>
      <select class="form-control" name="Id_City">
      	<option value="">Select City</option>
        <?php
foreach ($cat_city as $row_city) {
 
?>
<option value="<?= $row_city->Id_Cat_City?>"><?= $row_city->City?></option>
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
  

?>
        <option value="<?= $row_zone->Id_Zone?>"><?=$row_zone->Zone?></option>
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
   

?>
        <option value="<?=$row_enter->Id_Enter_To?>"><?=$row_enter->Enter_To?></option>
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
                
        ?>
        <option value="<?= $row_road->Id_Road_To?>"><?=$row_road->Road_To?></option>
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
        ?>
        <option value="<?= $row_area->Id_Cat_Area?>"><?= $row_area->Area?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Minimun Rooms</label>
      <input type="text" class="form-control" name="Minimun_Rooms" placeholder="Minimun Rooms ">
     </div>
    <div class="col-md-6 mb-5">
      <label>Minimun Parking</label>
      <input type="text" class="form-control" name="Minimun_Parking" placeholder="Minimun Parking">
    </div>
 </div>

 <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Price Requirement</label>
      <input type="text" class="form-control" name="PriceRequirement" placeholder="Price Requirement">
     </div>
    <div class="col-md-6 mb-5">
      <label>Price Range $ Min</label>
      <input type="text" class="form-control" name="Price_Range_dollar_Min" placeholder="Price Range $ Min">
    </div>
 </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Price Range $ Max</label>
      <input type="text" class="form-control" name="Price_Range_dollar_Max" placeholder="Price Range $ Max">
     </div>
    <div class="col-md-6 mb-5">
      <label>Level Range Min</label>
      <input type="text" class="form-control" name="Level_Range_Min" placeholder="Level Range Min">
    </div>
 </div>

<div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Level Range Max </label>
      <input type="text" class="form-control" name="Level_Range_Max" placeholder="Level Range Max">
     </div>
   <div class="form-row">
    <div class="col-md-6 mb-5">
      <label>Comments</label>
<input type="text" class="form-control" name="Comments" placeholder="Comments">
     </div>
   
 </div>
 </div>



</div>
<div class="box-footer">
<a href="<?=base_url()?>requirement_apartment/requirement_apartment_list" class="btn btn-danger">Cancel</a>
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
