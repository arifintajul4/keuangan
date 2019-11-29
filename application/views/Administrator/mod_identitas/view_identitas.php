<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    IDENTITAS SEKOLAH
                </h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        
                    <?php 

                    $attributes = array('class'=>'form-horizontal','role'=>'form');
                    echo form_open_multipart($this->uri->segment(1).'/identitaswebsite',$attributes); 
                    ?>
                    <div class='col-md-12'>
                        <input type='hidden' name='id' value='<?= $record['id_identitas'] ?>'>
                        <div class="row-md-12">
                            <div class="col-md-2">
                                <p><strong>Nama Sekolah</strong></p>
                            </div>
                            <div class="col-md-10">
                                <input type='text' class='form-control' name='nama_sekolah' value='<?= $record['nama_sekolah'] ?>'>
                            </div>
                        </div>
                        <div class="row-md-12">
                            <div class="col-md-2">
                                <p><strong>No Telepon</strong></p>
                            </div>
                            <div class="col-md-10">
                                <input type='number' class='form-control' name='no_telp' value='<?= $record['no_telp'] ?>'>
                            </div>
                        </div>
                        <div class="row-md-12">
                            <div class="col-md-2">
                                <p><strong>Alamat</strong></p>
                            </div>
                            <div class="col-md-10">
                                <textarea class='form-control' name='alamat' style='height:80px'><?= $record['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="row-md-12">
                            <div class="col-md-2">
                                <p><strong>Logo Sekolah</strong></p>
                            </div>
                            <div class="col-md-10">
                                <input type='file' class='form-control' name='logo' value='<?= $record['favicon'] ?>'>
                            </div>
                        </div>
                        <div class="row-md-12">
                            <div class="col-md-2">
                                <p><strong>Favicon</strong></p>
                            </div>
                            <div class="col-md-10">
                                <input type='file' class='form-control' name='favicon' value='<?= $record['favicon'] ?>'>
                                <hr style='margin:5px'>Favicon Aktif Saat ini : <img style='width:32px; height:32px' src="<?= base_url('assets/images/'.$record["favicon"]) ?>">
                            </div>
                        </div>

                    </div>
                      
                      <div class='box-footer'>
                            <button type='submit' name='submit' class='btn btn-info'>Update</button>
                            <a href='".base_url().$this->uri->segment(1)."/identitaswebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                            
                          </div>
                    <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>