
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
            <div class="row">
                <div class="col-6">
                    <h1 class="h3 mb-4 text-gray-800">Halaman Pesanan</h1>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary" href="<?= base_url('users/tambah-user') ?>"><i class="fas fa-plus mr-2"></i>Tambah User</a>
                </div>
            </div>
        
            <div class="row">
               <div class="col-12">
               <?= $this->session->flashdata('message'); ?>
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Activated</th>
                            <th scope="col">Created</th>
                            <th scope="col">Group User</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $mulai++; foreach($data->result_array() as $val) : ?>
                              <tr>
                                  <th><?= $mulai++?></th>
                                  <th><?= $val['USERNAME'] ?></th>
                                  <td><?= $val['NAME'] ?></td>
                                  <td><?= $val['EMAIL'] ?></td>
                                  <td><?= $val['NO_TELP'] ?></td>
                                  <td><?= $val['JENIS_KELAMIN'] ?></td>
                                  <td><?= $val['ALAMAT'] ?></td>
                                  <td><?= $val['ACTIVATED'] == 1 ? 'Aktiv' : 'Belum Aktif' ;?></td>
                                  <td><?= $val['CREATED'] ?></td>
                                  <td><?php if($val['GROUP_USER'] == 1){echo 'Super Admin';}elseif($val['GROUP_USER'] == 2){echo'Admin';}else{echo'User';} ?></td>
                                  <td class="text-center">
                                    <a class="badge badge-primary" href="<?= base_url('users/edit-user/').$val['ID_USER']?>">Edit</a>
                                    <a class="badge badge-danger" href="<?= base_url('users/delete-user/').$val['ID_USER']?>">Delete</a>
                                  </td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <?= $pagination; ?>
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