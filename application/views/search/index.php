
  <!-- Page Content -->

  <!-- carousel -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
  </div>
  <!-- end carousel -->


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="text-monospace font-weight-bold"><i class="fas fa-search"></i> Pencarian</h5>
    <p class="lead"></p>
  </div>
</div>


  <!-- list product -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">


        
        <form action="<?= base_url('search');?>" method="POST">
  
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="form-group">
                 <select class="form-control" id="cat_code" name="cat_code" onload ="subcategorysearch()" onchange="subcategorysearch()">
                        <option value="">-- Semua Kategori --</option>
                        <?php foreach ($category as $cat) : ?>
                            <?php
                                   $cat_code = $cat['cat_code'] ;
                                   $queryCat = "    SELECT *
                                              FROM `category`
                                             WHERE `category`.`cat_code` = $cat_code
                                          ";
                                    $catname = $this->db->query($queryCat)->row_array();
                             ?>
                          <option value="<?= $cat['cat_code'];?>"><?= $catname['cat_name'];?></option>
                        <?php endforeach ; ?>
                      </select>
                  <?= form_error('cat_code', '<small class="text-danger">', '</small>'); ?>
                </div>
                </div>
                <div class="col-sm-6">
                 <div class="form-group">
                  <select class="form-control" id="subcat_code" name="subcat_code">
                        <option value="">-- Semua SubKategori --</option>
                    </select>
                  <?= form_error('subcat_code', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Kata Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
              </div>
            </div>
            <?= form_error('keyword', '<small class="text-danger">', '</small>'); ?>
             
              </form>
       
      </div>
    </div>
  </div>
<!-- End list product -->
