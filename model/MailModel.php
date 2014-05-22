<?php

require_once('..\util\PHPMailerAutoload.php');

class MailModel 
{
	private $mail;
	function __construct()
	{	
		$this->mail = new PHPMailer;
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = 'smtp.gmail.com';  // Specify main and backup server
		$this->mail->Port = 587;
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = 'noreply.internship.eshop@gmail.com';                            // SMTP username
		$this->mail->Password = 'wysiwyg.002';                           // SMTP password
		$this->mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$this->mail->From = 'noreply.internship.eshop@gmail.com';
		$this->mail->FromName = 'No-Reply E-Shop';
		
	}
	function sendMailData($addresses,$subject,$body,$altbody)
	{
		$countAddress = count($addresses);
		for($i=0;$i<$countAddress;$i++)
		{
			$this->mail->addAddress($addresses[$i]);  // Adding recipients
		}
		$this->mail->Subject = $subject;
		$this->mail->Body    = $body;
		$this->mail->AltBody = $altbody;
		if(!$this->mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $this->mail->ErrorInfo;
			return false;
		}
		return true;
	}
	function sendAttachedMail($attachment,$addresses,$subject,$body,$altbody)
	{
		$countAttachment = count($attachment);
		for($i=0;$i<$countAttachment;$i++)
		{
			$this->mail->addAttachment($attachment[$i]);
		}
		$this->sendMailData($addresses,$subject,$body,$altbody);
	}
}

?>