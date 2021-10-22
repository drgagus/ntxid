
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">TAMBAH PRODUK</h1>

          <div class="row">
          	<div class="col-sm-6">
               <?= $this->session->flashdata('message'); ?>

          		<?= form_open_multipart('myproduct/add_product'); ?>

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <select class="form-control" id="cat_code" name="cat_code" onload ="subcategory()" onchange="subcategory()">
                        <option value="">-- Pilih Kategori Produk --</option>
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
                <div class="col-sm-6">
                  <select class="form-control" id="subcat_code" name="subcat_code">
                        <option value="">-- Pilih SubKategori --</option>
                  
                    </select>
                  <?= form_error('subcat_code', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Produk" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" id="price" Placeholder="Harga" value="<?= set_value('price'); ?>">
                  <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                  </div>
                </div>
                <?= form_error('price', '<small class="text-danger">', '</small>'); ?>
              </div>

                <div class="form-group">
                  <textarea class="form-control" id="about" name="about" rows="3" placeholder="Deskripsi Produk"><?= set_value('about'); ?></textarea>
                  <?= form_error('about', '<small class="text-danger">', '</small>'); ?>
                </div>

                
                <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="image1" name="image1" >
                    <label class="custom-file-label" for="image1">Pilih gambar 1</label>
                    <?= form_error('image1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              
                <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="image2" name="image2" >
                    <label class="custom-file-label" for="image2">Pilih gambar 2</label>
                    <?= form_error('image2', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="image3" name="image3" >
                    <label class="custom-file-label" for="image3">Pilih gambar 3</label>
                    <?= form_error('image3', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="image4" name="image4" >
                    <label class="custom-file-label" for="image4">Pilih gambar 4</label>
                    <?= form_error('image4', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="image5" name="image5" >
                    <label class="custom-file-label" for="image5">Pilih gambar 5</label>
                    <?= form_error('image5', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Tambah Produk
                </button>
            </div>
              </form>

          	</div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
