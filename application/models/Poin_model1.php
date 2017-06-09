<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Poin_model1 extends CI_Model
{

   

    function __construct()
    {
        parent::__construct();
    }
    // get all
     function getAllGroups()
    {
        $query = $this->db->query('SELECT
    *
FROM
    poin
WHERE
    jenis = "hospital"');

        return $query->result();
    }
     // get all
     function getAllGroups2()
    {
        $query = $this->db->query('SELECT
    *
FROM
    poin
WHERE
    jenis = "midwife"');

        return $query->result();
    }

   

}

