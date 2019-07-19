
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
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
        
            <div class="row">
               <div class="col-12">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th>No</th>
                            <th width="15%">Nama Mobil</th>
                            <th>Merk Mobil</th>
                            <th>Tahun Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Plat No Mobil</th>
                            <th>Status Sewa</th>
                            <th>Status Mobil</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $mulai++; foreach($data->result_array() as $val) : ?>
                              <tr>
                                  <th><?= $mulai++ ?></th>
                                  <th><?= $val['NAMA_MOBIL'] ?></th>
                                  <td><?= $val['MERK_MOBIL'] ?></td>
                                  <td><?= $val['TAHUN_MOBIL'] ?></td>
                                  <td>Rp. <?= number_format($val['HARGA_MOBIL'], 0,',','.') ?></td>
                                  <td><?= $val['PLAT_NO_MOBIL'] ?></td>
                                  <td><?= ($val['STATUS_SEWA'] == 0) ? 'Tidak Disewa':'Disewa'; ?></td>
                                  <td><?= ($val['STATUS_MOBIL'] == 0) ? 'Tidak Tersedia':'Tersedia'; ?></td>
                                  <td class="text-center">
                                    <a class="badge badge-primary" href="<?= base_url('').$val['ID_MOBIL']?>">Edit</a>
                                    <a class="badge badge-warning" href="<?= base_url('').$val['ID_MOBIL']?>">Detail</a>
                                    <a class="badge badge-danger" href="<?= base_url('').$val['ID_MOBIL']?>">Delete</a>
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