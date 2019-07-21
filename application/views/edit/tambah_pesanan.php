
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('template/navbar-top'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <div class="row">
                <div class="col-6">
                    <h1 class="h3 mb-4 text-gray-800">Halaman Pesanan</h1>
                </div>
            </div>
        
            <div class="row justify-content-center">
               <div class="col-10">
                    <form method="post">
                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user">
                                <option>Pilih User</option>
                                <?php foreach(getDataUser() as $val) : ?>
                                    <option value="<?= $val['ID_USER'] ?>"><?= $val['NAME'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mobil</label>
                            <select class="form-control" name="mobil">
                                <option>Pilih Mobil</option>
                                <?php foreach(getDataMobil() as $val) : ?>
                                    <option value="<?= $val['ID_MOBIL'] ?>"><?= $val['NAMA_MOBIL'].' ('.$val['TAHUN_MOBIL'].') '.'Rp. '.number_format($val['HARGA_MOBIL'], 0, ',', '.') ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama Sewa</label>
                            <input type="number" class="form-control" name="sewa" placeholder="Masukan Lama Sewa (Hari)" value="<?= set_value('sewa') ?>">
                            <?php echo form_error('sewa','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Dengan Supir</label>
                            <select class="form-control" name="supir">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dokumen Pendukung</label>
                            <select class="form-control" name="dokumen">
                                <option value="KTP">KTP</option>
                                <option value="Kartu Keluarga">Kartu Keluarga</option>
                                <option value="STNK Motor">STNK Motor</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
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