/* Functions for form validation */


/* This function was borrowed from INFO 2300 lecture notes */
function msg(id,message) {

	//var node = document.getElementById(id);
	
	if (trim(message) == "") {
		/* Set message to non-breakable space */
		message = String.fromCharCode(160);
	}	
	//node.firstChild.nodeValue = message;
	$("#"+id).text(message);
}

/* This function was borrowed from INFO 2300 lecture notes */
function trim(str)
{
  return str.replace(/^\s+|\s+$/g, '')
};

// add more functions for specific form fields