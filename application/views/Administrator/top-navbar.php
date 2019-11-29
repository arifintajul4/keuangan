<?php $data = $this->Model_app->view('identitas')->result_array();?>
<div class="container-fluid">
    <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="<?= base_url() ?>"><strong>SISTEM INFORMASI KEUANGAN</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
           <li>
                <a><strong><?php echo "<span>".hari_ini(date('w')).", ".tgl_indo(date('Y-m-d')).", <span id='jam'></span>"; ?></strong></a>
            </li>
            <li class="pull-right">
                <a href="<?php echo base_url().$this->uri->segment(1); ?>/logout" onclick="return confirm('Apa anda yakin ingin Keluar?')">
                    <div>
                        <i class="material-icons">exit_to_app</i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>