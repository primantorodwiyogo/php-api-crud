<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '';
$databaseName = '';
$databaseUsername = '';
$databasePassword = '';
 
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>