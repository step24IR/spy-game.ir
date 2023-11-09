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
//$question_id=-1;

$question_id = $_GET['question_id'];
$cate_id = $_GET['cate_id'];
$user_id = $_GET['user_id'];
$question = $_GET['question'];
$help = $_GET['help'];
$option1 = $_GET['option_1'];
$answer_1 = $_GET['answer_1'];
$option2 = $_GET['option_2'];
$answer_2 = $_GET['answer_2'];
$option3 = $_GET['option_3'];
$answer_3 = $_GET['answer_3'];
$option4 = $_GET['option_4'];
$answer_4 = $_GET['answer_4'];

$value0 = 0;
$value1 = 1;

$count=0;
$count2=0;


$sql = "SELECT * FROM Questions WHERE id='$question_id'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {

//    $count++;
    //update
    $sql_up = "UPDATE Questions set question = '$question', help = '$help'
                   , option_1 = '$option1' , option_2 = '$option2' , option_3 = '$option3', option_4 = '$option4'
                       WHERE id='$question_id'";
    $conn->query($sql_up);

} else {

    $count++;

    $sql_in = "INSERT INTO Questions (cate_id, user_id, question, help, option_1, answer_1, 
                       option_2, answer_2 ,option_3, answer_3, option_4, answer_4)

                       VALUES ('$cate_id', '$user_id', '$question', '$help', '$option1', '$answer_1',
                               '$option2', '$answer_2' ,'$option3', '$answer_3', '$option4', '$answer_4')";
    $conn->query($sql_in);

}






    $sql_s = "SELECT * FROM rate_user_on_cate WHERE user_id='$user_id' AND cate_id='$cate_id'";
    $res_s = mysqli_query($conn, $sql_s);

    if (mysqli_num_rows($res_s) > 0) {

        //update
//        $count2++;
        $sql_u = "UPDATE rate_user_on_cate set have_question = '$value1' WHERE user_id='$user_id' AND cate_id='$cate_id'";
        $conn->query($sql_u);

    } else {

//        $count2++;
        $sql_i = "INSERT INTO rate_user_on_cate (cate_id, user_id, have_question, user_rate) 
VALUES ('$cate_id', '$user_id', '$value1' , '0')";
        $conn->query($sql_i);

    }

    $arry_data = array(
        "count" => $count,
        "count2" => $count2,
        "status" => "true",
    );




//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data);


mysqli_close($conn);


?>
