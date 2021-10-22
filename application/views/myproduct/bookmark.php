
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

          <div class="row">
          	<div clss="col-sm-6">
         <?= $this->session->flashdata('message'); ?>

         <div class="table-responsive-lg">
          		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Gambar</th>
				      <th scope="col">Nama Produk</th>
				      <th scope="col">Harga</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $no = 1 ; ?>
				  	<?php foreach ($bookmark as $mark) : ?>
				  		<?php
				               $product_id = $mark['product_id'] ;
				               $queryProduct = "    SELECT *
				                          FROM `product`
				                         WHERE `product`.`product_id` = $product_id
				                      ";
				                $product = $this->db->query($queryProduct)->row_array(); 
				         ?>
				    <tr>
				      <th scope="row"><?= $no++ ?></th>
				      <td><img class="img-tumbnail" src="<?= base_url('assets/img/product/').$product['image1'];?>" style="width:50px" ></td>
				      <td><a href="<?= base_url('product/detail/').$product['product_id']; ?>" class="text-decoration-none"><?= $product['name']; ?></a></td>
				      <td>Rp. <?= number_format($product['price'], 0, ",", "."); ?>,-</td>
				      <td><a href="<?= base_url('myproduct/delete_bookmark/').$product['product_id'];?>" class='badge badge-danger'>Hapus</a></td>
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

      
