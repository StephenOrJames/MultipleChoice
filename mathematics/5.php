<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'Round 8291 to the nearest ten.',
		array( '8290', '8291.0', '8300', '90' )
	),
	// 2
	new Item(
		'Round 412.323 to the nearest hundredth.',
		array( '412.32', '412.31', '412.33', '400.32' )
	),
	// 3
	new Item(
		'Round 8982.3 to the nearest hundred.',
		array( '9000', '8900', '8800', '8980' )
	),
	// 4
	new Item(
		'Round 682.268 to the nearest whole.',
		array( '682', '700', '682.27', '682.3' )
	),
	// 5
	new Item(
		'Round 832.347 to the nearest thousandth.',
		array( '832.347', '1000', '832.3', '832.35' )
	),
	// 6
	new Item(
		'Which of the following is the smallest counting number?',
		array( '1', '0', '0.5', '1/4' )
	),
	// 7
	new Item(
		'Complete the sequence: 1, 5, 9, 13, 17, 21, __, 29',
		array( '25', '23', '27', '33' )
	),
	// 8
	new Item(
		'Complete the sequence: 2, 3, 5, 7, 11, 13, 17, 19, 23, __',
		array( '29', '25', '27', '31' )
	),
	// 9
	new Item(
		'Determine the median of the following numbers: 5, 4, 2, 3, 6, 8, 9, 1, 2, 1, 7',
		array( '4', '2', '3', '8' )
	),
	// 10
	new Item(
		'How many years make a millenium?',
		array( '1 000', '10', '100', '1 000 000' )
	),
);

$test = new Test( $items );
$test->start();

?>