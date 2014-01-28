<?php

class User extends ActiveRecord\Model {

    static $table_name = 'users';
    static $validates_presence_of = array(
        array('name'),
        array('username')
    );
    static $validates_format_of = array(
        array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
    );
   
  
  
//    public function validate() {
//        
//        if ($this->password == md5(NULL)) {
//            $this->errors->add('password', "not NULL bray");
//        } else if ($this->password_confirmation == md5(NULL)) {
//            $this->errors->add('password_confirmation', "not NULL cuk");
//        } else if ($this->password != $this->password_confirmation) {
//            $this->errors->add('password', "not match bray");
//            $this->errors->add('password_confirmation', "not match cuk");
//        }
//    }


}

?>