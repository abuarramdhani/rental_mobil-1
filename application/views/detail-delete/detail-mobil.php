
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('template/navbar-top');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           <div class="row justify-content-center my-5">
               <div class="col-5">
                    <div class="card" >
                        <img src="<?= base_url('assets/img/').$gallery['IMAGE'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $mobil['NAMA_MOBIL'] ?></h5>
                            <h5 class="card-title"><?= $mobil['MERK_MOBIL'] ?></h5>
                            <h5 class="card-title"><?= $mobil['TAHUN_MOBIL'] ?></h5>
                            <h5 class="card-title"><?= $mobil['KAPASITAS_MOBIL'] ?></h5>
                            <h5 class="card-title">Rp. <?= number_format($mobil['HARGA_MOBIL'], 0, ',',',') ?></h5>
                            <h5 class="card-title"><?= $mobil['WARNA_MOBIL'] ?></h5>
                            <h5 class="card-title"><?= $mobil['BENSIN_MOBIL'] ?></h5>
                            <h5 class="card-title"><?= $mobil['PLAT_NO_MOBIL'] ?></h5>
                            <p class="card-text"><?= $mobil['DESKRIPSI_MOBIL'] ?></p>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div> <!-- ini penutup untuk content wrapper, pembuka ada di halaman template navbar id wrapper --> 