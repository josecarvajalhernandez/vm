<?php 
function textFieldEmail($name,$email,$message)
{
	if(($name == "")||($email == "")||($message == ""))
	{?>
		<script>
			alert('debes completar todos los campos de texto');
			self.location = "contacts.php";
		</script><?php 
	}
	else
	{	
		$emailOk = ValidateEmail($email);
		if(ValidateEmail($email) == TRUE)
		{
			return TRUE;
		}
		else
		{?>
			<script>
				alert('email invalido');
				self.location = "contacts.php";
			</script><?php 
		}	
	}	
}

function clear($data) 
{
  	$data = trim($data);
 	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

function ValidateEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
    	return TRUE;
	}
	else
	{
		return FALSE;
	}	
}