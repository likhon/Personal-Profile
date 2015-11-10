<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class welcome extends MY_Controller {
  public function index() {
    $this->data['title'] = 'DASHBOARD :: BD STOCKS MARKET';
    $this->data['heading'] = 'Welcome to University Management System';
    $this->middle = 'pages/home'; // passing middle to function. change this for different views.
    $this->layout();
  }

}