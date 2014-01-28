<?php

class Headerlogos extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['headerlogos'] = Headerlogo::page($page);
        $this->data['body'] = 'admin/headerlogo/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['headerlogo'] = new Headerlogo();
        $this->data['form_action'] = site_url('admin/headerlogos/create');
        $this->data['form_title'] = 'New headerlogo';
        $this->data['body'] = 'admin/headerlogo/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['headerlogo'] = Headerlogo::find($id);
        $this->data['body'] = 'admin/headerlogo/edit';
        $this->data['action'] = 'Edit ';
        $this->data['form_action'] = site_url('admin/headerlogos/update/' . $this->data['headerlogo']->id);
        $this->data['form_title'] = 'Edit Header Logo';
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['headerlogo'] = new Headerlogo($this->input->post('headerlogo'));
  
        if ($this->data['headerlogo']->save()) {
            
            if ($this->data['headerlogo']->upload_image())
                $this->data['headerlogo']->save();

            redirect(site_url('admin/headerlogos'));
        }else {
            $this->data['form_title'] = 'New headerlogo';
            $this->data['form_action'] = site_url('admin/headerlogos/create');
            $this->data['body'] = 'admin/headerlogo/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['headerlogo'] = Headerlogo::find($id);
        $this->data['headerlogo']->update_attributes($this->input->post('headerlogo'));

        if ($this->data['headerlogo']->save()) {

            if ($this->data['headerlogo']->upload_image())
                $this->data['headerlogo']->save();

            redirect(site_url('admin/headerlogos'));
        }else {
            $this->data['form_title'] = 'Edit Logo';
            $this->data['form_action'] = site_url('admin/headerlogos/update/' . $this->data['headerlogo']->id);
            $this->data['body'] = 'admin/headerlogo/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $headerlogo = headerlogo::find($id);
        $headerlogo->delete();
        redirect(site_url('admin/headerlogos'));
    }

}

?>