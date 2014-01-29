<?php

class Event_content extends ActiveRecord\Model {

    static $table_name = 'event_contents';
    static $validates_presence_of = array(
        array('title'),
        array('description_1'),
        array('description_2')
    );

}

?>