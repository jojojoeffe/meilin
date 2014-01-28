<?php 
	class Team extends ActiveRecord\Model{

		static $validates_presence_of = array(
			array('name')
			);


		static $before_destroy = array(
			'delete_uploaded_image'
			);

		public function image_url(){
			if($this->image)
				return base_url('uploads/team/'.$this->id.'/'.$this->image);
			else
				return false;
		}

		public function upload_image(){

			$CI =& get_instance();
			$CI->load->library('upload');

			if(isset($_FILES['team_image']['size']) && $_FILES['team_image']['size'] > 0){
				
				//create target directory
				$target_dir = getcwd().'/uploads/team/'.$this->id;
				if(!file_exists($target_dir))
					mkdir($target_dir);

				$config['upload_path'] = $target_dir; //'./uploads/product/'.$this->id.'/';
				$config['allowed_types'] = 'gif|png|jpg|bmp';
				$config['max_size'] = '1000000';
				$config['max_width'] = '2048';
				$config['max_height'] = '1536';

				$CI->upload->initialize($config);
				$this->delete_uploaded_image();

				if($CI->upload->do_upload('team_image')){
					$upload_data = $CI->upload->data();
					$this->image = $upload_data['file_name'];
					return true;
				}else{
					echo $this->upload->display_errors();				
					return false;
				}
			}
		}

		public function delete_uploaded_image(){
			$full_path = getcwd().'/uploads/team/'.$this->id .'/'.$this->image;
			if(isset($this->image) && file_exists($full_path))
				unlink($full_path);
		}


		static $per_page = 100;

		public function page($page_number){
			return Team::find('all', array('offset' => ($page_number - 1),
				'limit'=>self::$per_page));
		}

	}
 ?>