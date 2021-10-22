
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

          <div class="row">
          	<div clss="col-sm-6">
          	<?= $this->session->flashdata('message'); ?>
			<a href="<?= base_url(); ?>myproduct/add_product" class="btn btn-primary mb-3">BUAT PRODUK</a>
          	
            <div class="table-responsive-lg">
            <table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Nama Produk</th>
				      <th scope="col">Status</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $no=1 ; ?>
				  	<?php foreach ($myproduct as $product) : ?>
				    <tr>
				      <th scope="row"><?= $no++ ; ?></th>
				      <td><a href="<?= base_url('myproduct/detail/').$product['product_id']; ?>" class="text-decoration-none" ><?= $product['name'] ; ?></a></td>
				      <td>
				      	<?php if ($product['is_active']==1) : ?>
                    <label class="text-primary" >Aktif</label>
                  <?php else : ?>
                    <label class="text-danger" >Non Aktif</label>
                  <?php endif ; ?>
				      </td>
				      <td><a href="<?= base_url();?>myproduct/edit_product/<?= $product['product_id']; ?>" class='badge badge-warning'>UBAH</a>  
				      	<a href="<?= base_url();?>myproduct/delete_product/<?= $product['product_id']; ?>" class='badge badge-danger' onclick="return confirm('Yakin Hapus Produk Ini?');">HAPUS</a>
				      </td>
				    </tr>
				<?php endforeach ; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
