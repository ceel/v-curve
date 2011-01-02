<?php
$current_dir = dirname(__FILE__);

include_once('DB/DataObject.php' );
include_once('DB/DataObject/Cast.php');

set_include_path(get_include_path() . PATH_SEPARATOR . $current_dir);

$options = &PEAR::getStaticProperty('DB_DataObject','options');

$options = array(
	'database'         => 'mysql://user:pass@localhost/moods',
	'schema_location'  => $current_dir . '/dataobject/',
	'class_location'   => $current_dir . '/dataobject/',
	'require_prefix'   => 'DataObjects/',
	'class_prefix'     => 'DataObjects_',
);

//	DB_DataObject::debugLevel(5);

?>
