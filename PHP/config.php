<?php

/**
  * Configuration for database connection
  *
  */

$host       = "13.69.58.26";
$username   = "flo";
$password   = "password";
$dbname     = "ccsp"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>
