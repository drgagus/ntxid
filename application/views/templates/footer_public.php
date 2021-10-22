<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Ya" jika kamu yakin ingin keluar dari halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Ya</a>
        </div>
      </div>
    </div>
  </div>

<br><br><br>

<div class="pos-f-t  fixed-bottom">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background:#34495e">
      
     <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
      <ul class="list-group list-group-flush">
        <?php foreach($category as $cat) : ?>
        <li class="list-group-item p-1">
          <div class="btn-group dropright">
          <a href="<?= base_url('product/category').$cat['cat_code'];?>" class="dropdown-toggle text-dark text-decoration-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
               $cat_code = $cat['cat_code'] ;
               $queryCat2 = "    SELECT *
                          FROM `category`
                         WHERE `category`.`cat_code` = $cat_code
                      ";
                $category2 = $this->db->query($queryCat2)->row_array();
                echo $category2['cat_name'];
         ?>
       </a>

       <?php
               $cat_code = $cat['cat_code'] ;
               $queryCat3 = "    SELECT *
                          FROM `category`
                         WHERE `category`.`cat_code` = $cat_code
                      ";
                $category3 = $this->db->query($queryCat3)->result_array();
         ?>

          
            <div class="dropdown-menu">
                <ul class="list-group list-group-flush">
                  <?php foreach ($category3 as $cat3) : ?>
                  <li class="list-group-item p-1">
                    <a class="text-decoration-none text-dark" href="<?= base_url('product/subcategory/').$cat_code."/".$cat3['subcat_code'];?>"><?= $cat3['subcat_name'] ; ?></a>
                  </li>
                  <?php endforeach ;?>
                </ul>
            </div>
     </div>

        </li>
        <?php endforeach ;?>
      </ul>
    </div>
  </div>
</div>
      
  

    </div>
  </div>
  <nav class="navbar navbar-dark" style="background:#000">
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      START
    </button>
    <form class="form-inline" action="<?= base_url('search/home');?>" method="post" style="width:137px">
    <input class="form-control mr-sm-2" id="searchProduct" type="search" placeholder="Cari Produk" aria-label="Search" id="keyword" name="keyword">
  </form>
  </nav>
</div>

 <!-- Footer -->
  <!-- <footer class="bg-dark">
    <div class="container">
      <small>
      <p class="m-0 text-center text-white">Copyright &copy; <?= $company['name']; ?> <?= date('Y');?></p>
      <p class="m-0 text-center text-white">Created by <a href="http://www.drgagus.com" class="card-link" target=_blank >drg.agus</a></p>
    </small>
    </div>
  </footer> -->
  <!-- End Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?= base_url('assets/') ;?>js/category-product.js"></script>
  
</body>

</html>
