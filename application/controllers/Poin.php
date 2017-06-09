<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Poin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Poin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'poin/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'poin/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'poin/index.html';
            $config['first_url'] = base_url() . 'poin/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Poin_model->total_rows($q);
        $poin = $this->Poin_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'poin_data' => $poin,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('poin/poin_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Poin_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'jenis' => $row->jenis,
		'foto' => $row->foto,
	    );
            $this->load->view('poin/poin_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poin'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('poin/create_action'),
	    'no' => set_value('no'),
	    'jenis' => set_value('jenis'),
	    'foto' => set_value('foto'),
	);
        $this->load->view('poin/poin_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jenis' => $this->input->post('jenis',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Poin_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('poin'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Poin_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('poin/update_action'),
		'no' => set_value('no', $row->no),
		'jenis' => set_value('jenis', $row->jenis),
		'foto' => set_value('foto', $row->foto),
	    );
            $this->load->view('poin/poin_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poin'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'jenis' => $this->input->post('jenis',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Poin_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('poin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Poin_model->get_by_id($id);

        if ($row) {
            $this->Poin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('poin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poin'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "poin.xls";
        $judul = "poin";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");

	foreach ($this->Poin_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Poin.php */
/* Location: ./application/controllers/Poin.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-09 17:47:54 */
/* http://harviacode.com */