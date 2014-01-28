<?php
	class Users extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}

		function index(){
			$this->data['users'] = User::find('all');

			if($this->uri->segment(4)!=NULL)
				$this->data['detailuser'] = User::find($this->uri->segment(4));
			$this->data['body'] = 'admin/user/index';
			$this->load->view('admin/application', $this->data);
		}

		function add(){
			$this->data['user'] = new User();
			$this->data['form_action'] = site_url('admin/users/create');
			$this->data['form_title'] = 'Add User';
			$this->data['body'] = 'admin/user/add';
			$this->data['action'] = 'Add ';
			$this->load->view('admin/application', $this->data);
		}

		function edit($id){
			$this->data['user'] = User::find($id);
			$this->data['body'] = 'admin/user/edit';
			$this->data['action'] = 'Edit ';
			$this->data['form_action'] = site_url('admin/users/update/'.$this->data['user']->id);
			$this->data['form_title'] = 'Edit '.$this->data['user']->name;
			$this->load->view('admin/application', $this->data);
		}

		function create(){
			$this->data['user'] = new user($this->input->post('user'));
			
			if ($this->data['user']->save()) {
				redirect(site_url('admin/users'));
			}else{
				$this->data['form_title'] = 'Add user';
				$this->data['form_action'] = site_url('admin/users/create');
				$this->data['body'] = 'admin/user/add';
				$this->data['action'] = 'Add ';
				$this->load->view('admin/application', $this->data);
			}


		}

		function update($id){
			$this->data['user'] = User::find($id);
			$this->data['user']->update_attributes($this->input->post('user'));
			if ($this->data['user']->save()) {

				redirect(site_url('admin/users'));
				
			}else{
				$this->data['form_title'] = 'Edit'.$this->data['user']->name;
				$this->data['form_action'] = site_url('admin/users/update/'.$this->data);
				$this->data['body'] = 'admin/user/edit';
				$this->data['action'] = 'Edit ';
				$this->load->view('admin/application', $this->data);
			}

		}

		function destroy($id){
			$user = User::find($id);
			$user->delete();
			redirect(site_url('admin/users'));
		}

	}
?>