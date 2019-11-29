<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>
          <div class="header">
              <h2>
                  MANAJEMEN SISWA
              </h2>
              
              <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                      <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_manajemenuser'>Tambah Data</a>
                  </li>
              </ul>
          </div>
          <div class="body table-responsive">
              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th style="width: 20%">Nama Lengkap</th>
                          <th>Jk</th>
                          <th>No Telepon</th>
                          <th>Alamat</th>
                          <th><center>Action</center></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach ($record as $row): ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $row[nis] ?></td>
                          <td><?= $row[nama] ?></td>
                          <td><?= $row[jk] ?></td>
                          <td><?= $row[no_tlp] ?></td>
                          <td><?= $row[alamat] ?></td>
                          <td>
                            <center>
                              <a class='btn btn-success btn-sm' title='Lihat Detail' href="<?= base_url().$this->uri->segment(1)?>/detailsiswa/<?= $row[nis] ?>"><i class="material-icons">pageview</i></a>
                              <a class='btn btn-danger btn-sm' title='Hapus Data' href="<?=base_url().$this->uri->segment(1)?>/delete_manajemenuser/<?= $row[nis]?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><i class="material-icons">delete</i></a>
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