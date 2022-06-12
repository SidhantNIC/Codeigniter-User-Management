<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .header{
        background-color:#4b6cb7;
        color: white;
        height: 80px;
    }
    .content{
        text-align: center;
        padding-top: 40px;
    }
    .content h1{
      color: white;
    }
/*----------------LOGIN CSS-------------------*/
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: linear-gradient(90deg, black 0%, orange 100%);
  color: white;
}

.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #395591;
}

.form span {
  font-size: 35px;
  color: #4b6cb7;
}
/*----------------LOGIN CSS-------------------*/


</style>
</head>
<body>
    <div class="header">
        <h1>ORGANISATION</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>users/userlogin">User Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>users/adminlogin">Admin Login</a>
            </li>
        </ul>

    </div>
</nav>
    

