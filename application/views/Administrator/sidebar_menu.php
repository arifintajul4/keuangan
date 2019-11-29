<!-- User Info -->
<div class="user-info">
    <div class='image'>
        <?php $usr = $this->Model_app->view_where('users', array('username'=> $this->session->username))->row_array();
            if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } ?>
        <img src='<?php echo base_url(); ?>/assets/foto_user/<?php echo $foto; ?>' width='48' height='48' alt='User' >
    </div>
    <div class='info-container'>
        <div class='name' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><?php echo $usr['nama_lengkap'] ?></div>
        <div class='email'><?php echo $usr['email'] ?></div>
    </div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu" style="overflow: auto;">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class=<?php echo ($title === "Dasboard Administrator") ? 'active':''; ?> >
            <a href="<?php echo base_url() ?>administrator/home">
                <i class="material-icons">home</i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class=<?php echo ($title == "Identitas Sekolah") ? 'active':''; ?>>
            <a href="<?= base_url('administrator')?>/identitaswebsite">
                <i class='material-icons'>memory</i>
                    <span>Identitas Sekolah</span>
            </a>
        </li>

        <li class=<?php echo ($title === "Kegiatan" or $title === "SPP" or $title === "PSB") ? 'active':''; ?> >
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">attach_money</i>
                <span>Tagihan</span>
            </a>
            <ul class="ml-menu">
                 <li><a href="<?= base_url().$this->uri->segment(1)?>/spp"><i class='material-icons'>chevron_right</i> SPP</a></li>
                 <li><a href="#"><i class='material-icons'>chevron_right</i> Kegiatan Tahunan</a></li>
                 <li><a href="#"><i class='material-icons'>chevron_right</i> PSB</a></li>
            </ul>
        </li>

        <li class=<?php echo ($title === "Data Siswa" or $title === "Data Tabungan") ? 'active':''; ?> >
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">person</i>
                <span>Modul Siswa</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?= base_url('administrator')?>/manajemensiswa"><i class='material-icons'>chevron_right</i> Data Siswa</a>
                </li>
                <li>
                    <a href="<?= base_url('administrator')?>/tabungan"><i class='material-icons'>chevron_right</i> Tabungan</a>
                </li>
            </ul>
        </li>
        
        <li class=<?php echo ($title == "Kelola Pembayaran") ? 'active':''; ?> >
            <a href="<?= base_url('administrator')?>/manajemenkeuangan">
                <i class="material-icons">attach_money</i>
                <span>Pembayaran</span>
            </a>
        </li>

        <li class=<?php echo ($title == "Laporan Keuangan") ? 'active':''; ?> >
            <a href="<?= base_url('laporan')?>">
                <i class="material-icons">assignment</i>
                <span>Laporan</span>
            </a>
        </li>


        <li style="margin-bottom: 25px;">
            <a href="#">
                <i class="material-icons">info</i>
                <span>Tentang Aplikasi</span>
            </a>
        </li>
       
    </ul>
</div>
<!-- #Menu -->

<!-- Footer -->
<div class="legal">
    <div class="copyright">
        <strong>&copy; <?php echo date('Y'); ?> All rights reserved.</strong> 
    </div>
</div><
<!-- #Footer -->