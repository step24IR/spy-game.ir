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

//$result = mysql_query("SELECT * FROM Category");

$user_id = $_GET['user_id'];
$cate_id = $_GET['cate_id'];


$sql = "SELECT * FROM Questions WHERE cate_id='$cate_id' AND user_id ='$user_id'";
$result = $conn->query($sql);

$questions = array();

//echo $result->num_rows;


if ($result->num_rows > 0) {


    while ($row = mysqli_fetch_array($result)) {

            //get question
            array_push($questions, $row);
    }
}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($questions);


mysqli_close($conn);


?>
