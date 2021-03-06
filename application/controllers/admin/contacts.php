<?php

class Contacts extends CI_Controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index() {
        $this->data['contacts'] = Contact::find('all');
        $this->data['body'] = 'admin/contact/index';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['contact'] = Contact::find($id);
        $this->data['body'] = 'admin/contact/edit';
        $this->data['action'] = 'Edit ';
        $this->data['form_action'] = site_url('admin/contacts/update/' . $this->data['contact']->id);
        $this->data['form_title'] = 'Edit Content';
        $this->load->view('admin/application', $this->data);
    }

    function update($id) {
        $this->data['contact'] = Contact::find($id);
        
        
        $this->data['contact']->update_attributes($this->input->post('contact'));
    
        
        if ($this->data['contact']->save()) {

            redirect(site_url('admin/contacts'));
        } else {
            $this->data['form_title'] = 'Edit Content';
            $this->data['form_action'] = site_url('admin/contacts/update/' . $this->data);
            $this->data['body'] = 'admin/contact/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

}

?>