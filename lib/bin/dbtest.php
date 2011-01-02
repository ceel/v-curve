<?php
require_once( '../settings.php' );

$test = DB_DataObject::factory( 'test' );
$test->find();

echo 'Found ' . $test->count() . ' rows.<br/>';
while( $test->fetch() ) {
	echo $test->id . ' - ' . $test->string . ' - ' . $test->text . '<br/>';
}

?>
