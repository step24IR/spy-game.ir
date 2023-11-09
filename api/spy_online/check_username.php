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



//get username from form
$username = $_GET['username'];
//prepare the statement

$sql_u = "SELECT * FROM Users WHERE username='$username'";
$res_u = mysqli_query($conn, $sql_u);


//fetch result
//$user = mysqli_num_rows($res_u) ;

if (mysqli_num_rows($res_u) > 0) {

    // username already exists
    $arry_data = array(
        "status" => "true",
        "message" => "نام کاربری تکراریست!"
    );


} else {

    // username does not exist
    $arry_data = array(
        "status" => "false",
        "message" => "تبریک"
    );
}




//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data);



mysqli_close($conn);



?>
