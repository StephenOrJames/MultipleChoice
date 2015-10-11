<?php

class Item {
	function __construct( $question, $answers ) {
		$this->question = $question;
		$this->correctAnswer = $answers[0];
		$this->answers = $answers;
	}
	
	function shuffleAnswers() {
		$answers = $this->answers;
		shuffle( $answers );
		return $answers;
	}
	
	function answerIsCorrect( $answer ) {
		return ( $answer == $this->correctAnswer );
	}
}

class Test {
	function __construct( $items ) {
		$this->allItems = $items;
		$this->init( $this->allItems );
	}
	
	function init( $items ) {
		if ( session_status() == PHP_SESSION_NONE ) {
			session_start();
		}
		
		$page = ucfirst( str_replace( '/', ' ', substr( $_SERVER['REQUEST_URI'], 1, -4 ) ) );
		if ( isset( $_SESSION[$page]['items'] ) ) {
			$this->items = $_SESSION[$page]['items'];
		} else {
			$this->items = $items;
		}
	}
	
	function start() {
		include_once 'header.php';
		if ( !isset( $_POST['submit'] ) ) {
			
			echo "\n\t<form action='" . basename( $_SERVER['PHP_SELF'] ) . "' method='post'>";
			echo "\n\t\t<ol>";
			foreach ( $this->items as $item ) {
				$number = array_search( $item, $this->allItems );
				$answers = $item->shuffleAnswers();
				echo "\n" . <<<HTML
			<li style="padding: 5px">
				<strong>$item->question</strong>
				<br><input type="radio" name="i$number" value="{$answers[0]}"> {$answers[0]}
				<br><input type="radio" name="i$number" value="{$answers[1]}"> {$answers[1]}
				<br><input type="radio" name="i$number" value="{$answers[2]}"> {$answers[2]}
				<br><input type="radio" name="i$number" value="{$answers[3]}"> {$answers[3]}
			</li>
HTML;
			}
			echo "\n\t\t</ol>\n\t\t<br><input type='submit' name='submit' value='Submit'>\n\t</form>\n";
			include_once 'footer.php';
		} else {
			unset( $_POST['submit'] );
			if ( isset( $_SESSION[$page]['results'] ) ) {
				$_POST = array_merge( $_SESSION[$page]['results'], $_POST );
			}
			$_SESSION[$page]['results'] = $_POST;
			$correct = 0;
			$wrong = array();
			foreach ( $this->items as $item ) {
				$number = array_search( $item, $this->allItems );
				if ( !isset( $_POST["i$number"] ) || !$item->answerIsCorrect( $_POST["i$number"] ) ) {
					array_push( $wrong, $item );
				}
			}
			if ( empty( $wrong ) ) {
				echo "\n\t<h3 class='complete'>Congratulations, test complete!</h3>";
				include_once 'footer.php';
				unset( $_SESSION[$page] );
			} else {
				echo "\n\t<h3 class='corrections'>Please do your corrections.</h3>\n";
				$_SESSION[$page]['items'] = $wrong;
				$this->init( $wrong );
				$this->start();
			}
		}
	}
}

?>