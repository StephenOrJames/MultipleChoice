<?php

require '../mc.php';

$items = array(
	// 1
	new Item(
		'Which of the following is a prime number?',
		array( '43', '56', '78', '39' )
	),
	// 2
	new Item(
		'Which of the following is a composite number?',
		array( '69', '73', '79', '83' )
	),
	// 3
	new Item(
		'How many factors do all prime numbers have?',
		array( '2', '0', '1', 'more than 2' )
	),
	// 4
	new Item(
		'How many factors do all composite numbers have?',
		array( 'more than 2', '0', '1', '2' )
	),
	// 5
	new Item(
		'What is the smallest prime number?',
		array( '2', '1', '3', '4' )
	),
	// 6
	new Item(
		'What is the smallest composite number?',
		array( '4', '1', '2', '3' )
	),
	// 7
	new Item(
		'Which of the following is true when any odd number is divided by two?',
		array( 'there is a remainder', 'there is no remainder', 'the result is a proper fraction', 'the result is an even number' )
	),
	// 8
	new Item(
		'Which of the following is an even number?',
		array( '1234', '2345', '321', '157' )
	),
	// 9
	new Item(
		'Given 3a = 15, what is the value of a?',
		array( '5', '4', '3', '6' )
	),
	// 10
	new Item(
		'If 8/e + 2 = 4, what is the value of e?',
		array( '4', '2', '8', '2.5' )
	),
	// 11
	new Item(
		'When two is added to five times a certain number k, the result is twenty-two. What is the value of the k?',
		array( 'four', 'five', 'twelve', 'twenty' )
	),
	// 12
	new Item(
		'When expressed as a Roman numeral, the Arabic numeral 32 can be represented as',
		array( 'XXXII', 'IIXXX', 'XXLII', 'XIXIX' )
	),
	// 13
	new Item(
		'Which of the following is equivalent to the Roman numeral CD?',
		array( '400', '600', '900', '150' )
	),
	// 14
	new Item(
		'Which of the following is not a valid Roman numeral?',
		array( 'XXXL', 'LIX', 'DC', 'MDLXXXVIII' )
	),
	// 15
	new Item(
		'Which of the following Roman numerals has the least value?',
		array( 'XLVI', 'MI', 'LIX', 'MDCL' )
	),
);

$test = new Test( $items );
$test->start();

?>