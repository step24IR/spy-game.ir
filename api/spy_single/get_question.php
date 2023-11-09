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
$seq ="non";
$sequential ="non";
$type="";
$questions_answer="";


include('qustions/questions_file.php');


$level = $_GET["level"];
$type = $_GET["type"];



$seq = $questions_answer[$type];
$sequential = $seq[$level];
//$sequential = $new_question[$level];


$sql = "SELECT * FROM download_app WHERE id= 8";
$result = $conn->query($sql);

$number_Download = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $number_Download = $row["counter"];
    }
}
$number_Download += 1;

$sql = "UPDATE download_app SET counter='$number_Download' WHERE id= 8";

$conn->query($sql);

//echo $type.": ",  json_encode($sequential);

//echo  $level;
//echo  json_encode($type);
echo json_encode($sequential, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

mysqli_close($conn);



?>
