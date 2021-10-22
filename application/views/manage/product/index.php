

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> <?= $title;?> </h1>

          <div class="row">
          	<div clss="col-sm-6">
          		
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
            <tr>
              <th>No.</th>
              <th>Nama Produk</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1 ; ?>
            <?php foreach ($product as $product) : ?>
            <?php 
                $product_id = $product['product_id'] ; 
            ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><a href="<?= base_url('manage/product_detail/').$product['product_id'];?>" class="text-decoration-none text-dark"><?= $product['name']; ?></a></td>
              <td><?php if ($product['is_active'] == 1){ echo "<div class='text-primary'>Aktif</div>"; }else{ echo '<div class="text-danger">Non-Aktif</div>'; } ?></td>
            </tr>
        <?php endforeach; ?>
          </tbody>
                </table>
              </div>

          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->



      </div>
      <!-- End of Main Content -->



      
