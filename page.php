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


$sent = mail("mfcataloge@gmail.com", "Feedback Form Submission", $comments, "From $firstname $lastname by $email contact $contactnum");

?>

<script>
		 
  	window.alert("Thank You for leaving a message!");
	if(confirm("Going back to page") == true){
			document.location.href = "index.html";
	}
	

	
</script> 

</body>
</html>