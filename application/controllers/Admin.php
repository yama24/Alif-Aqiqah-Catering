<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('url', 'html'));
		$this->load->model('m_data');
		$this->load->database();
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		if (!$this->session->userdata('admin')) {
			$cookie = get_cookie('djehbicd');
			if ($cookie == NULL) {
				redirect(base_url('home/login?alert=login'));
			} else {
				$getCookie = $this->db->get_where('admin', ['cookie' => $cookie])->row_array();
				if ($getCookie) {
					$this->session->set_userdata('admin', true);
				} else {
					redirect(base_url('home/login?alert=login'));
				}
			}
		}
	}
	public function index()
	{
		$data['paket'] = $this->m_data->get_data('paket')->result();
		$data['lokasi'] = $this->m_data->get_data('lokasi')->result();
		$data['unggul'] = $this->m_data->get_data('unggul')->result();
		$data['dokumentasi'] = $this->m_data->get_data('dokumentasi')->result();
		$data['admin'] = $this->m_data->get_data('admin')->result();
		$id_user = $this->session->userdata('id');
		$data['admin'] = $this->db->get_where('admin', 'id' == $id_user)->result();
		$this->load->view('backend/admin', $data);
	}
	public function logout()
	{
		$sess = ['admin'];
		$this->session->unset_userdata($sess);
		delete_cookie('djehbicd');
		redirect(base_url() . 'home/login?alert=logout');
	}
}
