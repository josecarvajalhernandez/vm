<?php
require('app/config/database.php');

$link = conexion();
$folder;

function queryOneDataExist($tuple,$value,$result)
{
	global $link;
	global $folder;

	$query 	= " SELECT $result FROM $folder WHERE {$tuple} = '{$value}' ";
	$data   = mysqli_query($link, $query);
	
	if(mysqli_num_rows($data) !== 0)
	{	
		$row = mysqli_fetch_assoc($data);
		$res = $row[$result];	
		
		return $res;
	}
	else
	{
		return FALSE;
	}	
}

function NewContact($name,$email,$message)
{
	global $link;
	
	$query 	  = "INSERT INTO contacts(name,email)VALUES('{$name}','{$email}')";
	$data     = mysqli_query($link, $query);
	$contacts = mysqli_insert_id($link);
	
	SaveMessage($contacts,$message);
}
