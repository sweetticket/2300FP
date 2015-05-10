<?php
	$nameErr = $emailErr = $subjectErr = $messageErr = "";
	$name = $email = $subject = $message = $success = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Validate name
	   	if (empty($_POST["contactName"])) {
	    	$nameErr = "Name is required";
	   	} else {
	     	$name = checkInput($_POST["contactName"]);
	     	if (preg_match("^([ \u00c0-\u01ffa-zA-Z'\-])+$", $name)) {
	       		$nameErr = "Please enter a valid name"; 
	    	}
	   	}
	   	// Validate email
	   	if (empty($_POST["contactEmail"])) {
	    	$emailErr = "Email address is required";
	   	} else {
	     	$email = checkInput($_POST["contactEmail"]);
	     	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	       		$emailErr = "Invalid email format"; 
			}
		}
		// Validate subject
		if (empty($_POST["contactSubject"])) {
	    	$subjectErr = "Subject is required";
	   	} else {
	     	$subject = checkInput($_POST["contactSubject"]);
		}
		// Validate comment
		if (empty($_POST["message"])) {
	     	$messageErr = "Please enter a message";
		} else {
	     	$message = checkInput($_POST["message"]);
	 	}
	}

	function checkInput($data) {
		$data = trim($data);
	   	$data = stripslashes($data);
	   	$data = htmlspecialchars($data);
	   	return $data;
	}
?>