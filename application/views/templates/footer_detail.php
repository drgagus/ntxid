<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Ya" jika kamu yakin ingin keluar dari halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Ya</a>
        </div>
      </div>
    </div>
  </div>

<br><br><br>

<?php if ($this->session->userdata('email')): ?>
<!-- Footer -->
  <footer class="fixed-bottom p-0 " style="background:#000">
<div class="container-fluid">
  <div class="row">
        <div class="col-4 p-0" >
          <a href="https://wa.me/<?= $seller['whatsappnumber'];?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="fab fa-whatsapp" ></i> WhatsApp</a>
        </div>
        <div class="col-4 p-0">
          <a href="mailto:<?= $seller['email'];?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="far fa-envelope"></i> E-mail</a>
        </div>
        <div class="col-4 p-0">
          <a href="tel:+62<?= $seller['phonenumber']; ?>" target=_blank class="btn btn-outline-light" style="width:100%"><i class="fas fa-phone-alt"></i> Call</a>
        </div>
  </div>
</div>
</footer>
<!-- End Footer -->
<?php else : ?>
<!-- Footer -->
  <footer class="fixed-bottom p-0 " style="background:#000">
<div class="container-fluid">
  <div class="row">
        <div class="col-4 p-0" >
          <a href="<?= base_url('auth');?>" class="btn btn-outline-light" style="width:100%"><i class="fab fa-whatsapp" ></i> WhatsApp</a>
        </div>
        <div class="col-4 p-0">
          <a href="<?= base_url('auth');?>" class="btn btn-outline-light" style="width:100%"><i class="far fa-envelope"></i> E-mail</a>
        </div>
        <div class="col-4 p-0">
          <a href="<?= base_url('auth');?>" class="btn btn-outline-light" style="width:100%"><i class="fas fa-phone-alt"></i> Call</a>
        </div>
  </div>
</div>
</footer>
<!-- End Footer -->
<?php endif ;?>




  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>

</html>
