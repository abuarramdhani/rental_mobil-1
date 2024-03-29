
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
                    <a class="btn btn-primary" href="<?= base_url('pesanan/tambah-pesanan') ?>"><i class="fas fa-plus mr-2"></i>Tambah Pesanan</a>
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
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $mulai++; foreach($data->result_array() as $val) : ?>
                            <?php if($val['STATUS_TRANSAKSI'] == 'belum dibayar' || $val['STATUS_TRANSAKSI'] == 'sudah dibayar') : ?>
                              <tr>
                                  <th><?= $mulai++ ?></th>
                                  <th><?= $val['KODE_TRANSAKSI'] ?></th>
                                  <td><?= $val['ID_USER'] ?></td>
                                  <td><?= $val['TGL_SEWA'] ?></td>
                                  <td>Rp. <?= number_format($val['TOTAL'], 0,',','.') ?></td>
                                  <td><?= $val['TGL_PEMBAYARAN'] ?></td>
                                  <td><?= ucwords($val['STATUS_TRANSAKSI']) ?></td>
                                  <td class="text-center">
                                    <a class="badge badge-warning" href="<?= base_url('mobil/detail-mobil/').$val['ID']?>">Detail</a>
                                    <?php if($val['STATUS_TRANSAKSI'] == 'belum dibayar') :  ?>
                                      <a class="badge badge-primary" href="<?= base_url('pesanan/bayar-pesanan/').$val['ID'] ?>">Bayar</a>
                                    <?php elseif($val['STATUS_TRANSAKSI'] == 'sudah dibayar'): ?>
                                      <a class="badge badge-primary" href="<?= base_url('pesanan/proses-pesanan/').$val['ID'] ?>">Proses</a>
                                    <?php endif; ?>
                                  </td>
                              </tr>
                            <?php endif; ?>
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