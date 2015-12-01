<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class welcome extends MY_Controller {
  public function index() {
    $this->data['title'] = 'HASINUR RAHMAN :: IT SOLUTION PROVIDER';
    $this->data['heading'] = 'Welcome to my site';
    $this->middle = 'pages/home'; // passing middle to function. change this for different views.
    $this->layout();
  }

}