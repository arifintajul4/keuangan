<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              TAMBAH DATA SISWA
          </h2>
      </div>
      <div class="body">

        <?php 
          $attributes = array('class'=>'form-horizontal','role'=>'form');
          echo form_open_multipart($this->uri->segment(1).'/tambah_manajemenuser',$attributes);  ?>
          <div class='row-md-12'>
              <div class="row-md-12">
                <div class="row row-md-12">
                  <div class="col col-md-3">Nomor Induk Siswa</div>
                  <div class="col col-md-9"><input type="text" name="nis" id="nis" class="form-control"></div>
                </div>
                <div class="row row-md-12">
                  <div class="col col-md-3">Nama Lengakap</div>
                  <div class="col col-md-9"><input type="text" name="nama_siswa" class="form-control" focus></div>
                </div>
                <div class="row row-md-12">
                  <div class="col col-md-3">Tanggal Lahir</div>
                  <div class="col col-md-9"><input type="date" name="tgl_lahir_siswa" class="form-control"></div>
                </div>
                <div class="row row-md-12">
                  <div class="col-md-3">Jenis Kelamin</div>
                  <div class="col-md-9">
                    <select name="jk" class='form-control'>
                      <option>--Pilih Jenis Kelamin--</option>
                      <option value='L'>Laki-laki</option>
                      <option value='P'>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="row row-md-12">
                  <div class="col col-md-3">Agama</div>
                  <div class="col col-md-9"><input type="text" name="agama" class="form-control"></div>
                </div>
                <div class="row row-md-12">
                  <div class="col col-md-3">Kewarganegaraan</div>
                  <div class="col col-md-9">
                    <select name="kewarganegaraan" class='form-control'>
                      <option>--Pilih Kewarganegaraan--</option>
                      <option value='WNA'>WNI</option>
                      <option value='WNI'>WNA</option>
                    </select>
                  </div>
                </div>
                <div class="row row-md-12">
                  <div class="col-md-3">Alamat Lengkap</div>
                  <div class="col-md-9"><textarea class="form-control" rows="3" name="alamat_siswa"></textarea></div>
                </div>
                <div class="row row-md-12">
                  <div class="col-md-3">Nomor telepon</div>
                  <div class="col-md-9"><input type="number" name="no_tlp_siswa" class="form-control"></div>
                </div>
              </div>
              
              
          </div>
              
              <div class='box-footer'>
                <div class="row-md-12">
                <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                  <a href="<?= base_url().$this->uri->segment(1)?>/manajemensiswa">
                    <button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                </div>
              </div>
       <?= form_close() ?>

      </div>
    </div>
  </div>
</div>