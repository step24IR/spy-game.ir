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
$pagination = $_GET['pagination'];

//determine which page number visitor is currently on
//if (!isset ($_GET['pagination']) ) {
//    $pagination = 1;
//} else {
//    $pagination = $_GET['pagination'];
//}


$results_per_page = 10;

$questions = array();


$sql = "SELECT * FROM Questions WHERE cate_id='$cate_id' AND user_id ='$user_id'";
$result = $conn->query($sql);



$number_of_result = mysqli_num_rows($result);


//determine the total number of pages available
$number_of_page = ceil ($number_of_result / $results_per_page);


//determine the sql LIMIT starting number for the results on the displaying page
$page_first_result = ($pagination-1) * $results_per_page;

//echo $result->num_rows;



$sql_end = "SELECT * FROM Questions WHERE cate_id='$cate_id' AND user_id ='$user_id' LIMIT "
    . $page_first_result . ' , ' . $results_per_page;
$result_end = $conn->query($sql_end);




if ($result_end->num_rows > 0) {


    while ($row = mysqli_fetch_array($result_end)) {

            //get question
            array_push($questions, $row);
    }
}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($questions);


mysqli_close($conn);


?>
