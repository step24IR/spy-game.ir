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
$password = $_GET["password"];

$sql_u = "SELECT * FROM Users WHERE username='$username' OR number='$username'";
$result = $conn->query($sql_u);


//fetch result
//$user = mysqli_num_rows($res_u) ;

if ($result->num_rows > 0) {


//    $result = mysql_query($sql_u) or die(mysql_error());


    $row = $result->fetch_assoc();


    $pass_database = $row['password'];

    if ($pass_database == $password) {

        $arry_data = array(
            "status" => "true",
            "user_id" => $row['id'],
            "message" => "ورود موفق"
        );

    } else {

        $arry_data = array(
            "status" => "false",
            "message" => "پسورد اشتباه"
        );

    }

} else {

    $arry_data = array(
        "status" => "false",
        "message" => "نام کاربری اشتباه"
    );
}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data);


mysqli_close($conn);


?>
