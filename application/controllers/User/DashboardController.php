<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
	}

	// List all your items
	public function index()
	{
        $data['title'] = 'Dashboard';

        $masyarakat = $this->db->get_where('masyarakat',['username' => $this->session->userdata('username')])->row_array();
		$petugas = $this->db->get_where('petugas',['username' => $this->session->userdata('username')])->row_array();
		$data['pengaduan'] = $this->db->get('pengaduan')->num_rows();
		$data['pengaduan_proses'] = $this->db->get_where('pengaduan',['status' => 'proses'])->num_rows();
	    $data['pengaduan_selesai'] = $this->db->get_where('pengaduan',['status' => 'selesai'])->num_rows();
		$data['pengaduan_ditolak'] = $this->db->get_where('pengaduan', ['status' => 'tolak'])->num_rows();


		if ($masyarakat == TRUE) :
			$data['user'] = $masyarakat;
		elseif ($petugas == TRUE) :
			$data['user'] = $petugas;
		endif;

        $this->load->view('_part/backend_head', $data);
        $this->load->view('_part/backend_sidebar_v');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('masyarakat/dashboard');
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
	}
}

/* End of file ProfileController.php */
/* Location: ./application/controllers/User/ProfileController.php */
