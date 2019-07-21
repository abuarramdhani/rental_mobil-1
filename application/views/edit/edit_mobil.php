
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
                    <h1 class="h3 mb-4 text-gray-800">Halaman Mobil</h1>
                </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-10">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mobil" value="<?= $mobil['NAMA_MOBIL'] ?>">
                            <?php echo form_error('nama','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Merk Mobil</label>
                            <input type="text" class="form-control" name="merk" placeholder="Masukan Merk Mobil" value="<?= $mobil['MERK_MOBIL'] ?>">
                            <?php echo form_error('merk','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Mobil</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Mobil" rows="3" ><?= $mobil['DESKRIPSI_MOBIL'] ?></textarea>
                            <?php echo form_error('deskripsi','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Tahun Mobil</label>
                            <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Mobil" value="<?= $mobil['TAHUN_MOBIL'] ?>">
                            <?php echo form_error('tahun','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas Mobil</label>
                            <input type="text" class="form-control" name="kapasitas" placeholder="Masukan Kapasitas Mobil" value="<?= $mobil['KAPASITAS_MOBIL'] ?>">
                            <?php echo form_error('kapasitas','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Harga Mobil</label>
                            <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Mobil" value="<?= $mobil['HARGA_MOBIL'] ?>">
                            <?php echo form_error('harga','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <input type="text" class="form-control" name="warna" placeholder="Masukan Warna Mobil" value="<?= $mobil['WARNA_MOBIL'] ?>">
                            <?php echo form_error('warna','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Bensin Mobil</label>
                            <select class="form-control" name="bbm_mobil">
                                <?php if($mobil['BENSIN_MOBIL'] == 1) : ?>
                                    <option value="1" selected>Bensin</option>
                                    <option value="2">Solar</option>
                                <?php else: ?>
                                    <option value="1">Bensin</option>
                                    <option value="2" selected>Solar</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Plat No Mobil</label>
                            <input type="text" class="form-control" name="plat" placeholder="Masukan Plat No Mobil" value="<?= $mobil['PLAT_NO_MOBIL'] ?>">
                            <?php echo form_error('plat','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Status Sewa</label>
                            <select class="form-control" name="sewa">
                                <?php if($mobil['STATUS_SEWA'] == 1) : ?>
                                    <option value="1" selected>Tidak Disewa</option>
                                    <option value="2">Disewa</option>
                                <?php else: ?>
                                    <option value="1">Tidak Disewa</option>
                                    <option value="2" selected>Disewa</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Mobil</label>
                            <select class="form-control" name="status">
                                <?php if($mobil['STATUS_MOBIL'] == 1) : ?>
                                    <option value="1" selected>Tidak Tersedia</option>
                                    <option value="2">Tersedia</option>
                                <?php else: ?>
                                    <option value="1">Tidak Tersedia</option>
                                    <option value="2" selected>Tersedia</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gambar Mobil</label>
                            <input type="file" class="form-control-file" name="image_mobil">
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