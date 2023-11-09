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

global $post;
global $sitepress;

$number = 0;
$sequential ="non";
$folders_question="";


include('folders_question.php');



$type = $_GET["type"];


$sequential = $folders_question[$type];
//$sequential = $new_question[$level];


//echo $type.": ",  json_encode($sequential);

//echo  $level;
//echo  json_encode($sequential);
echo json_encode($sequential, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

mysqli_close($conn);



?>
