<?php

class Teams extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['teams'] = Team::page($page);
        $this->data['body'] = 'admin/team/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['team'] = new Team();
        $this->data['form_action'] = site_url('admin/teams/create');
        $this->data['form_title'] = 'New team';
        $this->data['body'] = 'admin/team/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['team'] = Team::find($id);
        $this->data['body'] = 'admin/team/edit';
        $this->data['action'] = 'Edit ';

        $this->data['form_action'] = site_url('admin/teams/update/' . $this->data['team']->id);

        $this->data['form_title'] = 'Edit ' . $this->data['team']->name;
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['team'] = new Team($this->input->post('team'));
        if ($this->data['team']->save()) {

            if ($this->data['team']->upload_image())
                $this->data['team']->save();

            redirect(site_url('admin/teams'));
        }else {
            $this->data['form_title'] = 'New Team';
            $this->data['form_action'] = site_url('admin/teams/create');
            $this->data['body'] = 'admin/team/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['team'] = Team::find($id);
        $this->data['team']->update_attributes($this->input->post('team'));

        if ($this->data['team']->save()) {

            if ($this->data['team']->upload_image())
                $this->data['team']->save();

            redirect(site_url('admin/teams'));
        }else {
            $this->data['form_title'] = 'Edit' . $this->data['team']->name;
            $this->data['form_action'] = site_url('admin/teams/update/' . $this->data);
            $this->data['body'] = 'admin/team/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $team = Team::find($id);
        $team->delete();
        redirect(site_url('admin/teams'));
    }

}

?>