
<div class="clearfix">
  <div class="row-md-12">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>
          <div class="header">
              <h2>
                  DATA SISWA
              </h2>
          </div>
          <div class="body">
              <ul class="nav nav-tabs tab-nav-right" role="tablist">
                  <li role="presentation" class="active"><a href="#masuk" data-toggle="tab">DATA DIRI</a></li>
                  <li role="presentation"><a href="#keluar" data-toggle="tab">TRANSAKSI TABUNGAN</a></li>
              </ul>
              <!-- Tab panel -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane animated active" id="masuk">
                    <div class="row-md-12 clearfix">
                      <div class="col-md-4">
                        <img src="<?= base_url('assets/images/default.png') ?>" alt="foto profil siswa" height="200px;" class="img-thumbnail">
                      </div>
                      <div class="col-md-8">
                        <table class="table table-bordered">
                          <tr>
                            <td>NIS</td>
                            <td><?= $siswa->nis ?></td>
                          </tr>
                          <tr>
                            <td>Nama Lengkap Siswa</td>
                            <td><?= $siswa->nama ?></td>
                          </tr>
                          <tr>
                            <td>No Telepon</td>
                            <td><?= $siswa->no_tlp ?></td>
                          </tr>
                          <tr>
                            <td>Tanggal Lahir</td>
                            <td><?= $siswa->tgl_lahir ?></td>
                          </tr>
                          <tr>
                            <td>Agama</td>
                            <td><?= $siswa->agama ?></td>
                          </tr>
                          <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= $siswa->jk ?></td>
                          </tr>
                          <tr>
                            <td>Kewarganegaraan</td>
                            <td><?= $siswa->kewarganegaraan ?></td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td><?= $siswa->alamat ?></td>
                          </tr>
                        </table>
                        <a href="<?= base_url('administrator/edit_manajemenuser/').$siswa->nis; ?>" class="btn btn-lg btn-warning" style="margin-right: 10px;">Ubah Data</a>
                        <a href="#" class="btn btn-lg float-right">Kembali</a>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane animated flipInXs" id="keluar">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                          <th>No</th>
                          <th>Jenis</th>
                          <th>Nominal</th>
                          <th>keterangan</th>
                          <th>Tanggal</th>
                          <th><center>Action</center></th>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($record as $riwayat): ?>
                            <tr>
                              <td><?= $i ?></td>
                              <td><?= $riwayat['jenis'] ?></td>
                              <td>Rp.<?= number_format($riwayat['nominal']) ?></td>
                              <td><?= $riwayat['ket'] ?></td>
                              <td><?= $riwayat['tanggal'] ?></td>
                              <td>
                                <center>
                                  <a href="<?= base_url('administrator/edit_trxtabungan/'.$riwayat['no_transaksi']) ?>" class="btn btn-warning ">Edit</a>
                                  <a href="<?= base_url('administrator/delete_trxtabungan/'.$riwayat['no_transaksi'].'/'.$siswa->nis) ?>" onclick="return confirm('Apa anda yakin ingin hapus data ini?')" class="btn btn-danger">Hapus</a>
                                </center>
                              </td>
                            </tr>
                          <?php $i++; endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div> <!-- tutup body -->

      </div>
  </div>
</div>