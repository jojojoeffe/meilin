<?php

class Contact extends ActiveRecord\Model {

    static $table_name = 'contacts';
    static $validates_presence_of = array(
        array('title'),
        array('region'),
        array('country'),
        array('province'),
        array('tel_local'),
        array('tel_inter'),
        array('fax'),
        array('whatsap_line')
    );
    
    static $validates_format_of = array(
        array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
    );
}

?>