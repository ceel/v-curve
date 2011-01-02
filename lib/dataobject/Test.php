<?php
/**
 * Table Definition for test
 */
require_once 'DB/DataObject.php';

class DataObjects_Test extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'test';                // table name
    public $id;                              // int(11)  not_null primary_key auto_increment
    public $string;                          // string(128)  
    public $text;                            // blob(65535)  not_null blob

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Test',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
