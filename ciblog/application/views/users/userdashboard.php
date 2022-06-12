<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN AREA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <li><a href="<?php echo site_url('users/logout');?>">Logout</a></li>
      </li>
    </ul>
   
  </div>
</nav>
    <h1>WELCOME TO EMPLOYEE DASHBOARD</h1>
    <hr>

    <div class="row">
        <div class="col-md-9">
            <div class="userprofile">
                <table class="table">
                    <td><strong>EMPLOYEE ID</strong></td>
                    <td><?php echo $user->id ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE CODE</strong></td>
                    <td><?php echo $user->code ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE FIRST NAME</strong></td>
                    <td><?php echo $user->fname ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE MIDDLE NAME</strong></td>
                    <td><?php echo $user->mname ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE LAST NAME</strong></td>
                    <td><?php echo $user->lname ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE DOB</strong></td>
                    <td><?php echo $user->dob?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE AGE</strong></td>
                    <td><?php echo $user->age ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE EMAIL</strong></td>
                    <td><?php echo $user->email ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE PHONE NUMBER</strong></td>
                    <td><?php echo $user->phone ?></td>
                </table>
                <table class="table" table-bordered>
                    <td><strong>EMPLOYEE GENDER</strong></td>
                    <td><?php echo $user->gender ?></td>
                </table>
            </div>
        </div>
    </div>
</body>
</html>