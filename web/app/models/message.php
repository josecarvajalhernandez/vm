<?php

function SaveMessage($contacts,$message)
{	
	global $link;
	
	$date 	= date("Y-m-d H:i:s");
	
	$query 	= " INSERT INTO message VALUES(NULL,'{$contacts}','{$message}','{$date}') ";
	$data 	= mysqli_query($link, $query);
}