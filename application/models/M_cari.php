
<?php
class M_cari extends ci_model{
    
  function __construct()
    {
        parent::__construct();
    }

    function search1($keyword)
    {
        // $this->db->like('kecamatan',$keyword);
        // $query  =   $this->db->get('midwife');
        // return $query->result();
        $query = $this->db->query("SELECT
    *
FROM
    midwife

WHERE
    (
        (kecamatan LIKE '%".$keyword."%')
        OR (nama_midwife LIKE '%".$keyword."%') OR (layer LIKE '%".$keyword."%')
    )");
        return $query->result();
    }
    function search2($keyword)
    {
        // $this->db->like('kecamatan',$keyword);
        // $query  =   $this->db->get('midwife');
        // return $query->result();
        $query = $this->db->query("SELECT
    *
FROM
    hospital

WHERE
    (
        (kecamatan LIKE '%".$keyword."%')
        OR (nama_hospital LIKE '%".$keyword."%') OR (layer LIKE '%".$keyword."%')
    )");
        return $query->result();
    }
}   



     