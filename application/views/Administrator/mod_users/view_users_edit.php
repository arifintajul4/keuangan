<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              EDIT DATA SISWA
          </h2>
      </div>
      <div class="body">

        <?php 
          $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_manajemenuser',$attributes); ?>
              <div class='row-md-12'>
                  <div class="row-md-12">
                    <div class="row-md-12">
                      <div class="col-md-3">Nomor Induk Siswa</div>
                      <div class="col-md-9"><input type="text" name="nis" class="form-control" value="<?= $siswa['nis'] ?>"></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Nama Lengakap</div>
                      <div class="col-md-9">
                        <input type="text" name="nama_siswa" class="form-control" value="<?= $siswa['nama'] ?>">
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Tanggal Lahir</div>
                      <div class="col-md-9">
                        <input type="date" name="tgl_lahir_siswa" class="form-control" value="<?= $siswa['tgl_lahir'] ?>">
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Jenis Kelamin</div>
                      <div class="col-md-9">
                        <select name="jk" class='form-control'>
                          <option>--Pilih Jenis Kelamin--</option>
                          <option value='L' <?php if($siswa['jk'] == 'L') echo 'selected' ?> >Laki-laki</option>
                          <option value='P' <?php if($siswa['jk'] == 'P') echo 'selected' ?> >Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Agama</div>
                      <div class="col-md-9"><input type="text" name="agama" class="form-control" value="<?= $siswa['agama'] ?>"></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Kewarganegaraan</div>
                      <div class="col-md-9">
                        <select name="kewarganegaraan" class='form-control'>
                          <option>--Pilih Kewarganegaraan--</option>
                          <option value='WNA' <?php if($siswa['kewarganegaraan'] == 'WNA') echo 'selected' ?>>WNI</option>
                          <option value='WNI' <?php if($siswa['kewarganegaraan'] == 'WNI') echo 'selected' ?> >WNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Alamat Lengkap</div>
                      <div class="col-md-9"><textarea class="form-control" rows="3" name="alamat_siswa"><?= $siswa['alamat'] ?></textarea></div>
                    </div>
                    <div class="row-md-12">
                      <div class="col-md-3">Nomor telepon</div>
                      <div class="col-md-9"><input type="number" name="no_tlp_siswa" class="form-control" value="<?= $siswa['no_tlp'] ?>" ></div>
                    </div>
                  </div>
                  
              </div>
                  
                  <div class='box-footer'>
                    <div class="row-md-12">
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                      <a href="<?= base_url().$this->uri->segment(1)?>/manajemenuser">
                        <button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    </div>
                  </div>
           <?= form_close() ?>

          </div>
    </div>
  </div>
</div>