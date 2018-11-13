<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$phonenumber = trim($_POST["phonenumber"]);
		$reason = trim($_POST["reason"]);
		$employment = trim($_POST["employment"]);
		$length = trim($_POST["lengthofjob"]);
		$salary = trim($_POST["salary"]);
        // Check that data was sent to the mailer.
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)  OR empty($reason) OR empty($phonenumber) OR empty($employment) OR empty($length) OR empty($salary)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form completely and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "rmerino@socalrealty.biz";

        // Set the email subject.
        $subject = "$name has completed the form on SoCalrealty.biz";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
		$email_content .= "Phone Number: $phonenumber \n\n";
		$email_content .= "Reason for submitting the form: \t $reason\n\n";
		$email_content .= "Is this person employed?: \t $employment \n\n";
		$email_content .= "I have current been at my job for: \t $length \n\n";
		$email_content .= "I currently make: \t $salary \n\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
