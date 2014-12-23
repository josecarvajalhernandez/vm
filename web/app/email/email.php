<?php

function contactMe($message, $email)
{
	$to = "contacto@verdemagenta.cl";
	$subject = "message for VerdeMagenta";
	$txt = $message;
	$headers = 'From: '.$email. "\r\n";
	$headers .= 'Cc: jose.carvajal@verdemagenta.cl,carla.nk@verdemagenta.cl,c.godoy@verdemagenta.cl';
	
	mail($to,$subject,$txt,$headers);
}
