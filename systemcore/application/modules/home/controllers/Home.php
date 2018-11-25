<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['url'] = $_SERVER['HTTP_HOST'];
        $data['title'] = 'Home';
        $data['module'] = 'home';
        $data['header_file'] = 'home_header';
        $data['view_file'] = 'home_view';
        $data['script_file'] = 'home_script';
        echo Modules::run('template/template_home', $data);
    }
}
