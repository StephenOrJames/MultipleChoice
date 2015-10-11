<?php

if ( isset( $isMenu ) ) {
	$page = 'Menu';
} else {
	$page = ucfirst( str_replace( '/', ' ', substr( $_SERVER['REQUEST_URI'], 1, -4 ) ) );
}

$title = "$page | Multiple Choice!";

?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css<?php echo '?' . mt_rand(); ?>">
	<link rel="stylesheet" type="text/css" href="../style.css<?php echo '?' . mt_rand(); ?>">
</head>

<body>
	<h1><a href='/index.php'>Multiple Choice!</a></h1>
	<h2><?php echo $page ?></h2>
	<section>