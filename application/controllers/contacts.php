<?php

class Contacts extends CI_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $this->data['contacts'] = Contact::find('all');
        $this->data['header_logos'] =  Headerlogo::find('all');
        $this->data['contacts'] =  Contact::find('all');
        $this->data['body'] = 'contact/index';
        $this->load->view('layouts/application', $this->data);
    }
}
?>