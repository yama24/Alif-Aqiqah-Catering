<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	}
	public function index()
	{
		$data['paket'] = $this->m_data->get_data('paket')->result();
		$data['lokasi'] = $this->m_data->get_data('lokasi')->result();
		$data['unggul'] = $this->m_data->get_data('unggul')->result();
		$data['dokumentasi'] = $this->m_data->get_data('dokumentasi')->result();
		$this->load->view('frontend/home', $data);
	}
	public function login()
	{
		$this->load->helper('cookie');
		if ($this->session->userdata('admin')) {
			redirect(base_url() . 'admin');
		} else {
			$cookie = get_cookie('djehbicd');
			if ($cookie != NULL) {
				$getCookie = $this->db->get_where('admin', ['cookie' => $cookie])->row_array();
				if ($getCookie) {
					$dataCookie = $getCookie;
					$this->session->set_userdata('admin', true);
					redirect(base_url() . 'admin');
				}
			}
		}
		$this->form_validation->set_rules('username', 'username', 'required', ['required' => 'username wajib diisi']);
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/admin_login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cookie = $this->input->post('cookie');
			$admin = $this->db->get_where('admin', ['username' => $username])->row_array();

			if ($admin) {
				if (password_verify($password, $admin['password'])) {

					if ($cookie != NULL) {
						$key = random_string('alnum', 64);
						set_cookie('djehbicd', $key, 3600 * 24 * 30 * 12);
						$this->db->set('cookie', $key);
						$this->db->update('admin');
					}

					$this->session->set_userdata('admin', true);
					$this->session->set_userdata($data);

					redirect(base_url() . 'admin');
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
                              Password salah!
                            </div>');
					redirect(base_url() . 'home/login');
				}
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
                Username salah!
              </div>');
				redirect(base_url() . 'home/login');
			}
		}
	}

}
