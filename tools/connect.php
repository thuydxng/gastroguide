<?php
error_reporting (E_ALL | E_STRICT);  
ini_set ('display_errors', 'On');
$db_host = 'db2017.bui.haw-hamburg.de';
$db_password = 'thochhlt910';
$db_user = 'bim1_11';
$db_name_database = 'bim1_11'; 
$dbm = new mysqli( $db_host, $db_user,$db_password,$db_name_database);
$dbm->set_charset('utf8');
  if (mysqli_connect_errno() != 0)
	{
		die('Fehler bei Verbindungsaufbau: '.mysqli_connect_error().'  
            (Fehlercode: '.mysqli_connect_errno().')');
	}

