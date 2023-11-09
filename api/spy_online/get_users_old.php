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

$category_id = $_GET['category_id'];

$value=1;

$sql = "SELECT * FROM rate_user_on_cate WHERE cate_id='$category_id' AND have_question='$value' ORDER BY user_rate DESC";
$result = $conn -> query($sql);

$users = array();



if ($result->num_rows > 0) {


    $storeArray = Array();
    while ($row = mysqli_fetch_array($result)) {
//        echo $row['user_id'];

        $sql_user = "SELECT * FROM Users  WHERE id = ". $row['user_id'];
        $result_user = $conn -> query($sql_user);
        $row_user = mysqli_fetch_array($result_user);

        array_push($users, [
            "user_id"=>$row_user['id'] ,
            "username"=> $row_user['username'] ,
            "user_rate"=> $row['user_rate']]);
    }


}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($users);


mysqli_close($conn);


?>
