<?php class Registration extends ActiveRecord\Model
	{
		static $table_name = 'registrations';

		static $validates_presence_of = array(
			array('name'),
                        array('category_service')	
			);	

		static $validates_format_of = array(
			 array('email_address', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
			);
	
	}
?>