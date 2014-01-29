<?php 
	class Event extends ActiveRecord\Model{

		static $validates_presence_of = array(
			array('part'),
                        array('date'),
                        array('section')
			);

		static $per_page = 5;

		public function page($page_number){
			return Event::find('all', array('offset' => ($page_number - 1),
				'limit'=>self::$per_page));
		}

	}
 ?>