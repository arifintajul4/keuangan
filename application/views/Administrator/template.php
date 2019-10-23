<style type="text/css">
    .sidebar .menu .list .ml-menu i.material-icons{
        font-size: 14px;
        margin-top: 1px;
        margin-right: 10px;
    }
    .bootstrap-select{
        border: 1px solid #ccc !important;
    }
</style>
<!DOCTYPE html>  
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/<?php echo favicon(); ?>" />

    <!-- Material Icons -->
    <link href="<?php echo base_url(); ?>assets/admin/css/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/jquery-ui.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/ themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar bg-gradien">
        <?php include('top-navbar.php') ?>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <?php include('sidebar_menu.php') ?>
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php echo $contents; ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

     <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/index.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.redirect.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-ui.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        $("#tampil").click(function(){
            var vtanggal = $("#vtanggal").val();
            $.ajax({
              url:"<?php echo site_url('administrator/tampil_data');?>",
              type:"POST",
              data:"vtanggal="+vtanggal,
              cache:false,
              success:function(html){
                $("#tampil_data").html(html);
              }
            })
        });

        $("#bayar").change(function(){
            if($("#bayar").val() == "tabungan"){
                const id = $("#nis").val();
                $("#saldo").show();
                $("#saldo").html('Saldo Siswa: Rp.0');
                $.ajax({
                    url:"<?= base_url('administrator/get_datasiswa');?>",
                    type:"POST",
                    dataType: 'JSON',
                    data:{
                        id: id
                    },
                    success:function(data){
                        $("#saldo").html('Saldo Siswa: Rp.'+data.saldo);
                    }
                });
            }else if($("#bayar").val() == "cicilan"){
                $("#saldo").hide();
            }else{
                $("#saldo").hide();
            }
        });

        $("#cetak").click(function(e){
            e.preventDefault();
            var vtanggal = $("#vtanggal").val();
            $.ajax({
              url:"<?php echo site_url('administrator/cetak_laporan');?>",
              type:"POST",
              data:"vtanggal="+vtanggal,
              cache:false,
              success:function(html){
                     $.redirect('<?php echo site_url('administrator/cetak_laporan');?>', {'vtanggal': vtanggal}, 'POST', '_blank');
              }
            })
        });

        $('#tambah_spp').click(function(){
            $('.modal-body form').attr('action', '<?= base_url('administrator/tambahspp'); ?>');
            $('#myModalLabel').html('Tambah SPP');
            $('.modal-footer .btnsubmit').html('Tambah');
            $('#tahun_ajaran').val('');
            $('#nominal').val('');
        });

        $('.dataTable').on('click', '#edit_spp', function(){
            const id = $(this).data('id');
            console.log(id);
            $('.modal-body form').attr('action', '<?= base_url('administrator/editspp'); ?>');
            $('#myModalLabel').html('Ubah SPP');
            $('.modal-footer .btnsubmit').html('Ubah');

            $.ajax({    
                url: '<?= base_url('administrator/getsppbyid/'); ?>',
                data: {
                    id: id
                },
                dataType: 'json',
                method: 'post',
                success: function(data) {
                    $('#tahun_ajaran').val(data.tahun_ajaran);
                    $('#nominal').val(data.nominal);
                }
            });
        });

        $("#nama_siswa").autocomplete({
            source: "<?= site_url('administrator/get_namasiswa');?>",
            //source: data,
            select: function (event, ui) {
                event.preventDefault();
                $("#nis").val(ui.item.value);
                $("#nama_siswa").val(ui.item.label);
            },
        });

    });
    </script>

</body>

</html>