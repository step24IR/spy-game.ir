<?php


define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
//require_once "database.php";
header('Content-Type: application/json;charset=utf-8');

$servername = "localhost";
$username = "ringtone_98diha";
$password = "PehQyrhr8gh4";
$dbname = "ringtone_98diha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$update = false;


$version = $_GET["version"];


if ($version < 6.10) {
    $update = true;
} else  {
    $update = false;
}

//echo $type.": ",  json_encode($sequential);
echo $update;
//echo  json_encode($sequential );

mysqli_close($conn);



?>
