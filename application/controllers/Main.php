<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_app');
		$this->load->model('model_artikel');
	}

	function index()
	{
		$jumlah = $this->model_app->view('tb_toko_produk')->num_rows();
		$config['base_url'] = base_url() . 'produk/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 20;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['cur_tag_open'] = '<li aria-current="page"> <a class="active">';
		$config['cur_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');

		if ($this->uri->segment('3') == '') {
			$dari = 0;
		} else {
			$dari = $this->uri->segment('3');
		}

		if (is_numeric($dari)) {


			$data['title'] = title();
			$data['record'] = $this->model_app->view_ordering_limit('tb_toko_produk', 'id_produk', 'DESC', $dari, $config['per_page']);
			$data['artikel'] = $this->model_artikel->semua_artikel(0, 15);
			$this->pagination->initialize($config);
			$this->template->load('home/template', 'home/view_home', $data);
		} else {
			redirect('main');
		}
	}
}
