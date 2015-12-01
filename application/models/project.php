<?php

class Project extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_projects($status = 1) {
    $query = $this->db->get_where('projects', array('status' => $status));
    return $query->row_array();
  }
  public function create_project(){
    $this->load->helper('url');
    $data = array(
        'title'         => $this->input->post('title'),
        'description'   => $this->input->post('description'),
        'status'        =>$this->input->post('status'),
        'project_url'   => $this->input->post('project_url'),
        'screen'        => $this->input->post('screen'),
        'technologies'  => $this->input->post('technologies')
    );
    return $this->db->insert('projects', $data);
  }

}
