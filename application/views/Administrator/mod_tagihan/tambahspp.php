<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header">
              <h2>
                  TAMBAH DATA SPP
              </h2>
          </div>
          <div class="body">
            <form action="" method="post">
              <div class='row-md-12'>
                  <div class="row-md-12">
                    <div class="row-md-12">
                      <div class="col-md-3">Tahun Ajaran</div>
                      <div class="col-md-9"><input type="text" id="nis" name="nis" class="form-control" readonly></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Nama Lengkap Siswa</div>
                      <div class="col-md-9"><input type="text" id="nama_siswa" name="nama_siswa" class="form-control"></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Jenis Pembayaran</div>
                      <div class="col-md-9">
                        <select name="jenis" class='form-control'>
                          <option>-- Pilih Jenis Pembayaran --</option>
                          <option value='spp'>SPP</option>
                          <option value='kegiatan'>Kegiatan Tahunan</option>
                        </select>
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Metode Pembayaran</div>
                      <div class="col-md-9">
                        <select name="bayar" id="bayar" class='form-control'>
                          <option>-- Pilih Metode Pembayaran --</option>
                          <option value='tunai'>Tunai</option>
                          <option value='tabungan'>Tabungan</option>
                          <option value='cicilan'>Cicilan</option>
                        </select>
                        <small style="display: none;" id="saldo">Saldo Siswa: Rp.</small>
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Nominal</div>
                      <div class="col-md-9"><input type="text" name="nominal" class="form-control"></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Keterangan</div>
                      <div class="col-md-9"><input type="text" name="keterangan" class="form-control"></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Tanggal Bayar</div>
                      <div class="col-md-9"><input type="date" name="tgl_bayar" class="form-control"></div>
                    </div>
                  </div>
               </div>
              <div class='box-footer'>
                <div class="row-md-12">
                  <button type='submit' name='submit' class='btn btn-info'>Submit</button>
                    <a href="<?= base_url().$this->uri->segment(1)?>/manajemenkeuangan">
                      <button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                </div>
              </div>
           </form>
          </div>
      </div>
  </div>
</div>