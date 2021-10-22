
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
<a href="<?= base_url('myproduct/edit_product/').$product['product_id']; ?>" class="btn btn-warning mb-3">EDIT</a>
<a href="<?= base_url('myproduct/delete_product/').$product['product_id']; ?>" class="btn btn-danger mb-3" onclick="return confirm('Yakin Hapus Produk Ini?');">HAPUS</a>
<h3><?= $catsubcat['cat_name'];?> / <?= $catsubcat['subcat_name'];?></h3>
 

    <div class="row mb-3">
      <div class="col-lg-8" style="">
        

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php if ($product['image1']) : ?>
            <div class="carousel-item active">
              <img src="<?= base_url('assets/img/product/').$product['image1'];?>" class="d-block w-100" alt="...">
            </div>
            <?php endif ; ?>
            <?php if ($product['image2']) : ?>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/product/').$product['image2'];?>" class="d-block w-100" alt="...">
            </div>
            <?php endif ; ?>
            <?php if ($product['image3']) : ?>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/product/').$product['image3'];?>" class="d-block w-100" alt="...">
            </div>
            <?php endif ; ?>
            <?php if ($product['image4']) : ?>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/product/').$product['image4'];?>" class="d-block w-100" alt="...">
            </div>
            <?php endif ; ?>
            <?php if ($product['image5']) : ?>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/product/').$product['image5'];?>" class="d-block w-100" alt="...">
            </div>
            <?php endif ; ?>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        <!-- <img src="<?= base_url('assets/img/product/').$product['image1'];?>" class="img-fluid" style="width:100%"> -->
        </div>
        <div class="col-lg-4">
        <h3 class="font-weight-bolder"><?= $product['name'] ; ?></h3>
        <h5 class="font-italic">Rp. <?= number_format($product['price'], 0, ",", "."); ?>,-</h4>
        <p><a href="" class="text-decoration-none"><img src="<?= base_url('assets/img/profile/').$user['image'];?>" style="width:50px;height:50px"> <?= $user['name'];?></a></p>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-8">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Penjual</a>
          </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class=""><?= $product['about'];?></p>
            <p class=""><small>dipost <?= date('d F Y', $product['date_created']) ;?>
            <br>terakhir diedit <?php if($product['last_edited']){ echo date('d F Y', $product['last_edited']); }else{ echo "-";} ?></small></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="list-group list-group-flush border-bottom">
              <li class="list-group-item"><?= $user['name'];?></li>
              <li class="list-group-item"><?= $user['address'];?>, <?= $location['kec_name'];?>, <?= $location['kot_name'];?>, <?= $location['prov_name'];?></li>
              <li class="list-group-item">Terdaftar sejak <?= date('d F Y', $user['date_created']) ; ?></li>
              <li class="list-group-item">Terakhir login <?= date('d F Y', $user['last_logged']) ; ?> Jam <?= date('H:i:s', $user['last_logged']) ; ?></li>
            </ul>
        </div>
      </div>

       


     
      </div>
    </div>



<div class="container-fluid p-0 " style="background:#000">
  <div class="row">
        <div class="col-4 p-0" >
          <a href="https://wa.me/<?= $user['whatsappnumber'];?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="fab fa-whatsapp" ></i></a>
        </div>
        <div class="col-4 p-0">
          <a href="mailto:<?= $user['email'];?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="far fa-envelope"></i></a>
        </div>
        <div class="col-4 p-0">
          <a href="tel:+62<?= $user['phonenumber']; ?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="fas fa-phone-alt"></i></a>
        </div>
  </div>
</div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
