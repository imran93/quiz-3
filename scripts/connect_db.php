<?php

$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "139996";
// Place the password for the MySQL database here
$db_pass = "Hbv776677";
// Place the name for the MySQL database here
$db_name = "139996";

// Run the connection here
mysql_connect("$db_host","$db_username","$db_pass") or die (mysql_error());
mysql_select_db("$db_name") or die ("no database");

?>
