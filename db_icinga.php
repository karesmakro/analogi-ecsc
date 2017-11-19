<?php
/*
 * Copyright (c) 2012 Andy 'Rimmer' Shepherd <andrew.shepherd@ecsc.co.uk> (ECSC Ltd).
 * This program is free software; Distributed under the terms of the GNU GPL v3.
 */

define ('DB_USER_I', 'icinga');
define ('DB_PASSWORD_I', 'icinga');
define ('DB_HOST_I', '127.0.0.1');
define ('DB_NAME_I', 'icinga');

$db_icinga = mysqli_connect (DB_HOST_I, DB_USER_I, DB_PASSWORD_I) OR die ('Could not connect to SQL : ' . mysqli_error() );
mysqli_select_db (DB_NAME_I, $db_icinga) OR die ('Could not select the database : ' . mysqli_error() );

?>
