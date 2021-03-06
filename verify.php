<?php
  require_once('recaptchalib.php');
  $privatekey = "6LeaR-8SAAAAAKKJ2GVDKWivYhO4MtJchn-ETpiB ";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {


  	/* Functions we used */
	function check_input($data, $problem='')
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	{
	show_error($problem);
	}
	return $data;
	}

	function show_error($myError)
	{
	?>
	<html>
	<body>

	<p>Please correct the following error:</p>
	<strong><?php echo $myError; ?></strong>
	<p>Hit the back button and try again</p>

	</body>
	</html>
	<?php
	exit();
	}

    /* Set e-mail recipient */
	$myemail = "aosoto@gmail.com";

	/* Check all form inputs using check_input function */
	$name = check_input($_POST['inputName'], "Your Name");
	$email = check_input($_POST['inputEmail'], "Your E-mail Address");
	$subject = check_input($_POST['inputSubject'], "Message Subject");
	$message = check_input($_POST['inputMessage'], "Your Message");

	/* If e-mail is not valid show error message */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
	show_error("Invalid e-mail address");
	}
	/* Let's prepare the message for the e-mail */

	$subject = "Someone has sent you a message";

	$message = "

	Someone has sent you a message using your contact form:

	Name: $name
	Email: $email
	Subject: $subject

	Message:
	$message

	";

	/* Send the message using mail() function */
	mail($myemail, $subject, $message);

	/* Redirect visitor to the thank you page */
	header('Location: http://inspectnortheast.com/site/inspect-ne/');
	exit();

	
  }