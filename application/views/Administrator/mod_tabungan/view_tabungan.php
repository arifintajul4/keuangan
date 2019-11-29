<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <?= $this->session->flashdata('message'); ?>
      <div class="header">
          <h2>
              MANAJEMEN TABUNGAN
          </h2>
          <ul class="header-dropdown m-r--5">
            <li class="dropdown">
              <a style="margin-right: 5px;" class='btn btn-primary btn-sm' href='<?= base_url('administrator')?>/tambah_tabungan'>Tambah Data</a>
              <a class='btn btn-warning btn-sm' href="<?= base_url('laporan/harian') ?>" target="_blank">Cetak Laporan Harian</a>
            </li>
          </ul>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
          <thead>
              <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Saldo</th>
                  <th><center>Action</center></th>
              </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($record as $row): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row['nis'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td>Rp.<?= number_format($row['saldo']) ?></td>
                <td>
                  <center>
                    <a class='btn btn-danger btn-sm' title='Delete Data' href="<?= base_url().$this->uri->segment(1)?>/delete_tabungan/<?= $row['id']?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class='glyphicon glyphicon-remove'></span></a>
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