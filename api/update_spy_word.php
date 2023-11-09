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
$sequential = "non";

$word_food_new = "";
$word_place_new = "";
$word_things_new = "";
$word_job_new = "";
$word_every_new = "";

$word_food_en_new = "";
$word_place_en_new = "";
$word_things_en_new = "";
$word_job_en_new = "";
$word_every_en_new = "";

include('word_food_help.php');
include('word_place_help.php');
include('word_things_help.php');
include('word_job_help.php');
include('word_every_help.php');

include('word_food_en_help.php');
include('word_place_en_help.php');
include('word_things_en_help.php');
include('word_job_en_help.php');
include('word_every_en_help.php');


$type = $_GET["type"];

$number = $_GET["number"];



if ($type == "place") {

    $sequential = $word_place_new[$number];

} else if ($type == "place_en") {

    $sequential = $word_place_en_new[$number];

} else if ($type == "food") {

    $sequential = $word_food_new[$number];

} else if ($type == "food_en") {

    $sequential = $word_food_en_new[$number];

} else if ($type == "things") {

    $sequential = $word_things_new[$number];

} else if ($type == "things_en") {

    $sequential = $word_things_en_new[$number];

} else if ($type == "job") {

    $sequential = $word_job_new[$number];

} else if ($type == "job_en") {

    $sequential = $word_job_en_new[$number];

} else if ($type == "every") {

    $sequential = $word_every_new[$number];

}else if ($type == "every_en") {

    $sequential = $word_every_en_new[$number];

}

//echo $type.": ",  json_encode($sequential);
echo json_encode(array($type => $sequential), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//echo  json_encode($sequential );


mysqli_close($conn);


?>
