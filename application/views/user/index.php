
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
          <div style="max-width: 540px;">
          <?= $this->session->flashdata('message'); ?>
          </div>

          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-sm-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" >
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title"><i class="far fa-user"></i> <?= $user['name']; ?></h5>
                  <p class="card-text"><i class="far fa-envelope"></i> <?= $user['email']; ?></p>
                  <p class="card-text"><i class="fas fa-phone"></i> +62<?= $user['phonenumber']; ?></p>
                  <p class="card-text"><i class="fab fa-whatsapp"></i> +62<?= $user['whatsappnumber']; ?></p>
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i> <?= $user['address'].", ".$lokasi['kec_name'].", ".$lokasi['kot_name'].", ".$lokasi['prov_name']; ?></p>
                  <p class="card-text"><i class="far fa-address-card"></i> <small class="text-muted">Terdaftar sejak tanggal: <?= date('d F Y', $user['date_created']) ; ?></small></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
