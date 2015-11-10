<?php
/********************************************************************************
 * Written By       : Hasinur Rahman                                            *
 * Date & Time      : 11/8/2015 12:17 PM                                        *
 ********************************************************************************/
class Post extends CI_Model {


    function get_posts($num=20, $start=0){
        $this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($start,$num);
        $query = $this->db->get();
        return $query->result_array();
    }

}