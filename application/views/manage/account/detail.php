
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
                <a href="<?= base_url('assets/img/profile/').$account['image'];?>" target=_blank >
                <img src="<?= base_url('assets/img/profile/') . $account['image']; ?>" class="card-img" >
                </a>
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title"><i class="far fa-user"></i> <?= $account['name']; ?></h5>
                  <p class="card-text"><i class="far fa-envelope"></i> <?= $account['email']; ?></p>
                  <p class="card-text"><i class="fas fa-phone"></i> +62<?= $account['phonenumber']; ?></p>
                  <p class="card-text"><i class="fab fa-whatsapp"></i> +62<?= $account['whatsappnumber']; ?></p>
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i> <?= $account['address'].", ".$lokasi['kec_name'].", ".$lokasi['kot_name'].", ".$lokasi['prov_name']; ?></p>
                  <p class="card-text"><i class="far fa-address-card"></i> <small class="text-muted">Terdaftar sejak tanggal: <?= date('d F Y', $account['date_created']) ; ?></small></p>
                  <p class="card-text"><i class="far fa-address-card"></i> <small class="text-muted">Terakhir login: <?= date('d F Y', $account['last_logged']) ; ?> Jam <?= date('H:i:s', $account['last_logged']) ; ?></small></p>
                  <p class="card-text text-right">
                    <?php $user_id = $account['user_id']; 
                    if ($account['is_active'] == 1){ 
                      echo "<a href='".base_url()."manage/accountactived/".$user_id."/0' class='badge badge-primary' >Aktif</a>"; 
                    }else{ 
                      echo "<a href='".base_url()."manage/accountactived/".$user_id."/1' class='badge badge-danger'>NonAktif</a>"; } 
                      ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
