<?php 
include('app/config/titles.php');
include('app/views/contacts/header.php');

if(isset($_POST['envio']))
{
	include('app/validations/validations.php');
	include('app/email/email.php');

	$name 	 = clear($_POST['nombre']);
	$email	 = clear($_POST['email']);
	$message = clear($_POST['mensaje']);

	$textFieldFull  = textFieldEmail($name,$email,$message);
	if($textFieldFull == TRUE)
	{	
		include('app/config/models.php');
		include('app/models/message.php');

		$idContact = queryOneDataExist('email',$email,'id');

		if($idContact == FALSE)
		{
			NewContact($name,$email,$message);
		}
		else
		{
			SaveMessage($idContact,$message);
		}
		contactMe($message, $email);	
		include('app/views/contacts/sent.php');
	}
	else
	{	
		include('app/config/content.php');
	}	
}
else
{	
	include('app/config/content.php');
}