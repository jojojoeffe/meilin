<?php

class Company extends CI_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['body'] = 'company/index';
        $data['contents'] = Company_content::find('all');
        $data['company_logos'] =  Companylogo::find('all');
        $data['header_logos'] =  Headerlogo::find('all');
        $data['contacts'] =  Contact::find('all');
        $this->load->vars($data);
        $this->load->view('layouts/application');
    }

}

?>