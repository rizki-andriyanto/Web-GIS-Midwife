<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Midwife extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Midwife_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'midwife/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'midwife/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'midwife/index.html';
            $config['first_url'] = base_url() . 'midwife/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Midwife_model->total_rows($q);
        $midwife = $this->Midwife_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'midwife_data' => $midwife,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('midwife/midwife_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Midwife_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_midwife' => $row->id_midwife,
		'nama_midwife' => $row->nama_midwife,
		'x' => $row->x,
		'y' => $row->y,
		'alamat' => $row->alamat,
		'no_telpon' => $row->no_telpon,
		'foto' => $row->foto,
		'kecamatan' => $row->kecamatan,
		'id_post' => $row->id_post,
		'fg1' => $row->fg1,
		'fg2' => $row->fg2,
		'fg3' => $row->fg3,
		'layer' => $row->layer,
	    );
            $this->load->view('midwife/midwife_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('midwife'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('midwife/create_action'),
	    'id_midwife' => set_value('id_midwife'),
	    'nama_midwife' => set_value('nama_midwife'),
	    'x' => set_value('x'),
	    'y' => set_value('y'),
	    'alamat' => set_value('alamat'),
	    'no_telpon' => set_value('no_telpon'),
	    'foto' => set_value('foto'),
	    'kecamatan' => set_value('kecamatan'),
	    'id_post' => set_value('id_post'),
	    'fg1' => set_value('fg1'),
	    'fg2' => set_value('fg2'),
	    'fg3' => set_value('fg3'),
	    'layer' => set_value('layer'),
	);
        $this->load->view('midwife/midwife_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_midwife' => $this->input->post('nama_midwife',TRUE),
		'x' => $this->input->post('x',TRUE),
		'y' => $this->input->post('y',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_telpon' => $this->input->post('no_telpon',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'id_post' => $this->input->post('id_post',TRUE),
		'fg1' => $this->input->post('fg1',TRUE),
		'fg2' => $this->input->post('fg2',TRUE),
		'fg3' => $this->input->post('fg3',TRUE),
		'layer' => $this->input->post('layer',TRUE),
	    );

            $this->Midwife_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('midwife'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Midwife_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('midwife/update_action'),
		'id_midwife' => set_value('id_midwife', $row->id_midwife),
		'nama_midwife' => set_value('nama_midwife', $row->nama_midwife),
		'x' => set_value('x', $row->x),
		'y' => set_value('y', $row->y),
		'alamat' => set_value('alamat', $row->alamat),
		'no_telpon' => set_value('no_telpon', $row->no_telpon),
		'foto' => set_value('foto', $row->foto),
		'kecamatan' => set_value('kecamatan', $row->kecamatan),
		'id_post' => set_value('id_post', $row->id_post),
		'fg1' => set_value('fg1', $row->fg1),
		'fg2' => set_value('fg2', $row->fg2),
		'fg3' => set_value('fg3', $row->fg3),
		'layer' => set_value('layer', $row->layer),
	    );
            $this->load->view('midwife/midwife_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('midwife'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_midwife', TRUE));
        } else {
            $data = array(
		'nama_midwife' => $this->input->post('nama_midwife',TRUE),
		'x' => $this->input->post('x',TRUE),
		'y' => $this->input->post('y',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_telpon' => $this->input->post('no_telpon',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'id_post' => $this->input->post('id_post',TRUE),
		'fg1' => $this->input->post('fg1',TRUE),
		'fg2' => $this->input->post('fg2',TRUE),
		'fg3' => $this->input->post('fg3',TRUE),
		'layer' => $this->input->post('layer',TRUE),
	    );

            $this->Midwife_model->update($this->input->post('id_midwife', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('midwife'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Midwife_model->get_by_id($id);

        if ($row) {
            $this->Midwife_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('midwife'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('midwife'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_midwife', 'nama midwife', 'trim|required');
	$this->form_validation->set_rules('x', 'x', 'trim|required|numeric');
	$this->form_validation->set_rules('y', 'y', 'trim|required|numeric');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_telpon', 'no telpon', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
	$this->form_validation->set_rules('id_post', 'id post', 'trim|required');
	$this->form_validation->set_rules('fg1', 'fg1', 'trim|required');
	$this->form_validation->set_rules('fg2', 'fg2', 'trim|required');
	$this->form_validation->set_rules('fg3', 'fg3', 'trim|required');
	$this->form_validation->set_rules('layer', 'layer', 'trim|required');

	$this->form_validation->set_rules('id_midwife', 'id_midwife', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "midwife.xls";
        $judul = "midwife";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Midwife");
	xlsWriteLabel($tablehead, $kolomhead++, "X");
	xlsWriteLabel($tablehead, $kolomhead++, "Y");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telpon");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Kecamatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Post");
	xlsWriteLabel($tablehead, $kolomhead++, "Fg1");
	xlsWriteLabel($tablehead, $kolomhead++, "Fg2");
	xlsWriteLabel($tablehead, $kolomhead++, "Fg3");
	xlsWriteLabel($tablehead, $kolomhead++, "Layer");

	foreach ($this->Midwife_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_midwife);
	    xlsWriteNumber($tablebody, $kolombody++, $data->x);
	    xlsWriteNumber($tablebody, $kolombody++, $data->y);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telpon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kecamatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_post);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fg1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fg2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fg3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->layer);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Midwife.php */
/* Location: ./application/controllers/Midwife.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-09 17:47:54 */
/* http://harviacode.com */