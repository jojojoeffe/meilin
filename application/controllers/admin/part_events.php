<?php

class Part_events extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['part_events'] = Part_event::page($page);
        $this->data['body'] = 'admin/part_event/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['part_event'] = new Part_event();
        $this->data['form_action'] = site_url('admin/part_events/create');
        $this->data['form_title'] = 'New Part Event';
        $this->data['body'] = 'admin/part_event/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['part_event'] = Part_event::find($id);
        $this->data['body'] = 'admin/part_event/edit';
        $this->data['action'] = 'Edit ';

        $this->data['form_action'] = site_url('admin/part_events/update/' . $this->data['part_event']->id);

        $this->data['form_title'] = 'Edit ' . $this->data['part_event']->part;
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['part_event'] = new Part_event($this->input->post('part_event'));
        if ($this->data['part_event']->save()) {

            redirect(site_url('admin/part_events'));
        }else {
            $this->data['form_title'] = 'New Part_event';
            $this->data['form_action'] = site_url('admin/part_events/create');
            $this->data['body'] = 'admin/part_event/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['part_event'] = Part_event::find($id);
        $this->data['part_event']->update_attributes($this->input->post('part_event'));

        if ($this->data['part_event']->save()) {

            redirect(site_url('admin/part_events'));
        }else {
            $this->data['form_title'] = 'Edit' . $this->data['part_event']->name;
            $this->data['form_action'] = site_url('admin/part_events/update/' . $this->data);
            $this->data['body'] = 'admin/part_event/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $part_event = Part_event::find($id);
        $part_event->delete();
        redirect(site_url('admin/part_events'));
    }

}

?>