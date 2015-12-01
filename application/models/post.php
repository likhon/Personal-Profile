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
    public function create_post(){
        $this->load->helper('url');
        $data = array(
            'title'         => $this->input->post('title'),
            'summary'       => $this->input->post('summary'),
            'post'          =>$this->input->post('post'),
            'post_banner'   => $this->input->post('post_banner'),
            'post_date'     => $this->input->post('post_date'),
            'post_status'   => $this->input->post('post_status'),
            'user_id'       => $this->input->post('user_id'),
            'active'        => $this->input->post('active')
        );
        return $this->db->insert('posts', $data);
    }

}