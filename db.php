<?php

$dbhost = "internship.test";
$dbuser = "root";
$dbpass = "";
$dbname = "tic_tac_toe";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
    die("failed to connect");
}
