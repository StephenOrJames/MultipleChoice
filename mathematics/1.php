<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'What is the LCM of 4, 5 and 6?',
		array( '60', '30', '24', '120' )
	),
	// 2
	new Item(
		'What is the LCM of 24 and 32?',
		array( '96', '68', '4', '342' )
	),
	// 3
	new Item(
		'What is the HCF of 16 and 28?',
		array( '4', '2', '3', '112' )
	),
	// 4
	new Item(
		'Which of the following is a factor of 44?',
		array( '11', '8', '14', '24' )
	),
	// 5
	new Item(
		'How many different factors does 28 have?',
		array( '6', '8', '14', '4' )
	),
	// 6
	new Item(
		'Which number is divisible by 3?',
		array( '42', '34', '25', '80' )
	),
	// 7
	new Item(
		'Which number is divisible by 7?',
		array( '63', '48', '71', '37' )
	),
	// 8
	new Item(
		'Which of the following is incorrect?',
		array( '0.1 < 10%', '234% < 2 3/4', '5.4 = 540%', '21% > 0.199' )
	),
	// 9
	new Item(
		'Which of the following is the same as 13/4?',
		array( '3 1/4', '1.34', '13.4%', '13.4' )
	),
	// 10
	new Item(
		'Which of the following is a factor of 950?',
		array( '5', '3', '6', '7' )
	),
	// 11
	new Item(
		'Which of the following groups is in ascending order?',
		array( '1.001, 1.01, 1.1', '1.01, 1.1, 1.001', '1.1, 1.001, 1.01', '1.1, 1.01, 1.001' )
	),
	// 12
	new Item(
		'Which of the following has the largest value?',
		array( '4 1/2', '340%', '2.718', '9/4' )
	),
	// 13
	new Item(
		'Which of the polygons below has the largest number of sides?',
		array( 'nonagon', 'hexagon', 'quadrilateral', 'octagon' )
	),
	// 14
	new Item(
		'What is 17.6 divided by 1.1?',
		array( '16', '17', '27', '7.6' )
	),
	// 15
	new Item(
		'What is 3.6 multiplied by 2.01?',
		array( '7.236', '6.75', '6.12', '5.61' )
	)
);

$test = new Test( $items );
$test->start();

?>