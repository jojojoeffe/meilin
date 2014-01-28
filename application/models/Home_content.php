<?php

class Home_content extends ActiveRecord\Model {

    static $table_name = 'home_contents';
    static $validates_presence_of = array(
        array('title'),
        array('description')
    );

}

?>