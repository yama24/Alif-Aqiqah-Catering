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
}
