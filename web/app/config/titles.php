<?php
$file = basename($_SERVER['PHP_SELF']);
if($file == 'clients.php') $title = 'clientes';
elseif($file == 'contacts.php') $title = 'contacto';
elseif($file == 'services.php') $title = 'servicios';
elseif($file == 'portfolio.php') $title = 'portafolio';
else $title = 'VerdeMagenta';