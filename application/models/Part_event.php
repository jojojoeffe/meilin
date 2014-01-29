<?php 
	class Part_event extends ActiveRecord\Model{

		static $validates_presence_of = array(
			array('part')
			);

		static $per_page = 10;

		public function page($page_number){
			return Part_event::find('all', array('offset' => ($page_number - 1),
				'limit'=>self::$per_page));
		}

	}
 ?>