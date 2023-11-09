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


//define total number of results you want per page


$category_id = $_GET['category_id'];

//determine which page number visitor is currently on
if (!isset ($_GET['pagination']) ) {
    $page = 1;
} else {
    $page = $_GET['pagination'];
}

$results_per_page = 15;

$value1=1;

$sql = "SELECT * FROM rate_user_on_cate WHERE cate_id='$category_id' AND have_question='$value1'";
$result = $conn -> query($sql);


$number_of_result = mysqli_num_rows($result);


//determine the total number of pages available
$number_of_page = ceil ($number_of_result / $results_per_page);


//determine the sql LIMIT starting number for the results on the displaying page
$page_first_result = ($page-1) * $results_per_page;



$sql_m = "SELECT * FROM rate_user_on_cate WHERE cate_id='$category_id' AND have_question='$value1' 
                                ORDER BY user_rate LIMIT " . $page_first_result . ' , ' . $results_per_page;
$result_m = $conn -> query($sql_m);

//echo $result_m->num_rows;

$users = array();

if ($result_m->num_rows > 0) {

    $storeArray = Array();
    while ($row = mysqli_fetch_array($result_m)) {
//        echo $row['user_id'];



        $sql_user = "SELECT * FROM Users  WHERE id = ". $row['user_id'];
        $result_user = $conn -> query($sql_user);


        //retrieve the selected results from database
        $query_end = "SELECT * FROM Users  WHERE id = ". $row['user_id'] ;


//        echo $query_end;

        $result_end = $conn -> query($query_end);


        $row_end  = mysqli_fetch_array($result_end);




            array_push($users, [
                "user_id"=>$row_end['id'] ,
                "status"=> "off" ,
                "username"=> $row_end['username'] ,
                "user_rate"=> $row['user_rate']]);



    }


}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($users);


mysqli_close($conn);


?>
