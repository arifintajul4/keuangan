
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              PEMASUKAN
          </h2>
      </div>
      <div class="body table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Dari</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $no = 1; $tmp1 = 0;
                    foreach ($tampil_data->result_array() as $rows) {
                      $tanggal1 = tgl_indo($rows['tgl']);
                      $tmp1 = $tmp1 + $rows['jumlah'];
                  ?>
                  <tr>
                      <th scope="row"><?php echo $no ?></th>
                      <td><?php echo $rows['tujuan'] ?></td>
                      <td><?php echo $tanggal1 ?></td>
                      <td>Rp. <?php echo number_format($rows['jumlah']) ?></td>
                  </tr>
                  <?php $no++; } ?>
                  <tr>
                    <th scope="row" colspan="3">Total</th>
                    <td><strong>Rp. <?= number_format($tmp1); ?></strong></td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
    <div class="card">
      <div class="header">
          <h2>
             PENGELUARAN
          </h2>
      </div>
      <div class="body table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Keperluan</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                  </tr>
              </thead>
              <tbody>
                 <?php
                    $no = 1; $tmp = 0;
                    foreach ($tampil_data1->result_array() as $rows1) {
                      $tanggal = tgl_indo($rows1['tgl']);
                      $tmp = $tmp + $rows1['jumlah'];
                  ?>
                  <tr>
                      <th scope="row"><?php echo $no ?></th>
                      <td><?php echo $rows1['tujuan'] ?></td>
                      <td><?php echo $tanggal ?></td>
                      <td>Rp. <?php echo number_format($rows1['jumlah']) ?></td>
                  </tr>
                  <?php $no++; } ?>
                  <tr>
                    <th scope="row" colspan="3">Total</th>
                    <td><strong>Rp. <?= number_format($tmp); ?></strong></td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>