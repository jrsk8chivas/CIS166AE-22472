<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Your Feedback</title>
</head>

<body>
	<?php //Script 3.3 handle_form.php
		  //This page recieves data from feedback.html
		  //It will recieve: title, name, email, response, comments, and submit in $_POST
		  
		  //create shorthand versions of the variables:
		  $title = $_POST['title'];
		  $fname = $_POST['firstName'];
		  $lname = $_POST['lastName'];
		  $response = $_POST['response'];
		  $comments = $_POST['comments'];
		  
		  //print data:
		  print "<p>Thank you, $title $fname $lname, for your comments.</p>
		  		<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";
		  		
	?>	  
</body>
</html>
