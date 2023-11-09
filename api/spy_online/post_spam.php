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



$value0 = 0;
$value1 = 1;


$user_rate_first = 0;
$user_rate_end = 0;
$rate_first = 0;
$rate_end = 0;


$hunter_user_id = $_GET["hunter_user_id"];
$question_id = $_GET["question_id"];

$user_id = $_GET["user_id"];
$cate_id = $_GET["cate_id"];


// Create database

$sql_exist = "SELECT * FROM spam_question WHERE question_id='$question_id' AND hunter_user_id = '$hunter_user_id'";
$res_exist = $conn->query($sql_exist);

if (!$res_exist->num_rows > 0){

    $sql = "INSERT INTO spam_question (hunter_user_id , question_id)

                       VALUES ('$hunter_user_id', '$question_id')";

    if ($conn->query($sql) === TRUE) {
        echo "successfully";
    } else {
        echo "Error" . $conn->error;
    }

}



//check for delete if spam > 5

$sql_s = "SELECT * FROM spam_question WHERE question_id='$question_id' ";

$res_s = $conn->query($sql_s);


echo $res_s->num_rows;

//spam > 5
if ($res_s->num_rows > 0) {


    //  negation rate_user_on_cate   .this question

    $sql_get_rate = "SELECT * FROM rate_user_on_cate
                WHERE user_id = " . $user_id . " AND cate_id = '$cate_id'";

    $result_first = $conn->query($sql_get_rate);

    if ($result_first->num_rows > 0) {

        //get rate on question

        $sql_get_rate_question = "SELECT rate_question FROM rate_user_on_question
                WHERE question_id = " . $question_id ;
        $result_rate_question = $conn->query($sql_get_rate_question);

        if ($result_rate_question->num_rows > 0) {

            while ($row = mysqli_fetch_array($result_first)) {
                $user_rate_first = $row['user_rate'];
                $rate_first = $rate_first - $result_rate_question;
            }

        }else{

            while ($row = mysqli_fetch_array($result_first)) {
                $user_rate_first = $row['user_rate'];
                $rate_first = $rate_first - 3;
            }
        }



        //update

        $sql_first = "UPDATE rate_user_on_cate SET  user_rate ='$rate_first' 
                         WHERE user_id = " . $user_id . " AND   cate_id  = '$cate_id'";
        $conn->query($sql_first);

    }


    //and remove question

// sql to delete a record
    $sql_delete = "DELETE FROM Questions WHERE id='$question_id'";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }


//and check have_question ?

    $sql_rate = "SELECT * FROM Questions
                WHERE user_id = " . $user_id . " AND cate_id = '$cate_id'";

    $result_rate = $conn->query($sql_rate);

    if ($result_rate->num_rows == 0) {

        $sql_u = "UPDATE rate_user_on_cate set have_question = '$value0' WHERE user_id='$user_id' AND cate_id='$cate_id'";
        $conn->query($sql_u);


    }


//        }


}


//echo json_encode($sequential, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

mysqli_close($conn);


?>
