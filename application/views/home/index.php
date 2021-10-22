
  <!-- Page Content -->

  <!-- carousel -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url('assets/img/home/1.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/home/2.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/home/3.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/home/4.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/home/5.jpg');?>" class="d-block w-100" alt="...">
                </div>
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
      </div>
    </div>
  </div>
  <!-- end carousel -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="text-monospace font-weight-bold">Selamat Datang Di <a href="<?= base_url('product');?>" class="text-decoration-none"> <?= $company['name'];?></a></h5>
    <p class="lead"></p>
  </div>
</div>
<!-- End jumbotron -->

 

 <!-- list product -->
  <div class="container">

    <!-- <div class="row" id="result">
      <div class="col-lg-4">
        <p class="text-justify"><?= $company['about1']; ?></p>
      </div>
    </div>

    <div class="row" >
      <div class="col-lg-4">
        <p class="text-justify"><?= $company['about2']; ?></p>
      </div>
    </div>

    <div class="row" >
      <div class="col-lg-4">
        <p class="text-justify"><?= $company['about3']; ?></p>
      </div>
    </div> -->

       <div class="row">
        <?php foreach ($product as $pr) : ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="card mb-3" style="height:250px">
          <div class="row no-gutters" style="overflow:hidden">

            <div class="col-xs-12" style="height:230px ; padding:0 ; text-align:center; " >
              <a href="<?= base_url('product/detail/').$pr['product_id'] ;?>" >
              <img src="<?= base_url('assets/img/product/').$pr['image1'];?>" class="card-img">
              </a>
            </div>

            
          </div class="text-justify">
              <strong class="card-footer"> <a href="<?= base_url('product/detail/').$pr['product_id'] ;?>" class="text-decoration-none text-monospace font-weight-bold"><?= $pr['name'] ?></a> <br>Rp. <?= number_format($pr['price'], 0, ",", "."); ?>,- </strong>
          </div>
          </div>
        <?php endforeach ;?>
       </div>

  </div>
<!-- End list product -->