<?php
/*
 * Copyright (c) 2012 Andy 'Rimmer' Shepherd <andrew.shepherd@ecsc.co.uk> (ECSC Ltd).
 * This program is free software; Distributed under the terms of the GNU GPL v3.
 */

define ('DB_USER_O', '');
define ('DB_PASSWORD_O', '');
define ('DB_HOST_O', '127.0.0.1');
define ('DB_NAME_O', '');

$db_ossec = mysqli_connect (DB_HOST_O, DB_USER_O, DB_PASSWORD_O) OR die ('Could not connect to SQL : ' . mysqli_error() . "<br/>Click <a href='' onclick='document.cookie=\"ossecdbjs=;expires=Thu, 01 Jan 1970 00:00:00 GMT\"' >HERE</a> to select your main OSSEC DB");

mysqli_select_db (DB_NAME_O, $db_ossec) OR die ('Could not select the database : ' . mysqli_error() . "<br/>Click <a href='' onclick='document.cookie=\"ossecdbjs=;expires=Thu, 01 Jan 1970 00:00:00 GMT\"' >HERE</a> to select your main OSSEC DB");

?>
