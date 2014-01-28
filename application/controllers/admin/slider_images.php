<?php

class Slider_images extends CI_controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index($page = 1) {
        $this->data['slider_images'] = Slider_image::page($page);
        $this->data['body'] = 'admin/slider_image/index';
        $this->load->view('admin/application', $this->data);
    }

    function add() {
        $this->data['slider_image'] = new Slider_image();
        $this->data['form_action'] = site_url('admin/slider_images/create');
        $this->data['form_title'] = 'New Image';
        $this->data['body'] = 'admin/slider_image/add';
        $this->data['action'] = 'Add ';
        $this->load->view('admin/application', $this->data);
    }

    function edit($id) {
        $this->data['slider_image'] = Slider_image::find($id);
        $this->data['body'] = 'admin/slider_image/edit';
        $this->data['action'] = 'Edit ';

        $this->data['form_action'] = site_url('admin/slider_images/update/' . $this->data['slider_image']->id);

        $this->data['form_title'] = 'Edit ' . $this->data['slider_image']->name;
        $this->load->view('admin/application', $this->data);
    }

    function create() {
        $this->data['slider_image'] = new Slider_image($this->input->post('slider_image'));
        if ($this->data['slider_image']->save()) {

            if ($this->data['slider_image']->upload_image())
                $this->data['slider_image']->save();

            redirect(site_url('admin/slider_images'));
        }else {
            $this->data['form_title'] = 'New Image';
            $this->data['form_action'] = site_url('admin/slider_images/create');
            $this->data['body'] = 'admin/slider_image/add';
            $this->data['action'] = 'Add ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function update($id) {
        $this->data['slider_image'] = Slider_image::find($id);
        $this->data['slider_image']->update_attributes($this->input->post('slider_image'));

        if ($this->data['slider_image']->save()) {

            if ($this->data['slider_image']->upload_image())
                $this->data['slider_image']->save();

            redirect(site_url('admin/slider_images'));
        }else {
            $this->data['form_title'] = 'Edit' . $this->data['slider_image']->name;
            $this->data['form_action'] = site_url('admin/slider_images/update/' . $this->data['slider_image']->id);
            $this->data['body'] = 'admin/slider_image/edit';
            $this->data['action'] = 'Edit ';
            $this->load->view('admin/application', $this->data);
        }
    }

    function destroy($id) {
        $slider = Slider_image::find($id);
        $slider->delete();
        redirect(site_url('admin/slider_images'));
    }

}

?>