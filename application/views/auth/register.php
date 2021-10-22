
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">

                  <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><a class="text-danger" href="<?= base_url();?>"><?= $company['name']; ?></a></h1>
              </div>
              <form class="user" method="post" action="<?= base_url(); ?>auth/registration">
                
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" placeholder="Nomor Handphone" value="<?= set_value('phonenumber'); ?>">
                  <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="whatsappnumber" name="whatsappnumber" placeholder="Nomor WhatsApp" value="<?= set_value('whatsappnumber'); ?>">
                  <?= form_error('whatsappnumber', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <select class="form-control" id="kec_code" name="kec_code">
                        <option value="">-- Pilih Kecamatan --</option>
                        <?php foreach ($kecamatan as $kec) : ?>
                          <option value="<?= $kec['kec_code'];?>"><?= $kec['kec_name'];?></option>
                        <?php endforeach ; ?>
                      </select>
                  <?= form_error('kec_code', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " id="address" name="address" placeholder="Alamat" value="<?= set_value('address'); ?>">
                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
              </div>

                  <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password (min: 8 karakter)">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ketik Ulang Password">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>


                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

 