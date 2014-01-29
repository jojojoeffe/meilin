<?php

class Event_contents extends CI_Controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index() {
        $this->data['contents'] = Event_content::find('all');
        $this->data['body'] = 'admin/event_content/index';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['content'] = Event_content::find($id);
        $this->data['body'] = 'admin/event_content/edit';
        $this->data['action'] = 'Edit ';
        $this->data['form_action'] = site_url('admin/event_contents/update/' . $this->data['content']->id);
        $this->data['form_title'] = 'Edit Content';
        $this->load->view('admin/application', $this->data);
    }

    function update($id) {
        $this->data['content'] = Event_content::find($id);
        $this->data['content']->update_attributes($this->input->post('content'));
        if ($this->data['content']->save()) {

            redirect(site_url('admin/event_contents'));
        } else {
            $this->data['form_title'] = 'Edit Content';
            $this->data['form_action'] = site_url('admin/event_contents/update/' . $this->data);
            $this->data['body'] = 'admin/event_content/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

}

?>