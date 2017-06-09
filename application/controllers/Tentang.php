<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

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

        $this->load->model('Subdistrict_model1');
        $this->load->model('Hospital_model1');
        $this->load->model('Midwife_model1');
        $this->load->model('Poin_model1');
        $this->load->model('M_cari');//coba
       
    }
	public function index()
	{	
		$keyword    =   $this->input->post('keyword');
		$data = array(
        'groups' => $this->Poin_model1->getAllGroups(),
        'groups2' => $this->Poin_model1->getAllGroups2(),
        'groups3' => $this->Hospital_model1->getAllGroups(),
        'groups5' => $this->Midwife_model1->getAllGroups(),
        'results' => $this->M_cari->search1($keyword),
        'results2' => $this->M_cari->search2($keyword),
        'groups6' => $this->Subdistrict_model1->getAllGroups()
        );
		$this->load->view('template/header');
		$this->load->view('template/tentang/content');	
		$this->load->view('template/section');
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/footer');

	}
}



