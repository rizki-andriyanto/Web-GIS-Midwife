<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subdistrict extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Subdistrict_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'subdistrict/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'subdistrict/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'subdistrict/index.html';
            $config['first_url'] = base_url() . 'subdistrict/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Subdistrict_model->total_rows($q);
        $subdistrict = $this->Subdistrict_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'subdistrict_data' => $subdistrict,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('subdistrict/subdistrict_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Subdistrict_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_subdistrict' => $row->id_subdistrict,
		'name_subdistrict' => $row->name_subdistrict,
		'content' => $row->content,
		'amount_village' => $row->amount_village,
		'amount_population' => $row->amount_population,
		'province' => $row->province,
		'area' => $row->area,
		'district' => $row->district,
	    );
            $this->load->view('subdistrict/subdistrict_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subdistrict'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('subdistrict/create_action'),
	    'id_subdistrict' => set_value('id_subdistrict'),
	    'name_subdistrict' => set_value('name_subdistrict'),
	    'content' => set_value('content'),
	    'amount_village' => set_value('amount_village'),
	    'amount_population' => set_value('amount_population'),
	    'province' => set_value('province'),
	    'area' => set_value('area'),
	    'district' => set_value('district'),
	);
        $this->load->view('subdistrict/subdistrict_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name_subdistrict' => $this->input->post('name_subdistrict',TRUE),
		'content' => $this->input->post('content',TRUE),
		'amount_village' => $this->input->post('amount_village',TRUE),
		'amount_population' => $this->input->post('amount_population',TRUE),
		'province' => $this->input->post('province',TRUE),
		'area' => $this->input->post('area',TRUE),
		'district' => $this->input->post('district',TRUE),
	    );

            $this->Subdistrict_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('subdistrict'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Subdistrict_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('subdistrict/update_action'),
		'id_subdistrict' => set_value('id_subdistrict', $row->id_subdistrict),
		'name_subdistrict' => set_value('name_subdistrict', $row->name_subdistrict),
		'content' => set_value('content', $row->content),
		'amount_village' => set_value('amount_village', $row->amount_village),
		'amount_population' => set_value('amount_population', $row->amount_population),
		'province' => set_value('province', $row->province),
		'area' => set_value('area', $row->area),
		'district' => set_value('district', $row->district),
	    );
            $this->load->view('subdistrict/subdistrict_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subdistrict'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_subdistrict', TRUE));
        } else {
            $data = array(
		'name_subdistrict' => $this->input->post('name_subdistrict',TRUE),
		'content' => $this->input->post('content',TRUE),
		'amount_village' => $this->input->post('amount_village',TRUE),
		'amount_population' => $this->input->post('amount_population',TRUE),
		'province' => $this->input->post('province',TRUE),
		'area' => $this->input->post('area',TRUE),
		'district' => $this->input->post('district',TRUE),
	    );

            $this->Subdistrict_model->update($this->input->post('id_subdistrict', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('subdistrict'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Subdistrict_model->get_by_id($id);

        if ($row) {
            $this->Subdistrict_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('subdistrict'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subdistrict'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name_subdistrict', 'name subdistrict', 'trim|required');
	$this->form_validation->set_rules('content', 'content', 'trim|required');
	$this->form_validation->set_rules('amount_village', 'amount village', 'trim|required');
	$this->form_validation->set_rules('amount_population', 'amount population', 'trim|required');
	$this->form_validation->set_rules('province', 'province', 'trim|required');
	$this->form_validation->set_rules('area', 'area', 'trim|required|numeric');
	$this->form_validation->set_rules('district', 'district', 'trim|required');

	$this->form_validation->set_rules('id_subdistrict', 'id_subdistrict', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "subdistrict.xls";
        $judul = "subdistrict";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Name Subdistrict");
	xlsWriteLabel($tablehead, $kolomhead++, "Content");
	xlsWriteLabel($tablehead, $kolomhead++, "Amount Village");
	xlsWriteLabel($tablehead, $kolomhead++, "Amount Population");
	xlsWriteLabel($tablehead, $kolomhead++, "Province");
	xlsWriteLabel($tablehead, $kolomhead++, "Area");
	xlsWriteLabel($tablehead, $kolomhead++, "District");

	foreach ($this->Subdistrict_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name_subdistrict);
	    xlsWriteLabel($tablebody, $kolombody++, $data->content);
	    xlsWriteLabel($tablebody, $kolombody++, $data->amount_village);
	    xlsWriteLabel($tablebody, $kolombody++, $data->amount_population);
	    xlsWriteLabel($tablebody, $kolombody++, $data->province);
	    xlsWriteNumber($tablebody, $kolombody++, $data->area);
	    xlsWriteLabel($tablebody, $kolombody++, $data->district);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Subdistrict.php */
/* Location: ./application/controllers/Subdistrict.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-09 17:47:54 */
/* http://harviacode.com */