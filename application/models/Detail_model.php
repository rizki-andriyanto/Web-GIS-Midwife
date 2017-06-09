<?php
class Detail_model extends ci_model{
    
    function get_one_midwife($id)
    {
        $param  =   array('id_midwife'=>$id);


        return $this->db->get_where('midwife',$param);
    }

     function get_one_hospital($id)
    {
        $param  =   array('id_hospital'=>$id);
        

        return $this->db->get_where('hospital',$param);
        
    }
    function get_one_subdistrict($id)
    {
        $param  =   array('id_subdistrict'=>$id);
        

        return $this->db->get_where('subdistrict',$param);
        
    }
    
}

