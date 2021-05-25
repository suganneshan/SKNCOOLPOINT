<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sampleskn";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
