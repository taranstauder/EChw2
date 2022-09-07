<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/handlepost.php":
			$CURRENT_PAGE = "Page 2"; 
			$PAGE_TITLE = "Homework 2";
			break;
		case "/page3.php":
			$CURRENT_PAGE = "Page 3"; 
			$PAGE_TITLE = "Homework 2";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Homework 2";
	}
?>
