
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
            </div>
        
            <div class="row">
               <div class="col-12">
               <?= $this->session->flashdata('message'); ?>
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Id User</th>
                            <th scope="col">Tgl Order</th>
                            <th scope="col">Total Pembayaran</th>
                            <th scope="col">Tanggal Pembayaran</th>
                            <th scope="col">Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $mulai++; foreach($data->result_array() as $val) : ?>
                              <tr>
                                  <th><?= $mulai++ ?></th>
                                  <th><?= $val['KODE_TRANSAKSI'] ?></th>
                                  <td><?= $val['ID_USER'] ?></td>
                                  <td><?= $val['TGL_SEWA'] ?></td>
                                  <td>Rp. <?= number_format($val['TOTAL'], 0,',','.') ?></td>
                                  <td><?= $val['TGL_PEMBAYARAN'] ?></td>
                                  <td><?= ucwords($val['STATUS_TRANSAKSI']) ?></td>
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