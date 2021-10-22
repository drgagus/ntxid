 <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="text-monospace font-weight-bold"><?= $company['name'];?></h5>
    <p class="lead"></p>
  </div>
</div>
<!-- End jumbotron -->


 <!-- list product -->
  <div class="container-fluid">
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