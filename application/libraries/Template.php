<?php 

class Template {
  protected $_ci;

  function __construct()
  {
    $this->_ci = &get_instance();
  }

  function render($template = NULL, $data = NULL){
    if ($template != NULL) {
      $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
    }
    $data['_head'] = $this->_ci->load->view('template/head', $data, TRUE);
    $data['_header'] = $this->_ci->load->view('template/header', $data, TRUE);
    $data['_aside'] = $this->_ci->load->view('template/aside', $data, TRUE);
    $data['_footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
    $data['_template'] = $this->_ci->load->view('template/template', $data);
  }
}

?>