<?php

class Login extends CI_Controller {

    public function __construct() {

        session_start();
        parent::__construct();
    }

    public function proses() {
        if (isset($_SESSION['username'])) { //cek apakah session ada
            redirect('admin/users'); //redirect controller c_home
        }

        $this->load->library('form_validation'); //load library form_validation
        $this->form_validation->set_rules('username', 'Username', 'required'); //cek, validasi username
        $this->form_validation->set_rules('password', 'Password', 'required'); //cek, validasi password
       
        
        if ($this->form_validation->run() == TRUE) { //apabila validasi true(benar semua)
            
           
            
            $this->load->model('m_user'); // load model m_user
            $result = $this->m_user->cek_user_login(//jalankan fungsi cek_user_login dari model m_user
                    $this->input->post('username'), //menangkap username dari form
                    $this->input->post('password') //menangkap password dari form
            );


            if ($result == TRUE) { //apabila result = true(ada data)
                $_SESSION['username'] = $this->input->post('username'); //create session
                redirect('admin/users'); // redirect controller c_home
            }
        }
        $this->load->view('admin/login/index'); //apabila session kosong load login/v_form
    }

    public function logout() { //fungsi logout
        session_destroy(); //session destroy
        $this->index(); //redirect function index()
    }

    function index() {

        $this->data['form_action'] = site_url('admin/login/proseslogin');
        $this->data['body'] = 'admin/login/index';
        $this->load->view('admin/login/index', $this->data);
        
        
    }
//    
//    function cekuser() {
//
//        $data['query'] = $this->login->cekdb();
//        if ($data['query'] == null) {
//            return false;
//        } else {
//            return $data['query'];
//        }
//    }
//
//    function proseslogin() {
//
//        //megecek isi dari fungsi cekuser diatas
//        //jika data ada maka login berhasil
//        if ($this->cekuser() == true) {
//
//            $data['username'] = 'Account: ' . $this->input->post('username');
//            $newdata = array
//                (
//                'username' => $data['username'],
//                'islogin' => true
//            );
//
//            $this->session->set_userdata($newdata);
//            $this->load->view('admin/users', $data);
//        } else {
//
//            $data['gagal'] = '<div id="notification">Maaf, Proses Login Gagal!<BR>1. Username atau Password anda salah.<BR>2. Coba periksa kembali keadaan <span class="red">Caps lock</span>.</div>';
//            $this->load->view('admin/login', $data);
//        }
//    }
//
//    function logout() {
//        $this->session->sess_destroy();
//        redirect('login/index');
//    }

}

?>