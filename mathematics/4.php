<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'Identify the prime number.',
		array( '43', '42', '44', '45' )
	),
	// 2
	new Item(
		'Identify the prime number.',
		array( '71', '68', '69', '70' )
	),
	// 3
	new Item(
		'Identify the prime number.',
		array( '31', '1', '4', '27' )
	),
	// 4
	new Item(
		'Identify the composite number.',
		array( '63', '43', '53', '73' )
	),
	// 5
	new Item(
		'Identify the composite number.',
		array( '4', '1', '2', '3' )
	),
	// 6
	new Item(
		'Identify the composite number.',
		array( '111', '107', '109', '113' )
	)
);

$test = new Test( $items );
$test->start();

?>