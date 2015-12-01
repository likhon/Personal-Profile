<?php
/********************************************************************************
 * Written By       : Hasinur Rahman                                            *
 * Date & Time      : 11/8/2015 12:17 PM                                        *
 ********************************************************************************/
class Posts extends MY_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('post');
        $this->load->helper('url_helper');
  }

  function index(){
      $this->data['posts'] = $this->post->get_posts();
      $this->data['title'] =  "HASINUR RAHMAN :: IT PROFESSIONAL";
      $this->middle = 'posts/index'; // passing middle to function. change this for different views.
      $this->layout();
    }//End of index function

    public function add(){
        $this->load->library('ckeditor');
        $this->ckeditor->basePath = base_url().'assets/ckeditor/';
        $this->ckeditor->config['language'] = 'en';
//        $this->ckeditor->config['width'] = '600px';
//        $this->ckeditor->config['height'] = '250px';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->data['title'] = 'Add new post';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->middle = 'posts/add'; // passing middle to function. change this for different views.
            $this->layout();
        } else {
            $config['upload_path'] = 'assets/upload/blog/';
            // set the filter image types
            $config['allowed_types'] = 'gif|jpg|png';
            //load the upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->set_allowed_types('*');
            $data['upload_data'] = '';
            //if not successful, set the error message
            if (!$this->upload->do_upload('userfile')) {
                $data = array('msg' => $this->upload->display_errors());

            } else { //else, set the success message
                $data = array('msg' => "Upload success!");

                $data['upload_data'] = $this->upload->data();

            }

            //load the view/upload.php
            $this->load->view('upload', $data);
            $this->post->create_post();
            $this->load->view('posts/index');
        }
    }





}// End of controller