<?php


define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
//require_once "database.php";
header('Content-Type: application/json;charset=utf-8');

$servername = "localhost";
$dbname = "ringtone_spyOnline";
$username = "ringtone_spy";
$password = "spy2145806S";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$update = false;


$username = $_GET["username"];
$number = $_GET["number"];
$password = $_GET["password"];


$sql = "INSERT INTO Users (username, number , password)
VALUES ('$username', '$number', '$password')";


if ($conn->query($sql) === TRUE) {

    $last_id = $conn->insert_id;

    $arry_data = array(
        "status" => "true",
        "user_id" => $last_id,
        "message" => "ثبت نام موفق"
    );

} else {
    $arry_data = array(
        "status" => "false",
        "message" => "خطا ناشناخته!"
    );

}


echo json_encode($arry_data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
//echo json_encode($arry_data);




mysqli_close($conn);



?>
