<?php

class Services extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['services'] = Service::page($page);
        $this->data['body'] = 'admin/service/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['service'] = new Service();
        $this->data['form_action'] = site_url('admin/services/create');
        $this->data['form_title'] = 'New service';
        $this->data['body'] = 'admin/service/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['service'] = Service::find($id);
        $this->data['body'] = 'admin/service/edit';
        $this->data['action'] = 'Edit ';

        $this->data['form_action'] = site_url('admin/services/update/' . $this->data['service']->id);

        $this->data['form_title'] = 'Edit ' . $this->data['service']->consulting_field;
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['service'] = new Service($this->input->post('service'));
        if ($this->data['service']->save()) {

            if ($this->data['service']->upload_image())
                $this->data['service']->save();

            redirect(site_url('admin/services'));
        }else {
            $this->data['form_title'] = 'New service';
            $this->data['form_action'] = site_url('admin/services/create');
            $this->data['body'] = 'admin/service/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['service'] = Service::find($id);
        $this->data['service']->update_attributes($this->input->post('service'));

        if ($this->data['service']->save()) {

            if ($this->data['service']->upload_image())
                $this->data['service']->save();

            redirect(site_url('admin/services'));
        }else {
            $this->data['form_title'] = 'Edit' . $this->data['service']->consulting_field;
            $this->data['form_action'] = site_url('admin/services/update/' . $this->data['service']->id);
            $this->data['body'] = 'admin/service/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $service = service::find($id);
        $service->delete();
        redirect(site_url('admin/services'));
    }

}

?>