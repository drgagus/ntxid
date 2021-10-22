
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

          <div class="row">
            <div class="col-lg-5">
              

          <?= form_open_multipart('user/edit'); ?>
         <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

           <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
            </div>
          </div>

 
        <div class="form-group row">
            <label for="phonenumber" class="col-sm-3 col-form-label">Nomor Handphone</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?= $user['phonenumber']; ?>">
            <?= form_error('phonenumber', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="form-group row">
            <label for="whatsappnumber" class="col-sm-3 col-form-label">Nomor WhatsApp</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="whatsappnumber" name="whatsappnumber" value="<?= $user['whatsappnumber']; ?>">
            <?= form_error('whatsappnumber', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>


           <div class="form-group row">
            <label for="kec_code" class="col-sm-3 col-form-label">Kecamatan</label>
          <div class="col-sm-9"><select class="form-control" id="kec_code" name="kec_code">
                        <?php foreach ($kecamatan as $kec) : ?>
                          <option <?php echo ($user['kec_code'] == $kec['kec_code']) ? "selected": "" ?>  value="<?= $kec['kec_code']?>" ><?= $kec['kec_name'];?></option>
                        <?php endforeach ; ?>
                      </select>
            <?= form_error('kec_code', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Alamat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="address" name="address" value="<?= $user['address']; ?>">
            <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label">Gambar Profil</label>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-sm-3">
                <img class="img-thumbnail" src="<?= base_url('assets/img/profile/').$user['image'] ?>" />
              </div>
              <div class="col-sm-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id ="image" name="image" >
                  <label class="custom-file-label" for="image">Pilih gambar profil</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group row text-right">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">UBAH</button>
          </div>
        </div>

        </div>
      </div>

         



          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
