<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pages extends MY_Controller {

  public function about() {
    $this->load->library('simple_html_dom');
    $this->data['title'] = "DASHBOARD :: BD STOCKS MARKET";
    $this->data['heading'] = 'About World University of Bangladesh';
    $this->data['html']  = file_get_html('http://www.dsebd.org/latest_share_price_all.php');
    $i = 0;
    foreach($this->data['html']->find('tr') as $row) {
      $this->data['table'][$i] = trim($row->find('td',1)->plaintext);
      $i++;
    }
    $this->middle = 'pages/about'; // passing middle to function. change this for different views.
    $this->layout();
  }
}