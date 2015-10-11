<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'What is 11/4 expressed as a decimal?',
		array( '2.75', '11.4', '2.14', '2' )
	),
	// 2
	new Item(
		'As a percentage, the decimal 2.3 can be expressed as',
		array( '230%', '23%', '2.3%', '0.023%' )
	),
	// 3
	new Item(
		'If an apple costs $35, how many apples can I buy with $105?',
		array( '3', '2', '4', '5' )
	),
	// 4
	new Item(
		'Which of the following is a composite number?',
		array( '33', '13', '37', '17' )
	),
	// 5
	new Item(
		'Which of the following has the largest value?',
		array( '1', '39%', '99/100', '0.55' )
	),
	// 6
	new Item(
		'What is 45 &divide; 0.5?',
		array( '90', '45', '10', '9' )
	),
	// 7
	new Item(
		'What is the average of 5, 15, 20 and 20?',
		array( '15', '20', '12.5', '5' )
	),
	// 8
	new Item(
		'Identify the mode of the following numbers: 3, 4, 5, 3, 6, 4, 5, 6, 4, 5, 4',
		array( '4', '3', '5', '6' )
	),
	// 9
	new Item(
		'If you have $1500 what is the largest number of books can you purchase if each book costs $400?',
		array( '3', '3.75', '4', '2' )
	),
	// 10
	new Item(
		'Which of the following is not a factor of 102?',
		array( '5', '3', '2', '51' )
	),
	// 11
	new Item(
		'How many minutes are in 75% of an hour?',
		array( '45', '75', '15', '25' )
	),
	// 12
	new Item(
		'146 &times; 1.2 =',
		array( '175.2', '17.52', '1752', '175.02' )
	),
	// 13
	new Item(
		'3 &divide; &frac12; =',
		array( '6', '1.5', '3', '2/3' )
	),
	// 14
	new Item(
		'Which of the following numbers is a multiple of 10?',
		array( '90', '5', '28', '105' )
	),
	// 15
	new Item(
		'How many halves make five wholes?',
		array( '10', '2.5', '5', '0.4' )
	),
);

$test = new Test( $items );
$test->start();

?>