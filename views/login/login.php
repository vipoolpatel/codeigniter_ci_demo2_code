<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Property | Log in</title>
 <?php $this->load->view('header/top'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="dashbord.php"><b>Home </b>Property</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log In to your account</p>
  <?php
        echo $this->session->flashdata("error");
      ?>
    <form action="<?= base_url()?>login/login_validation" method="post">
      <div class="form-group has-feedback">
          <input type="text" name="Username" value="admin" class="form-control" required="" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback">
           
          </span>
      </div>
      <div class="form-group has-feedback">
          <input type="text" name="Password" value="123456" required="" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback">
          
          </span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" name="" class="btn btn-primary btn-block btn-flat">Sign In</button>
          
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<?php $this->load->view('header/down'); ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
