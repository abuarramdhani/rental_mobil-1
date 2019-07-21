
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
                <div class="col-6 text-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahMobil"><i class="fas fa-plus mr-2"></i>Tambah Mobil</button>
                </div>
            </div>
        
            <div class="row justify-content-center">
               <div class="col-10">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mobil" value="<?= set_value('nama') ?>">
                            <?php echo form_error('nama','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Merk Mobil</label>
                            <input type="text" class="form-control" name="merk" placeholder="Masukan Merk Mobil" value="<?= set_value('merk') ?>">
                            <?php echo form_error('merk','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Mobil</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Mobil" rows="3" value="<?= set_value('deskripsi') ?>"></textarea>
                            <?php echo form_error('deskripsi','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Tahun Mobil</label>
                            <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Mobil" value="<?= set_value('tahun') ?>">
                            <?php echo form_error('tahun','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas Mobil</label>
                            <input type="text" class="form-control" name="kapasitas" placeholder="Masukan Kapasitas Mobil" value="<?= set_value('kapasitas') ?>">
                            <?php echo form_error('kapasitas','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Harga Mobil</label>
                            <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Mobil" value="<?= set_value('harga') ?>">
                            <?php echo form_error('harga','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <input type="text" class="form-control" name="warna" placeholder="Masukan Warna Mobil" value="<?= set_value('warna') ?>">
                            <?php echo form_error('warna','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Bensin Mobil</label>
                            <select class="form-control" name="bbm_mobil">
                                <option value="1">Bensin</option>
                                <option value="2">Solar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Plat No Mobil</label>
                            <input type="text" class="form-control" name="plat" placeholder="Masukan Plat No Mobil" value="<?= set_value('plat') ?>">
                            <?php echo form_error('plat','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Status Sewa</label>
                            <select class="form-control" name="sewa">
                                <option value="1">Tidak Disewa</option>
                                <option value="2">Disewa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Mobil</label>
                            <select class="form-control" name="status">
                                <option value="1">Tidak Tersedia</option>
                                <option value="2">Tersedia</option>
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