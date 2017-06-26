<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "banco_scientia";
$show_modal = false;
//$port = 3306;

$con = mysqli_connect("localhost", "root", "", "banco_scientia") or die("Error " . mysqli_error($con));