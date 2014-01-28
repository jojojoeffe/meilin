<?php

class Team_content extends ActiveRecord\Model {

    static $table_name = 'team_contents';
    static $validates_presence_of = array(
        array('title'),
        array('description')
    );

}

?>