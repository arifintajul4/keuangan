<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>
          <div class="header">
              <h2>
                  DATA SISWA
              </h2>
          </div>
          <div class="body">
              <?= $siswa->nama; ?>
          </div>
      </div>
  </div>
</div>