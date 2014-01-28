<?php

class Registrations extends CI_Controller {

    public function __construct() {
        session_start();
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('admin/login');
        }
    }

    function index() {
        $this->data['customers'] = Registration::find('all');
        $this->data['body'] = 'admin/registration';
        $this->load->view('admin/application', $this->data);
    }
    
    function destroy($id) {
        $user = Registration::find($id);
        $user->delete();
        redirect(site_url('admin/registrations/index'));
    }
}
?>