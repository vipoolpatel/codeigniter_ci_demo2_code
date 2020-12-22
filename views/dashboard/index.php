
  <!DOCTYPE html>
 <html>
<?php
$this->load->view('header/top');
?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper"> 
<!-- <?php
// $this->load->view('header/header');
?> -->
<?php
$this->load->view('header/sidebar');
?>
  <div class="content-wrapper">
  
 <section class="content-header">
       
      <h1>
          <i class="fa fa-arrow-left" aria-hidden="true"></i>

        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <i class="fa fa-desktop"></i>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <img src="http://seventech.tech/home_property/img/logo/20181206025244red_repicthousebase_1484336386-1.png" style="display: block;margin-left: auto;margin-right: auto;width: 55%;max-height: 550px;" alt="">

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
