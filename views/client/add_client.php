<!DOCTYPE html>
<html>
   <?php $this->load->view('header/top'); ?>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <?php $this->load->view('header/sidebar'); ?>
         <div class="content-wrapper">
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-user"></i> Client</a></li>
                  <li class="active">Add Client </li>
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
                                    <h3 class="box-title">
                                       Create Client
                                    </h3>
                                 </div>
                                 <!-- /.box-header -->
                                 <form class="form-horizontal" action="<?=base_url()?>client/insert" method="POST">
                                    <div class="box-body">
                                       <div class="form-group">
                                          <label class="col-sm-2 control-label">Name*</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" name="Name" required="">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-sm-2 control-label">Telephone*</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" name="Tel" required="">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label  class="col-sm-2 control-label">Email*</label>
                                          <div class="col-sm-10">
                                             <input type="email" class="form-control" name="Email" required="">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label  class="col-sm-2 control-label">Comment</label>
                                          <div class="col-sm-10">
                                             <textarea type="password" class="form-control" name="Comment"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                       <a href="<?=base_url()?>client/client_list" class="btn btn-danger">Cancle</a>
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
   </body>
</html>
