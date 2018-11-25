<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function template_home($data) {
        $this->load->view('template_home', $data);
    }
}
