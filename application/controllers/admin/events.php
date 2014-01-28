<?php

class Events extends CI_Controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index() {
        $this->data['events'] = Event::find('all');
        $this->data['body'] = 'admin/event/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['event'] = new Event();
        $this->data['form_action'] = site_url('admin/events/create');
        $this->data['form_title'] = 'Add Event';
        $this->data['body'] = 'admin/event/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['event'] = Event::find($id);
        $this->data['body'] = 'admin/event/edit';
        $this->data['action'] = 'Edit ';
        $this->data['form_action'] = site_url('admin/events/update/' . $this->data['event']->id);
        $this->data['form_title'] = 'Edit ' . $this->data['event']->name;
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['event'] = new event($this->input->post('event'));

        if ($this->data['event']->save()) {
            redirect(site_url('admin/events'));
        } else {
            $this->data['form_title'] = 'Add event';
            $this->data['form_action'] = site_url('admin/events/create');
            $this->data['body'] = 'admin/event/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['event'] = Event::find($id);
        $this->data['event']->update_attributes($this->input->post('event'));
        if ($this->data['event']->save()) {

            redirect(site_url('admin/events'));
        } else {
            $this->data['form_title'] = 'Edit' . $this->data['event']->name;
            $this->data['form_action'] = site_url('admin/events/update/' . $this->data);
            $this->data['body'] = 'admin/event/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $event = Event::find($id);
        $event->delete();
        redirect(site_url('admin/events'));
    }

}

?>