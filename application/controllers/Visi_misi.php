<?php
class Visi_misi  extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$this->load->view('depan/v_visi_misi');
	}
}
