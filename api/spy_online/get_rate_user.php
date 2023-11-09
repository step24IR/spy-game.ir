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

$user_rate = 0;

$user_id = $_GET['user_id'];
$cate_id = $_GET['cate_id'];

//user-first

$sql_get_rate = "SELECT * FROM rate_user_on_cate
                WHERE user_id = " . $user_id . " AND cate_id = '$cate_id'";

$result_first = $conn->query($sql_get_rate);



if ($result_first->num_rows > 0) {
    while ($row = mysqli_fetch_array($result_first)) {
        $user_rate = $row['user_rate'];

    }

}

//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data = array(
    "user_rate" => "$user_rate",
)
);


mysqli_close($conn);


?>
