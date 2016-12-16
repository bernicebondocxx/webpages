<html>
<head>
<title>Mail</title>
</head>
<body>

<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$contactnum = $_REQUEST['contactnum'];
$comments = $_REQUEST['comment'];


$sent = mail("bondocbernice@gmail.com", "Feedback Form Submission", $comments, "From $firstname $lastname by $email contact $contactnum");

?>

<script>
		 
  	window.alert("Thank You for leaving a message!");
	if(confirm("Would you like to go back to the home page?") == true){
			document.location.href = "index.html";
	}
	else{
		document.location.href = "contact.html";
	}

	
</script>


</body>