
  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url('assets/img/banner/banner1.jpg');?>">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/img/banner/banner2.jpg');?>">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/img/banner/banner3.jpg');?>">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

       <?= $this->session->flashdata('message'); ?>
        
        <!-- /.row -->

        <div class="row">
          <?php foreach ($product as $product) : ?>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mb-4">
          <div class="card mb-3" style="max-height: 300px;">
            <div class="row no-gutters">

              <div class="col-md-4">
                <a href=""><img class="card-img-top" src="<?= base_url('assets/img/product/').$product['image'];?>"></a>
              </div>

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $product['name'] ?></h5>
                  <p class="card-text">Rp. <?= number_format($product['price'], 0, ",", "."); ?>,-</p>
                  <p class="card-text"><small class="text-muted"> </small></p>
                </div>
              </div>

            </div>
          </div>
        </div>
          <?php endforeach ;?>
        </div>


      </div>
      <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 