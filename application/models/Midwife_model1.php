<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Midwife_model1 extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    // get all
     function getAllGroups()
    {
        $query = $this->db->query('SELECT * FROM midwife');

        return $query->result();
    }
    

}

