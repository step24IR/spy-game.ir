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


$user_rate_question= 0;
$user_rate_first = 0;
$user_rate_end = 0;
$rate_first = 0;
$rate_end = 0;
$rate_question= 0;

$question_id = $_GET['question_id'];
$first_user_id = $_GET['first_user_id'];
$rate_first = $_GET['rate_first'];
$cate_id = $_GET['cate_id'];
$end_user_id = $_GET['end_user_id'];
$rate_end = $_GET['rate_end'];



//post rate_user_on_question

$sql_get_rate_question = "SELECT * FROM rate_user_on_question
                WHERE question_id =  '$question_id' ";

$result_question = $conn->query($sql_get_rate_question);

//echo "ok:". $result_question->num_rows;

if ($result_question->num_rows > 0) {

    while ($row = mysqli_fetch_array($result_question)) {
        $user_rate_question = $row['rate_question'];
        $rate_question = $rate_end + $user_rate_question;
    }

    //update
    $sql_question = "UPDATE rate_user_on_question SET  rate_question ='$rate_question' 
                         WHERE question_id  = " . $question_id  ;
    $conn->query($sql_question);

//    echo "UPDATE";

} else {

    //insert

    $sql_first = "INSERT INTO rate_user_on_question (user_id, question_id, rate_question)
    VALUES ('$end_user_id', '$question_id','$rate_end')";
    $conn->query($sql_first);

//    echo "insert";

}






//user-first

$sql_get_rate = "SELECT * FROM rate_user_on_cate
                WHERE user_id = " . $first_user_id . " AND cate_id = '$cate_id'";

$result_first = $conn->query($sql_get_rate);


if ($result_first->num_rows > 0) {
    while ($row = mysqli_fetch_array($result_first)) {
        $user_rate_first = $row['user_rate'];
        $rate_first = $rate_first + $user_rate_first;
    }

    //update

    $sql_first = "UPDATE rate_user_on_cate SET  user_rate ='$rate_first' 
                         WHERE user_id = " . $first_user_id . " AND   cate_id  = '$cate_id'";
    $conn->query($sql_first);

    } else {

        //insert


        $sql_first = "INSERT INTO rate_user_on_cate (cate_id, user_id, user_rate)
    VALUES ('$cate_id', '$first_user_id','$rate_first')";
        $conn->query($sql_first);

    }


//user_end


$sql_get_rate_end = "SELECT * FROM rate_user_on_cate
                WHERE user_id = " . $end_user_id . " AND   cate_id  = '$cate_id'";

$result_end = $conn->query($sql_get_rate_end);

if ($result_end->num_rows > 0) {
    while ($row_end = mysqli_fetch_array($result_end)) {
        $user_rate_end = $row_end['user_rate'];
        $new_rate_end = $rate_end + $user_rate_end;
    }


    //update

   $sql_first = "UPDATE rate_user_on_cate SET  user_rate ='$new_rate_end'
                         WHERE user_id = " . $end_user_id . " AND cate_id = '$cate_id'";
    $conn->query($sql_first);

} else {

    //insert


    $sql_end = "INSERT INTO rate_user_on_cate (cate_id, user_id,have_question, user_rate) 
VALUES ('$cate_id', '$end_user_id', 0 ,'$rate_end')";
    $conn->query($sql_end);


}


$sql_rate = "UPDATE Questions SET  rate  ='$new_rate_end'
                         WHERE id = " . $question_id ;
$conn->query($sql_rate);


//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data = array(
    "rate_first" => "$rate_first",
)
);


mysqli_close($conn);


?>
