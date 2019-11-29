<?php 
  $siswa = $this->Model_app->view_where('siswa', ['nis' => $transaksi->nis])->row();
?>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              EDIT DATA TABUNGAN
          </h2>
      </div>
      <div class="body">
        <form action="" method="post">
          <div class='row-md-12'>
              <div class="row-md-12">
                <div class="row-md-12">
                  <div class="col-md-3">Nomor Induk Siswa</div>
                  <div class="col-md-9">
                    <input type="text" id="nis" name="nis" class="bg-grey form-control" value="<?= $transaksi->nis ?>" readonly>
                  </div>
                </div>
                <div class="row-md-12">
                  <div class="col-md-3">Nama Lengakap Siswa</div>
                  <div class="col-md-9">
                    <input type="text" id="nama_siswa" name="nama_siswa" class="form-control"value="<?= $siswa->nama ?>" >
                  </div>
                </div>
                <div class="row-md-12">
                  <div class="col-md-3">Jenis</div>
                  <div class="col-md-9">
                    <select name="jenis" class='form-control'>
                      <option>--Pilih Jenis--</option>
                      <option <?= ($transaksi->jenis == 'masuk') ? 'selected' : '' ?> value='masuk'>Pemasukan</option>
                      <option <?= ($transaksi->jenis == 'keluar') ? 'selected' : '' ?> value='keluar'>Pengeluaran</option>
                    </select>
                  </div>
                </div>
                <div class="row-md-12">
                  <div class="col-md-3">Nominal</div>
                  <div class="col-md-9">
                    <input type="text" name="nominal" class="form-control" value="<?= $transaksi->nominal ?>">
                  </div>
                </div>
                <div class="row-md-12">
                  <div class="col-md-3">Keterangan</div>
                  <div class="col-md-9">
                    <input type="text" name="keterangan" class="form-control" value="<?= $transaksi->ket ?>">
                  </div>
                </div>
                <div class="row-md-12">
                  <div class="col-md-3">Tanggal</div>
                  <div class="col-md-9">
                    <input type="date" name="tanggal" class="form-control" value="<?= $transaksi->tanggal ?>">
                  </div>
                </div>
              </div>
           </div>
          <div class='box-footer'>
            <div class="row-md-12">
              <button type='submit' name='submit' class='btn btn-info'>Submit</button>
                <a href="<?= base_url().$this->uri->segment(1)?>/tabungan">
                  <button type='button' class='btn btn-default pull-right'>Cancel</button></a>
            </div>
          </div>
       </form>
    </div>
  </div>
</div>  