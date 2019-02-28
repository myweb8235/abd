<?php 

		$name=$_POST["name"];
		$visitor_email=$_POST["email"];
		$message=$_POST["message"];




		$email_from="personalemail8235@gmail.com";
		$email_subject="new form submission";
		$email_body="user name:$name.\n".
					"user Email:$visitor_email.\n"
					"user message:$message";


					$to="onlineairmy@gmail.com";

					$headers="from: $email_from \r\n";
					$headers .="reply-to:visitor_email \r\n";



					mail($to,$email_subject,$email_body,$headers);


					header("Location:index.html");


 ?>