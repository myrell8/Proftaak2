<?php
	$field_name = $_POST['cf_name'];
	$field_email = $_POST['cf_email'];
	$field_subject = $_POST['cf_subject'];
	$field_message = $_POST['cf_message'];

	$mail_to = 'myrell-spam@outlook.com';
	$subject = $field_subject.' by: '.$field_name;

	$body_message = 'From: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Message: '.$field_message;

	$headers = 'From: '.$field_email."\r\n";
	$headers .= 'Reply-To: '.$field_email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_status) { ?>
		<script language="javascript" type="text/javascript">
			alert('Thank you for your ticket. We will contact you shortly.');
			window.location = '../index.php';
		</script>
	<?php
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Failed to send email. Try mailing myrell-spam@outlook.com for help');
			window.location = '../index.php';
		</script>
	<?php
	}
?>