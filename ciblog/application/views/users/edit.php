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
<br>
<br>
<br>
<body style="background-color:coral" class="hold-transition login-page">
  <a class="nav-link" href="<?php echo base_url('users/admindashboard') ?>"><h3>Return Dashboard</h3></a>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>UPDATE</b>EMPLOYEE</a>
  </div>
  <!-- /.login-logo -->

  <div class="card" style="width:500px">
  
    <div class="card-body login-card-body">
      <p class="login-box-msg">Hey admin Update employee</p>
      <form action="<?php echo base_url().'users/edit/'.$user['id'];?>" name="editform" id="editform" method="post">
      
      
      
      <label for="">Unique Code</label>
      <?php echo form_error('code');?>

      <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('code',$user['code']) ?>" name="code" id="code" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>
        
        <label for="">Firstname</label>
        <?php echo form_error('fname');?>

      <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('fname',$user['fname']) ?>" name="fname" id="fname" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>

        <label for="">Middlename</label>
        <?php echo form_error('mname');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('mname',$user['mname']) ?>" name="mname" id="mname" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>


        <label for="">Lastname</label>
        <?php echo form_error('lname');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('lname',$user['lname']) ?>" name="lname" id="lname" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>


        <label for="">Date Of Birth</label>
        <?php echo form_error('dob');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('dob',$user['dob']) ?>" name="dob" id="dob" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>


        <label for="">Age</label>
        <?php echo form_error('age');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('age',$user['age']) ?>" name="age" id="age" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>


        <label for="">Email</label>
        <?php echo form_error('email');?>

        <div class="input-group mb-3">
          <input type="email" value="<?php echo set_value('email',$user['email']) ?>" name="email" id="email" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <label for="">Phone Number</label>
        <?php echo form_error('phone');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('phone',$user['phone']) ?>" name="phone" id="phone" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>


        <label for="">Gender</label>
        <?php echo form_error('gender');?>

        <div class="input-group mb-3">
          <input type="text" value="<?php echo set_value('gender',$user['gender']) ?>" name="gender" id="gender" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <a href="<?php echo base_url('users/index') ?>">CANCEL</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <a href=""></a><button type="submit" class="btn btn-success btn-block">UPDATE USER</button>
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
