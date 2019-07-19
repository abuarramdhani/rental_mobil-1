
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
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                            <th scope="col">No</th>
                            <th scope="col">Nama Mobil</th>
                            <th scope="col">Merk Mobil</th>
                            <th scope="col">Tahun Mobil</th>
                            <th scope="col">Harga Mobil</th>
                            <th scope="col">Plat No Mobil</th>
                            <th scope="col">Status Sewa</th>
                            <th scope="col">Status Mobil</th>
                            <th scope="col">Terakhir Diubah</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
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