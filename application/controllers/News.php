<?php

class News extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('news');
    $this->load->helper('url_helper');
  }

  public function index() {
    $this->data['news'] = $this->news->get_news();
    $this->data['title'] = 'News archive';
    $this->middle = 'news/index'; // passing middle to function. change this for different views.
    $this->layout();
  }

  public function view($slug = NULL) {
    $this->data['news_item'] = $this->news->get_news($slug);
    if (empty($data['news_item'])) {
      show_404();
    }

    $this->data['title'] = $data['news_item']['title'];
    $this->middle = 'news/view'; // passing middle to function. change this for different views.
    $this->layout();
  }
  
  public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->middle = 'news/create'; // passing middle to function. change this for different views.
        $this->layout();
    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('news/success');
    }
}

}
