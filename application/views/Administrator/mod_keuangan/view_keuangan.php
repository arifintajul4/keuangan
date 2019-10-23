<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>
          <div class="header">
              <h2>
                  KELOLA PEMBAYARAN
              </h2>
              <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                      <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_keuangan'>Tambah Data</a>
                  </li>
              </ul>
          </div>
          <div class="body">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th style="width: 20%">Nama Lengkap</th>
                          <th>Jenis Tagihan</th>
                          <th>Nominal</th>
                          <th>Status</th>
                          <th>Metode Bayar</th>
                          <th>Tanggal</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach ($pembayaran as $siswa): ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $bayar['nama'] ?></td>
                          <td><?= $bayar['jenis_pembayaran'] ?></td>
                          <td><?= $bayar['nominal'] ?></td>
                          <td><?= $bayar['status'] ?></td>
                          <td><?= $bayar['metode_bayar'] ?></td>
                          <td><?= $bayar['tgl_bayar'] ?></td>
                          <td>
                            <center>
                              <a class='btn btn-success btn-sm' title='Edit Data' href="<?= base_url().$this->uri->segment(1)?>/edit_manajemenuser/<?= $bayar[no_pembayaran] ?>"><span class='glyphicon glyphicon-edit'></span></a>
                              <a class='btn btn-danger btn-sm' title='Delete Data' href="<?=base_url().$this->uri->segment(1)?>/delete_manajemenuser/<?= $bayar[no_pembayaran]?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class='glyphicon glyphicon-remove'></span></a>
                            </center>
                          </td>
                        </tr>
                      <?php $no++; endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>