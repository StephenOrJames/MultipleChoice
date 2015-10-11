<?php

$isMenu = true;
include_once 'header.php';

function listTests( $subject ){
	echo "\t\t<h3>" . ucfirst( $subject ) . "</h3>\n";
	echo "\t\t<ul>\n";
	foreach ( scandir( $subject ) as $file ) {
		if ( !in_array( $file, array( '.', '..', 'template.php' ) ) ) {
			echo "\t\t\t<li><a href='$subject/$file'>Test " . substr( $file, 0, -4 ) . "</a></li>\n";
		}
	}
	echo "\t\t</ul>\n";
}

listTests( 'mathematics' );

include_once 'footer.php';

?>