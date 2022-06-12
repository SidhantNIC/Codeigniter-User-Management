<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | ADD USERS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <a class="nav-link" href="<?php echo base_url('users/admindashboard') ?>"><h3>Return Dashboard</h3></a>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ADD</b>EMPLOYEE</a>
  </div>
  <!-- /.login-logo -->

  <?php
      if(!empty($this->session->flashdata('msg'))){
        echo "<div class='alert alert-danger'>".$this->session->flashdata('msg')."</div>";
      }
    ?>
  <div class="card">
  
    <div class="card-body login-card-body">
      <p class="login-box-msg">Hey admin add employee</p>
      <form action="<?php echo base_url().'users/register'?>" name="loginform" id="loginform" method="post">
      <?php echo form_error('fname');?>
  
      <div class="input-group mb-3">
          <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>

        <?php echo form_error('mname');?>
        <div class="input-group mb-3">
          <input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>

        <?php echo form_error('lname');?>

        <div class="input-group mb-3">
          <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>

        <?php echo form_error('dob');?>

        <div class="input-group mb-3">
          <input type="date" name="dob" id="dob" class="form-control" placeholder="DOB">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('email');?>

        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <?php echo form_error('phone');?>

        <div class="input-group mb-3">
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('gender');?>

        <div class="input-group mb-3">
          <select class="form-control" name="gender" id="">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Agreement
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">ADD USER</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
