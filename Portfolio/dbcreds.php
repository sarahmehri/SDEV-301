<?php
//connecting to database
$database = "smehrigr_grc";
$username = "smehrigr_grcuser";
$password = "Nia@2015";
$hostname = "localhost";
$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem.");