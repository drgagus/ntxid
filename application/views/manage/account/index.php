
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

          <div class="row">
          	<div clss="col-sm-6">
          		<div class="table-responsive-lg">
          		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Poto Profil</th>
				      <th scope="col">Nama Lengkap</th>
				      <th scope="col">Email</th>
				      <th scope="col">Status</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $no = 1 ; ?>
				  	<?php foreach ($account as $account) : ?>
				    <tr>
				      <th scope="row"><?= $no++ ?></th>
				      <td><a href="<?= base_url('manage/account_detail/').$account['user_id']; ?>" class="text-decoration-none"><img class="img-tumbnail" src="<?= base_url('assets/img/profile/').$account['image'];?>" style="width:50px" ></a></td>
				      <td><a href="<?= base_url('manage/account_detail/').$account['user_id']; ?>" class="text-decoration-none text-dark"><?= $account['name']; ?></a></td>
				      <td><?= $account['email']; ?></td>
				      <td>
				      	<?php $user_id = $account['user_id']; 
				      	if ($account['is_active'] == 1){ 
				      		echo "<div class='text-primary'>Aktif</div>"; 
				  		}else{ 
				  			echo "<div class='text-danger'>Non-Aktif</div>"; 
				  		} 
				  		?>
				  		</td>
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



      
