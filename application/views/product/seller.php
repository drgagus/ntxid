
  <!-- Page Content -->

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="text-monospace font-weight-bold"><?= $seller['name'];?></h5>
    <p class="lead">Terdaftar sejak <?= date('d F Y', $seller['date_created']) ; ?></p>
  </div>
</div>

    <div class="container">
      <div class="row mt-5">
      <div class="col-lg-8">

        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Penjual</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kontak</a>
          </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
             <ul class="list-group list-group-flush border-bottom">
              <li class="list-group-item"><?= $seller['name'];?></li>
              <li class="list-group-item"><?= $seller['address'];?>, <?= $location['kec_name'];?>, <?= $location['kot_name'];?>, <?= $location['prov_name'];?></li>
              <li class="list-group-item">Terdaftar sejak <?= date('d F Y', $seller['date_created']) ; ?></li>
              <li class="list-group-item">Terakhir login <?= date('d F Y', $seller['last_logged']) ; ?> Jam <?= date('H:i:s', $seller['last_logged']) ; ?></li>
            </ul>
            </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <ul class="list-group list-group-flush border-bottom">
        <?php if ($this->session->userdata('email')): ?>
              <li class="list-group-item"><a href="https://wa.me/<?= $seller['whatsappnumber'];?>" target=_blank class="btn btn-outline-primary" style="width:100%"><i class="fab fa-whatsapp" ></i> WhatsApp</a></li>
              <li class="list-group-item"><a href="mailto:<?= $seller['email'];?>" target=_blank class="btn btn-outline-primary" style="width:100%"><i class="far fa-envelope"></i> E-mail</a></li>
              <li class="list-group-item"><a href="tel:+62<?= $seller['phonenumber']; ?>" target=_blank class="btn btn-outline-primary" style="width:100%"><i class="fas fa-phone-alt"></i> Call</a></li>
        <?php else : ?>
              <li class="list-group-item"><a href="<?= base_url('auth');?>" class="btn btn-outline-primary" style="width:100%"><i class="fab fa-whatsapp" ></i> WhatsApp</a></li>
              <li class="list-group-item"><a href="<?= base_url('auth');?>" class="btn btn-outline-primary" style="width:100%"><i class="far fa-envelope"></i> E-mail</a></li>
              <li class="list-group-item"><a href="<?= base_url('auth');?>" class="btn btn-outline-primary" style="width:100%"><i class="fas fa-phone-alt"></i> Call</a></li>
        <?php endif;?>
            </ul>
          </div>
        </div>
     
      </div>
    </div>
  </div>


  <!-- list product -->
  <div class="container mt-3">
    <div class="row">
      

        <?php foreach ($product as $pr) : ?>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="card mb-3" style="height:250px">
          <div class="row no-gutters" style="overflow:hidden">

            <div class="col-xs-12" style="height:230px ; padding:0 ; text-align:center; " >
              <a href="<?= base_url('product/detail/').$pr['product_id'] ;?>" class="text-decoration-none">
              <img src="<?= base_url('assets/img/product/').$pr['image1'];?>" class="card-img">
            </a>
            </div>

            
          </div class="text-justify">
              <small class="card-footer"> <a href="<?= base_url('product/detail/').$pr['product_id'] ;?>" class="text-decoration-none"><?= $pr['name'] ?></a> <br><strong> Rp. <?= number_format($pr['price'], 0, ",", "."); ?>,- </strong></small>
          </div>
          </div>
        <?php endforeach ;?>

       
    </div>
  </div>
<!-- End list product -->

 

 <!--  End Page Content  -->

 