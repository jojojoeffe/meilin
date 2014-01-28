<?php
	/**
	* Nama file harus sama dengan nama Class
	* http://localhost/testCI/CodeIgniter_2.1.3/index.php/hello
	*/

	class Teams extends CI_controller
	{
		public function __construct() {
			parent::__construct();
		}
		
		public function index(){
			$data['body'] = 'team/index';
                        $data['teams'] =  Team::find('all');
                        $data['contents'] =  Team_content::find('all');
                        $data['header_logos'] =  Headerlogo::find('all');
                        $data['contacts'] =  Contact::find('all');
			$this->load->vars($data);
			$this->load->view('layouts/application');
		}

	}

?>