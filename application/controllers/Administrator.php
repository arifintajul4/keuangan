<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function index(){
       if(null !== ($this->session->userdata('id_session'))) redirect('administrator/home');
       $data['identitas'] = $this->Model_app->view('identitas')->row();
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
			$cek = $this->Model_app->cek_login($username,$password,'users');
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
								   'level'=>$row['level'],
                                   'id_session'=>$row['id_session']));
				redirect($this->uri->segment(1).'/home');
			}else{
				$data['error'] = 'Username atau Password salah!';
				$this->load->view('administrator/view_login', $data);
			}
		}else{
			$this->load->view('administrator/view_login', $data);
		}
	}

    function home(){
        $this->cek_admin();
    	$data['title'] = 'Dasboard Administrator';
        if ($this->session->level=='admin'){
            $this->template->load('administrator/template','administrator/view_home',$data);
        }else{
            $data['users'] = $this->Model_app->view_where('users',array('username'=>$this->session->username))->row_array();
            $data['modul'] = $this->Model_app->view_join_one('users','users_modul','id_session','id_umod','DESC');
            $this->template->load('administrator/template','administrator/view_home',$data);
        }
    }

    function identitaswebsite(){
        $this->cek_admin();
		if (isset($_POST['submit'])){
			$config['upload_path'] = 'assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '1024'; // kb
            $config['overwrite'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('favicon');
            $file1 = $this->upload->data();
             echo "<pre>";
             print_r($file1);
             echo "</pre>";
            $this->upload->do_upload('logo');
             $file2 = $this->upload->data();
             echo "<pre>";
             print_r($file2);
             echo "</pre>";
            //var_dump($hasil2);
            die;
            if ($hasil['file_name']==''){
            	$data = array('nama_sekolah'=>$this->db->escape_str($this->input->post('nama_sekolah')),
                                'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                'no_telp'=>$this->db->escape_str($this->input->post('no_telp')),
                            );
            }else{
            	$data = array('nama_sekolah'=>$this->db->escape_str($this->input->post('nama_sekolah')),
                                'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                'no_telp'=>$this->db->escape_str($this->input->post('favicon')),
                                'favicon'=>$hasil['file_name']
                            );
            }
	    	$where = array('id_identitas' => $this->input->post('id'));
			$this->Model_app->update('identitas', $data, $where);
			redirect($this->uri->segment(1).'/identitaswebsite');
		}else{
			$proses = $this->Model_app->edit('identitas', array('id_identitas' => 1))->row_array();
			$data = array('record' => $proses);
			$data['title'] = 'Identitas Sekolah';
			$this->template->load('administrator/template','administrator/mod_identitas/view_identitas',$data);
		}
	}

    // Controller Modul Siswa
    function manajemensiswa(){
        $data['title'] = 'Data Siswa';
        $data['record'] = $this->Model_app->view_ordering('siswa','nis','DESC');
        $this->template->load('administrator/template','administrator/mod_users/view_users',$data);
    }

    function detailsiswa($nis){
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->Model_app->view_where('siswa', ['nis' => $nis])->row();
        $data['record'] = $this->Model_app->view_where('transaksi_tabungan', ['nis' => $nis])->result_array();
        $this->template->load('administrator/template','administrator/mod_users/view_profil',$data);
    }

    function tambah_manajemenuser(){
        $this->cek_admin();
        $data['title'] = 'Tambah Data Siswa';
        $id = $this->session->username;
        if (isset($_POST['submit'])){
            $data = array('nis'=>$this->db->escape_str($this->input->post('nis')),
                            'nama'=>$this->db->escape_str($this->input->post('nama_siswa')),
                            'no_tlp'=>$this->db->escape_str($this->input->post('no_tlp_siswa')),
                            'tgl_lahir'=>$this->db->escape_str($this->input->post('tgl_lahir_siswa')),
                            'agama'=>$this->db->escape_str($this->input->post('agama')),
                            'jk'=>$this->db->escape_str($this->input->post('jk')),
                            'kewarganegaraan'=>$this->db->escape_str($this->input->post('kewarganegaraan')),
                            'alamat'=>$this->db->escape_str($this->input->post('alamat_siswa'))
                        );
        
            $this->Model_app->insert('siswa',$data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');

            redirect($this->uri->segment(1).'/manajemenuser/');
        }else{
            $proses = $this->Model_app->view_where_ordering('modul', array('publish' => 'Y','status' => 'user'), 'id_modul','DESC');
            $data = array('record' => $proses);
            $this->template->load('administrator/template','administrator/mod_users/view_users_tambah',$data);
        }
    }

    function edit_manajemenuser($nis){
        $this->cek_admin();
        $data['title'] = 'Edit Data Siswa';
        $id = $this->session->username;
        if (isset($_POST['submit'])){
            $data = array(
                            'nama'=>$this->db->escape_str($this->input->post('nama_siswa')),
                            'no_tlp'=>$this->db->escape_str($this->input->post('no_tlp_siswa')),
                            'tgl_lahir'=>$this->db->escape_str($this->input->post('tgl_lahir_siswa')),
                            'agama'=>$this->db->escape_str($this->input->post('agama')),
                            'jk'=>$this->db->escape_str($this->input->post('jk')),
                            'kewarganegaraan'=>$this->db->escape_str($this->input->post('kewarganegaraan')),
                            'alamat'=>$this->db->escape_str($this->input->post('alamat_siswa'))
                        );
        
            $this->Model_app->update('siswa',$data, ['nis' => $nis]);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');

            redirect($this->uri->segment(1).'/manajemensiswa/');
        }else{
            $data['siswa'] = $this->Model_app->view_where('siswa', ['nis' => $nis])->row();
            $this->template->load('administrator/template','administrator/mod_users/view_users_edit',$data);
        }
    }

    function delete_manajemenuser($nis){
        $this->cek_admin();
        $this->Model_app->delete('siswa',['nis' => $nis]);
        $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menghapus Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect($this->uri->segment(1).'/manajemensiswa');
    }

    // Controller Modul Tabungan
    function tabungan(){
        $this->cek_admin();
        $data['title'] = 'Data Tabungan';
        $data['record'] = $this->Model_app->view_join_one('siswa','tabungan','nis','siswa.nis','desc');
        $this->template->load('administrator/template','administrator/mod_tabungan/view_tabungan',$data);
    }

    function tambah_tabungan(){
        $data['title'] = 'Tambah Tabungan';
        if (isset($_POST['submit'])){
            $data = [
                'nis'=>$this->db->escape_str($this->input->post('nis')),
                'jenis'=>$this->db->escape_str($this->input->post('jenis')),
                'nominal'=>$this->db->escape_str($this->input->post('nominal')),
                'ket'=>$this->db->escape_str($this->input->post('keterangan')),
                'tanggal' =>$this->db->escape_str($this->input->post('tanggal'))
            ];
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            $this->Model_app->insert('transaksi_tabungan',$data);
            $tabungan1['siswa'] = $this->Model_app->view_where('tabungan', ['nis' => $this->input->post('nis')])->row();
            $tabungan['nis'] = $this->input->post('nis');
            if(isset($tabungan1['siswa'])){
                if($this->input->post('jenis') == 'masuk'){
                    $nominal = $this->input->post('nominal');
                    $saldo = $tabungan1['siswa']->saldo;
                    $tabungan['saldo'] = (int)$nominal + (int)$saldo;
                }else if($this->input->post('jenis') == 'keluar'){
                    $nominal = $this->input->post('nominal');
                    $saldo = $tabungan1['siswa']->saldo;
                    $tabungan['saldo'] = (int)$saldo - (int)$nominal;
                }else{
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }
                $this->Model_app->update('tabungan', $tabungan, ['nis' => $this->input->post('nis')]);
            }else{
                if($this->input->post('jenis') == 'masuk'){
                    $tabungan['saldo'] = $this->input->post('nominal');
                    $this->Model_app->insert('tabungan', $tabungan);
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }else{
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }
            }
            redirect($this->uri->segment(1).'/tabungan');
        }else{
            $this->template->load('administrator/template','administrator/mod_tabungan/view_tabungan_tambah', $data);
        }
    }

    function delete_tabungan(){
        $this->cek_admin();
        $this->Model_app->delete('tabungan',$id);
        redirect($this->uri->segment(1).'/tabungan');
    }

    // Transaksi Tabungan
    function delete_trxtabungan($id, $nis)
    {
        $this->cek_admin();
        $this->Model_app->delete('transaksi_tabungan', ['no_transaksi' => $id]);
        redirect($this->uri->segment(1).'/detailsiswa/'.$nis);   
    }

    function edit_trxtabungan($id){
        $this->cek_admin();
        $data['title'] = 'Edit Tabungan';
        $data['transaksi'] = $this->Model_app->view_where('transaksi_tabungan', ['no_transaksi' => $id])->row();
        $this->template->load('administrator/template','administrator/mod_tabungan/view_tabungan_edit',$data);
    }

    function get_datasiswa(){
        echo json_encode($this->Model_app->view_where('tabungan', ['nis' => $_POST['id']])->row());
    }

    function get_namasiswa(){
        if(isset($_GET['term'])) {
            $result = $this->Model_app->search_nama($_GET['term']);
            if(count($result) > 0){
                foreach ($result as $siswa) {
                    $arr_result[] = [
                        label => $siswa->nama,
                        value => $siswa->nis
                    ];
                }
                echo json_encode($arr_result); 
            }
        }
    }

     // Controller Modul Keuangan

    function manajemenkeuangan(){
        $this->cek_admin();
        $data['title'] = 'Kelola Pembayaran';
        $data['pembayaran'] = $this->Model_app->view_join_one('siswa', 'pembayaran', 'nis', 'tgl_bayar', 'DESC');
        $this->template->load('administrator/template','administrator/mod_keuangan/view_keuangan',$data);
    }

    function tambah_keuangan(){
        $this->cek_admin();
        $data['title'] = 'Tambah Manajemen Keuangan';
        if (isset($_POST['submit'])){

            $data = array('username'=>$this->session->username,
                        'status'=>$this->db->escape_str($this->input->post('status')),
                        'tgl'=>$this->db->escape_str($this->input->post('tgl')),
                        'tujuan'=>$this->db->escape_str($this->input->post('tujuan')),
                        'jumlah'=>$this->db->escape_str($this->input->post('jumlah'))
            );
            $this->Model_app->insert('keuangan',$data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            redirect($this->uri->segment(1).'/manajemenkeuangan');
        }else{
            $this->template->load('administrator/template','administrator/mod_keuangan/view_keuangan_tambah', $data);
        }
    }

    function edit_keuangan(){
        $this->cek_admin();
        $data['title'] = 'Edit Manajemen Keuangan';
        if (isset($_POST['submit'])){
            $data = array('username'=>$this->session->username,
                        'status'=>$this->db->escape_str($this->input->post('status')),
                        'tgl'=>$this->db->escape_str($this->input->post('tgl')),
                        'tujuan'=>$this->db->escape_str($this->input->post('tujuan')),
                        'jumlah'=>$this->db->escape_str($this->input->post('jumlah'))
            );
            $where = array('id_keuangan' => $this->input->post('id'));
            $this->Model_app->update('keuangan', $data, $where);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Mengubah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            redirect($this->uri->segment(1).'/manajemenkeuangan');
        }else{
            $id = $this->uri->segment(3);
            if ($this->session->level=='admin'){
                 $proses = $this->Model_app->edit('keuangan', array('id_keuangan' => $id))->row_array();
            }else{
                $proses = $this->Model_app->edit('keuangan', array('id_keuangan' => $id, 'username' => $this->session->username))->row_array();
            }
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_keuangan/view_keuangan_edit',$data);
        }
    }

    function delete_keuangan(){
        $this->cek_admin();
        if ($this->session->level=='admin'){
            $id = array('id_keuangan' => $this->uri->segment(3));
        }else{
            $id = array('id_keuangan' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->Model_app->delete('keuangan',$id);
        $this->session->set_flashdata('message',
            '<div class="alert alert-danger alert-dismissible" role="alert">Berhasil Menghapus Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect($this->uri->segment(1).'/manajemenkeuangan');
    }

    // Controller Modul Tagihan
    function spp(){
        $data['title'] = 'Kelola Tagihan - SPP';
        $data['pembayaran'] = $this->Model_app->view('spp')->result_array();
        $this->template->load('administrator/template', 'administrator/mod_tagihan/view_spp', $data);
    }

    function getsppbyid(){
        echo json_encode($this->Model_app->view_where('spp', ['id' => $_POST['id']])->row());
    }

    function tambahspp(){

        if(isset($_POST['submit'])){
            $data = [
                'tahun_ajaran' => $this->db->escape_str($this->input->post('tahun_ajaran')),
                'nominal'      => $this->db->escape_str($this->input->post('nominal'))
            ];
            $this->Model_app->insert('spp',$data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Tambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            redirect($this->uri->segment(1).'/spp');
        }else{
            $this->session->set_flashdata('message',
            '<div class="alert alert-danger alert-dismissible" role="alert">Isi Data SPP Terlebih Dahulu!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            redirect($this->uri->segment(1).'/spp');
        }
    }

    function editspp($id){
        //var_dump($this->Model_app->delete('spp', ['id' => $id])); die;
        $data = [
            'tahun_ajaran' => $this->db->escape_str($this->input->post('tahun_ajaran')),
            'nominal'      => $this->db->escape_str($this->input->post('nominal'))
        ];
        if($this->Model_app->update('spp', $data, ['id' => $id])){
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Ubah Data Berhasil!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }else{
            $this->session->set_flashdata('message',
            '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Mengubah Data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }
        
        redirect($this->uri->segment(1).'/spp');
    }

    function hapusspp($id){
        //var_dump($this->Model_app->delete('spp', ['id' => $id])); die;
        if($this->Model_app->delete('spp', ['id' => $id])){
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menghapus Data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }else{
            $this->session->set_flashdata('message',
            '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Menghapus Data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }
        
        redirect($this->uri->segment(1).'/spp');
    }

    // Controller Modul Laporan

    function laporan(){
        $this->cek_admin();
        $data['title'] = 'Laporan Keuangan';
        $this->template->load('administrator/template','administrator/mod_laporan/view_laporan', $data);
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

    function cek_admin(){
        if(!$this->session->userdata('level')) {
            redirect ('administrator/index');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('administrator');
    }
}