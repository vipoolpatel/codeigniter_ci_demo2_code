<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
   
     <section class="content-header">
        <h1><i class="fa fa-arrow-left" aria-hidden="true"></i>Road To List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-arrow-right"></i> Category  </a></li>
            <li class="active">Road To List</li>
            </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
  <a href="<?= base_url()?>roadto/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New Road To </a> 
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Road To List</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Road To ID</th>
                  <th>Road To</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
         	<?php
            foreach ($getRecord as $row) {
	        ?>
 			<tr>
 				<td><?= $row->Id_Road_To?></td>
 				<td><?= $row->Road_To?></td>
 				<td>
 					<a href="<?= base_url()?>roadto/edit/<?= $row->Id_Road_To?>" class="btn btn-primary">Edit</a>
 					<a href="<?= base_url()?>roadto/delete/<?= $row->Id_Road_To?>" class="btn btn-danger">Delete</a>
 				</td>
 			</tr>
			<?php
			}
			?>           
             </tbody>
            </table>
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
