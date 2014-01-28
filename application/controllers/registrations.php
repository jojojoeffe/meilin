<?php

/**
 * Nama file harus sama dengan nama Class
 * http://localhost/testCI/CodeIgniter_2.1.3/index.php/hello
 */
class Registrations extends CI_controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['registration'] = new Registration();
        $this->data['header_logos'] =  Headerlogo::find('all');
        $this->data['contacts'] =  Contact::find('all');
        $this->data['body'] = 'registration/index';
        $this->data['form_action'] = site_url('registrations/register');
        $this->load->view('layouts/application', $this->data);
    }

    function register() {
        $this->data['registration'] = new registration($this->input->post('registration'));
        if ($this->data['registration']->save()) {
            $message = $this->load->view('registration/confirmation', '', true);
            $this->__send_email($this->data['registration']->email_address, $message);
            redirect(site_url('registrations/index'));
        } else {
            $this->data['body'] = 'registration/index';
            $this->data['status'] = 'Registration Failed';
            $this->load->view('layouts/application', $this->data);
        }
    }

    public function __send_email($email, $message) {
        $this->email->set_newline("\r\n");
        $this->email->from('aldhimirza@gmail.com', 'Aldhi');
        $this->email->to($email);
        $this->email->subject('Meilin Consulting Group - Confirmation');
        $this->email->message($message);
        $this->email->send();
        if ($this->email->send()) {
            //echo "email sent to $email";
            redirect(site_url('registrations/index'));
        } else {
            show_error($this->email->print_debugger());
        }
    }

}

?>