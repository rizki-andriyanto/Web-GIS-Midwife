<?php
class Detail extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Detail_model');
        $this->load->model('Subdistrict_model1');
        $this->load->model('Hospital_model1');
        $this->load->model('Midwife_model1');
        $this->load->model('Poin_model1');
        $this->load->model('M_cari');//coba

       
    }
 
    function show_detail_midwife()
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
       
            $id=  $this->uri->segment(3);
            
            $data['record']     =  $this->Detail_model->get_one_midwife($id)->row_array();
            $this->load->view('template/header2');
            $this->load->view('content/detail_midwife',$data);
            $this->load->view('template/section',$data);
			$this->load->view('template/sidebar');
			$this->load->view('template/footer');

    }
    function show_detail_hospital()
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
       
            $id=  $this->uri->segment(3);
            
            $data['record']     =  $this->Detail_model->get_one_hospital($id)->row_array();
            $this->load->view('template/header2');
            $this->load->view('content/detail_hospital',$data);
            $this->load->view('template/section');
			$this->load->view('template/sidebar',$data);
			$this->load->view('template/footer');
    }
    function show_detail_subdistrict()
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
       
            $id=  $this->uri->segment(3);
            
            $data['record']     =  $this->Detail_model->get_one_subdistrict($id)->row_array();
            $this->load->view('template/header2');
            $this->load->view('content/detail_subdistrict',$data);
            $this->load->view('template/section');
            $this->load->view('template/sidebar');
            $this->load->view('template/footer');
    }
    
}