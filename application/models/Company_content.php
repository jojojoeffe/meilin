<?php

class Company_content extends ActiveRecord\Model {

    static $table_name = 'company_contents';
    static $validates_presence_of = array(
        array('title'),
        array('description_1'),
        array('description_2'),
        array('description_3')
    );

}

?>