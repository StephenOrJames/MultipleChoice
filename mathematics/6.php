<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'How many metres are in a 20 centimetres?',
		array( '0.2', '2', '2 000', '0.02' )
	),
	// 2
	new Item(
		'A man caught 5 litres of water in a bucket. He then poured out a half of the water. How many decilitres of water remain in the bucket?',
		array( '25', '2.5', '0.25', '250' )
	),
	// 3
	new Item(
		'Which of the following units would be most suitable for measuring the volume of a box?',
		array( 'cubic metres', 'cubic grams', 'squared metres', 'squared grams' )
	),
	// 4
	new Item(
		'How many hours are in a week?',
		array( '168', '240', '84', '144' )
	),
	// 5
	new Item(
		'Jamaica gained independence in 1962. In which century was this?',
		array( '20th', '21st', '19th', '62nd' )
	),
	// 6
	new Item(
		'What is 1/2 - 1/8',
		array( '0.375', '0.25', '0.125', '0.4' )
	),
	// 7
	new Item(
		'4 1/5 - 4/5',
		array( '3 2/5', '3 1/5', '5', '4 3/5' )
	),
	// 8
	new Item(
		'How much is 125% of 40?',
		array( '50', '25', '38', '45' )
	),
	// 9
	new Item(
		'Estimate the product of 13 and 12.',
		array( '156', '144', '200', '100' )
	),
	// 10
	new Item(
		'How many cents are in $100?',
		array( '10 000', '1 000', '100', '100 000' )
	)
);

$test = new Test( $items );
$test->start();

?>