
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
                    <h1 class="h3 mb-4 text-gray-800">Halaman Tambah User</h1>
                </div>
            </div>
        
            <div class="row justify-content-center">
               <div class="col-10">
                    <form method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?= set_value('username') ?>">
                            <?php echo form_error('username','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama User" value="<?= set_value('nama') ?>">
                            <?php echo form_error('nama','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Masukan NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="Masukan NIK" value="<?= set_value('nik') ?>">
                            <?php echo form_error('nik','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Email" value="<?= set_value('email') ?>">
                            <?php echo form_error('email','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="telp" placeholder="Masukan No Telp" value="<?= set_value('telp') ?>">
                            <?php echo form_error('telp','<div class="text-danger mt-1">','</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="gender">
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>User Role</label>
                            <select class="form-control" name="role">
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="<?= set_value('alamat') ?>">
                            <?php echo form_error('alamat','<div class="text-danger mt-1">','</div>'); ?>
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