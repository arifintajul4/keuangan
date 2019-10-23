<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
  <!-- Bootstrap Core Css -->
  <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom Css -->
  <!-- <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet"> -->
</head>
<body>
<div class="col-xs-12 container">
  <div style="text-align:justify; margin-top: 20px">
    <img src="<?php echo base_url(); ?>assets/images/logo_sragen.png" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;"/>
    <p style="text-align: center; line-height: 20px">
      <span style="font-size: 15px">PEMERINTAH KABUPATEN SRAGEN</span><br/>
      <span style="font-size: 20px;"><strong>RSUD dr. SOEHADI PRIJONEGORO</strong></span><br/>
      <span style="font-size: 12px">Jln. Raya Sukowati No. 534 Telp. (271) 891068 Sragen 57272</span><br/>
      <span style="font-size: 12px">Website : www.rssp.sragenkab.go.id dan Email : rsudsragen1958@gmail.com</span>
    </p>
  </div>
  <div style="clear:both; margin:0;"></div>
  <hr style="border: 1px groove #000000;margin-top: -2px; width:100%"/>
  <hr style="border: 1px groove #000000; margin-top: -19px; width:100%"/>
</div>
<div class="col-xs-12">
  <h3>PEMASUKAN KEUANGAN</h3>
  <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th style="width: 20%;">Tanggal</th>
            <th style="width: 30%">Dari</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php
          $no = 1; $tmp1 = 0;
          foreach ($tampil_data->result_array() as $rows) {
            $tanggal1 = tgl_indo($rows['tgl']);
            $tmp1 = $tmp1 + $rows['jumlah'];
        ?>
        <tr>
            <th scope="row"><?php echo $no ?></th>
            <td><?php echo $tanggal1 ?></td>
            <td><?php echo $rows['tujuan'] ?></td>
            <td>Rp. <?php echo number_format($rows['jumlah'],0,",",".") ?></td>
        </tr>
        <?php $no++; } ?>
        <tr>
          <th scope="row" colspan="3">Total</th>
          <td><strong>Rp. <?= number_format($tmp1); ?></strong></td>
        </tr>
    </tbody>
  </table>

  <h3>PEMASUKAN KEUANGAN</h3>
  <table class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>No</th>
              <th style="width: 20%;">Tanggal</th>
              <th style="width: 30%;">Keperluan</th>
              <th>Jumlah</th>
          </tr>
      </thead>
      <tbody>
         <?php
            $no = 1; $tmp = 0;
            foreach ($tampil_data1->result_array() as $rows1) {
              $tanggal = tgl_indo($rows1['tgl']);
              $tmp = $tmp + $rows1['jumlah'];
          ?>
          <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $tanggal ?></td>
              <td><?php echo $rows1['tujuan'] ?></td>
              <td>Rp. <?php echo number_format($rows1['jumlah'],0,",",".") ?></td>
          </tr>
          <?php $no++; } ?>
          <tr>
            <th scope="row" colspan="3">Total</th>
            <td><strong>Rp. <?= number_format($tmp); ?></strong></td>
          </tr>
      </tbody>
  </table>
</div>

  <!-- Jquery Core Js -->
  <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>