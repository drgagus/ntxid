<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $company['name'];?></title>

  <link href="<?= base_url('assets/') ;?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">

</head>

<body class="">

<!-- Image and text -->
<nav class="navbar navbar-dark fixed-top" style="background:#000">
  <a class="navbar-brand" href="<?= base_url();?>">
    <img src="<?= base_url('assets/img/brand.png');?>" width="30" height="30" class="d-inline-block align-top" alt="">
    <?= $company['name'];?>
  </a>

<?php if ($user) : ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="far fa-user-circle"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
      <?php if ($user['role_id']==1) : ?>
        <a class="dropdown-item" href="<?= base_url('admin');?>">Dasboard</a>
      <?php else : ?>
        <a class="dropdown-item" href="<?= base_url('user');?>">Pengaturan</a>
        <a class="dropdown-item" href="<?= base_url('myproduct');?>">Produk Saya</a>
      <?php endif ;?>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
<?php else : ?>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-sign-in-alt"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="<?= base_url('auth');?>">Login</a>
        <a class="dropdown-item" href="<?= base_url('auth/registration');?>">Register</a>
    </div>
  </li>
<?php endif ;?>

</nav>

 
  
  

