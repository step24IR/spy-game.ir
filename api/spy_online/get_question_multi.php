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

//$first_user_id = $_GET['first_user_id'];
//$end_user_id = $_GET['end_user_id'];
$category_id = $_GET['cate_id'];


$sql = "SELECT * FROM Questions WHERE cate_id='$category_id' ORDER BY RAND()
   LIMIT 6";

$result = $conn->query($sql);

$questions = array();

//echo $result->num_rows;


if ($result->num_rows > 0) {


//    echo $result->num_rows ;

    while ($row = mysqli_fetch_array($result)) {


      /*  $sql_check_exist = "SELECT * FROM answer_user_question
                WHERE question_id = " . $row['id'] . " AND  user_id = '$first_user_id'";

        $result_check = $conn->query($sql_check_exist);*/

//        if (!$result_check->num_rows > 0) {

            //get question

            array_push($questions, $row);


            //and insert to answer_user_question

//            $quest_id = $row['id'];

           /* $sql_insert = "INSERT INTO answer_user_question (user_id , question_id)
VALUES ('$first_user_id', '$quest_id')";
            $conn->query($sql_insert);*/

        /*    break;

        }*/


    }
}


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($questions);


mysqli_close($conn);


?>
