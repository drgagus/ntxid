
  <!-- Page Content -->

  <div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h5 class="text-monospace font-weight-bold"><a href="<?= base_url('product');?>" class="text-decoration-none text-dark"><?= $company['name'];?></a></h5>
    <p class="lead">
      <a href="<?= base_url('product/category/').$catsubcat['cat_code'] ;?>" class="text-decoration-none"><?= $catsubcat['cat_name'] ;?></a>/
      <a href="<?= base_url('product/subcategory/').$catsubcat['cat_code']."/".$catsubcat['subcat_code'];?>" class="text-decoration-none" /><?= $catsubcat['subcat_name'];?></a>/
      <a href="#" class="text-decoration-none"><?= $product['name'];?></a>
    </p>
  </div>
</div>


  <!-- list product -->
  <div class="container">

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
        <h2 class="font-weight-bolder"><?= $product['name'] ; ?></h2>
        <h3 class="font-italic">Rp. <?= number_format($product['price'], 0, ",", "."); ?>,-</h3>
        <p><a href="<?= base_url('product/seller/').$seller['user_id'];?>" class="text-decoration-none"><img src="<?= base_url('assets/img/profile/').$seller['image'];?>" style="width:50px;height:50px"> <?= $seller['name'];?></a></p>
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
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lapor</a>
          </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class=""><?= $product['about'];?></p>
            <p class=""><small>dipost <?= date('d F Y', $product['date_created']) ;?>
            <br>terakhir diedit <?php if($product['last_edited']){ echo date('d F Y', $product['last_edited']); }else{ echo "-";} ?></small></p>
            <p class="border-bottom text-right"><a href="<?= base_url('myproduct/add_bookmark/').$product['product_id'];?>" class="btn btn-primary">SIMPAN</a></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="list-group list-group-flush border-bottom">
              <li class="list-group-item"><a href="<?= base_url('product/seller/').$seller['user_id'];?>" class="text-decoration-none text-dark"><?= $seller['name'];?></a></li>
              <li class="list-group-item"><?= $seller['address'];?>, <?= $location['kec_name'];?>, <?= $location['kot_name'];?>, <?= $location['prov_name'];?></li>
              <li class="list-group-item">Terdaftar sejak <?= date('d F Y', $seller['date_created']) ; ?></li>
              <li class="list-group-item">Terakhir login <?= date('d F Y', $seller['last_logged']) ; ?> Jam <?= date('H:i:s', $seller['last_logged']) ; ?></li>
            </ul>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <form action="" method="">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Laporkan Produk Ini</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" >Laporkan</button>
            </form>
        </div>
      </div>

        
     
      </div>
    </div>

  </div>
<!-- End list product -->

 

 <!--  End Page Content  -->

 