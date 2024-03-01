<?php

// Basic connection settings
$databaseHost = 'localhost';
$databaseUsername = 'cesi'; 
$databasePassword = 'isec';
$databaseName = 'meteo';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 