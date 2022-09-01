<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "Page 2"; 
			$PAGE_TITLE = "Page 2";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Page 3"; 
			$PAGE_TITLE = "Page 3";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Homework 2";
	}
?>
