<?php

class Companylogos extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['companylogos'] = Companylogo::page($page);
        $this->data['body'] = 'admin/companylogo/index';
        $this->load->view('admin/application', $this->data);
    }


    function edit($id) {
        $this->data['companylogo'] = Companylogo::find($id);
        $this->data['body'] = 'admin/companylogo/edit';
        $this->data['action'] = 'Edit ';

        $this->data['form_action'] = site_url('admin/companylogos/update/' . $this->data['companylogo']->id);

        $this->data['form_title'] = 'Edit Company Logo';
        $this->load->view('admin/application', $this->data);
    }

    function update($id) {
        $this->data['companylogo'] = Companylogo::find($id);
        $this->data['companylogo']->update_attributes($this->input->post('companylogo'));

        if ($this->data['companylogo']->save()) {

            if ($this->data['companylogo']->upload_image()){
                
                $this->data['companylogo']->save();  
            }
                
            redirect(site_url('admin/companylogos'));
        }else {
            $this->data['form_title'] = 'Edit Company Logo';
            $this->data['form_action'] = site_url('admin/companylogos/update/' . $this->data['companylogo']->id);
            $this->data['body'] = 'admin/companylogo/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $slider = Companylogo::find($id);
        $slider->delete();
        redirect(site_url('admin/companylogos'));
    }

}

?>