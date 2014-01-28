<?php

	class Home extends CI_controller
	{
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$data['body'] = 'home/index';
                        $data['slider_images'] =  Slider_image::find('all');
                        $data['contents'] =  Home_content::find('all');
                        $data['header_logos'] =  Headerlogo::find('all');
                        $data['contacts'] =  Contact::find('all');
			$this->load->vars($data);
			$this->load->view('layouts/application');
		}



	}
?>
