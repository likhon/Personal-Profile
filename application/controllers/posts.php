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
      $this->data['title'] = "DASHBOARD :: BD STOCKS MARKET";
      $this->middle = 'posts/index'; // passing middle to function. change this for different views.
      $this->layout();
    }//End of index function



}// End of controller