<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <?= $this->session->flashdata('message'); ?>
          <div class="header">
              <h2>
                  KELOLA SPP
              </h2>
              <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                      <a class='pull-right btn btn-primary btn-sm' id='tambah_spp' href='#' data-toggle="modal" data-target="#myModal">Tambah Data</a>
                  </li>
              </ul>
          </div>
          <div class="body">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tahun Ajaran</th>
                          <th>Nominal</th>
                          <th><center>Action</center></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach ($pembayaran as $bayar): ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $bayar['tahun_ajaran'] ?></td>
                          <td>Rp.<?= number_format($bayar['nominal']) ?></td>
                          <td>
                            <center>
                              <a class='btn btn-success btn-sm' id='edit_spp' title='Edit Data' href="#" data-toggle="modal" data-target="#myModal" data-id="<?= $bayar['id'] ?>"><span class='glyphicon glyphicon-edit'></span></a>
                              <a class='btn btn-danger btn-sm' id='hapus_spp' title='Delete Data' href="<?=base_url().$this->uri->segment(1)?>/hapusspp/<?= $bayar['id']?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class='glyphicon glyphicon-remove'></span></a>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah SPP</h4>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('/tambahspp'); ?>" method="post">
        <p>Tahun Ajaran</p>
        <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="form-control" required>
        <br>
        <p>Nominal</p>
        <input type="number" id="nominal" name="nominal" class="form-control" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" name="submit" class="btn btnsubmit btn-primary">Tambah</button>
      </form>
      </div>
    </div>
  </div>
</div>