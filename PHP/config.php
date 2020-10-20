<?php

/**
  * Configuration for database connection
  *
  */

$host       = "192.168.0.173";
$username   = "alex";
$password   = "alex";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>