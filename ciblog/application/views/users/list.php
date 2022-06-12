<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body>
    <h1>USER LIST DISPLAY</h1>
    <a class="nav-link" href="<?php echo base_url().'users/admindashboard'?>"><h3>Return Dashboard</h3></a>
    
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped" style="width:90%;margin:auto">
                <tr style="background-color:cornflowerblue;color:white">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>AGE</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>GENDER</th>
                    <th>CODE</th>
                    <th>DELETE</th>
                    <th>EDIT</th>
                </tr>

                <?php if(!empty($users)) { foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['fname'] ?></td>
                        <td><?php echo $user['mname'] ?></td>
                        <td><?php echo $user['lname'] ?></td>
                        <td><?php echo $user['dob'] ?></td>
                        <td><?php echo $user['age'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['phone'] ?></td>
                        <td><?php echo $user['gender'] ?></td>
                        <td><?php echo $user['code'] ?></td>
                        <td>
                            <a href="<?php echo base_url().'users/edit/' . $user['id']?>" class="btn btn-primary"><span class="fas fa-pen"></span></a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'users/delete/' . $user['id']?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                <?php } } else { ?>
                    <tr>
                        <td>NO RECORDS FOUND</td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>