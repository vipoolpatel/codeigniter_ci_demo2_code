<!DOCTYPE html>
<html>
<?php $this->load->view('header/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 

<?php $this->load->view('header/sidebar'); ?>

<div class="content-wrapper">
      
      
         <section class="content-header">
                    <h1><i class="fa fa-arrow-left" aria-hidden="true"></i> Apartment List  </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-building-o"></i> Apartment </a></li>
                        <li class="active">Apartment List </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="<?=base_url()?>apartment/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add New Apartment</a>

                            <section class="content">

                                <div class="row">
                                    <div class="col-xs-12">

                                        <!-- /.box -->

                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Apartment List</h3>

                                                
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status Property</th>
                                                            <th>User</th>
                                                            <th>Broker Out</th>
                                                            <th>Broker In</th>
                                                            <th>Developer</th>
                                                            <th>Particular</th>
                                                            
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($getRecord as $row) {
                                                         ?>
                                                        <tr>
                                                            <td><?= $row->Id_Apartment?></td>
                                                            <td><?= $row->Status_Property?></td>
                                                            <td><?= $row->Username?></td>
                                                            <td><?= $row->Name?></td>
                                                            <td><?= $row->Name?></td>
                                                            <td><?= $row->NameCompany?></td>
                                                            <td><?= $row->Name?></td>

   <td>
<a href="<?= base_url()?>apartment/view/<?= $row->Id_Apartment?>" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>
</a>
<a href="<?=base_url()?>apartment/edit/<?= $row->Id_Apartment?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
<a href="<?=base_url()?>apartment/delete/<?= $row->Id_Apartment?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
</a>                                                        
                                                      </td>
                                                        </tr>

                                                        <?php  } ?>
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
