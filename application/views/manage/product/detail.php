

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> <?= $title;?> </h1>

          <div class="row">
          	<div clss="col-sm-6">
          		
              <div class="table-responsive">
                <?php 
                $cat = $product['cat_code'];
                $subcat = $product['subcat_code'];

                $querycatsubcat = "SELECT `category`.`cat_name`,`category`.`subcat_name`
                                    FROM `category`
                                  WHERE `category`.`cat_code` = $cat AND `category`.`subcat_code` = $subcat ";
                $catsubcat = $this->db->query($querycatsubcat)->row_array();
                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <tr>
                      <th>Kategori<br>SubKategori</th>
                      <td> - <?= $catsubcat['cat_name']; ?><br> - <?= $catsubcat['subcat_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Produk</th>
                      <td><?= $product['name']; ?></td>
                    </tr>
                    <tr>
                      <th>Deskripsi Produk</th>
                      <td><?= $product['about']; ?></td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp. <?= number_format($product['price'], 0, ",", "."); ?>,-</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td> 
                          <?php if ($product['is_active'] == 1){ 
                            echo "<a href='".base_url()."manage/productactived/".$product['product_id']."/0' class='badge badge-primary' >Aktif</a>"; 
                          }else{ echo "<a href='".base_url()."manage/productactived/".$product['product_id']."/1' class='badge badge-danger'>NonAktif</a>"; } 
                          ?>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->



      </div>
      <!-- End of Main Content -->



      
