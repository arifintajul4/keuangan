<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{

    function index(){
        $data['title'] = 'Laporan';
        $this->template->load('administrator/template', 'administrator/mod_laporan/view_laporan', $data);
    }

	function harian(){
		$data['title'] = 'Laporan Harian';
		$tanggal = date("Y-m-d");
		$data['transaksi'] = $this->Model_app->view_where('transaksi_tabungan', ['tanggal' => $tanggal ])->result_array();
		$this->template->load('administrator/template', 'administrator/mod_laporan/harian', $data);
	}

    function rekap(){
        $this->cek_admin();
        $data['title'] = 'Laporan Keuangan';
        $this->template->load('administrator/template', 'administrator/mod_laporan/view_laporan', $data);
    }



    function tampil_data(){
        $vtanggal=$this->input->post('vtanggal');
        $data['tampil_data']=$this->Model_app->tampil_data($vtanggal);
        $data['tampil_data1']=$this->Model_app->tampil_data1($vtanggal);
        $this->load->view('administrator/mod_laporan/tampil_data',$data);
    }

    function cetak_laporan(){
        $data['title'] = 'Cetak Laporan Keuangan';
        $vtanggal=$this->input->post('vtanggal');
        $data['tampil_data']=$this->Model_app->tampil_data($vtanggal);
        $data['tampil_data1']=$this->Model_app->tampil_data1($vtanggal);
        $this->load->view('administrator/mod_laporan/cetak_laporan',$data);
    }

}