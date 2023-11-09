<?php


define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
//require_once "database.php";
header('Content-Type: application/json;charset=utf-8');

$servername = "localhost";
$username = "ringtone_98diha";
$password = "PehQyrhr8gh4";
$dbname = "ringtone_98diha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$code = 0;
$mony = 0;
$plus = 0;


$id = $_GET["id"];
$plus = $_GET["plus"];


if ($id > 0) {

    //type is code and send mony , reset mony


    $sql = "SELECT * FROM getCode_Mony WHERE id = " . $id;;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $mony = $row["mony"];
        }
    } else {
//    echo "0 results";
    }


    $code = $id;

    if ($plus > 0) {

        $mony  = $mony + $plus;

        $sql = "UPDATE getCode_Mony set mony = " . $mony . " WHERE id = " . $id;
        $conn->query($sql);

        $mony = 0 ;



    } else {

        $sql = "UPDATE getCode_Mony set mony = 0 WHERE id = " . $id;
        $conn->query($sql);

    }


} else {


    $sql = "INSERT INTO getCode_Mony (code, mony) VALUES ('0', '0')";

    if ($conn->query($sql) === TRUE) {
        $code = $conn->insert_id;
    }

    $mony = 0;
}


$arry_data = array(
    "code" => $code,
    "mony" => $mony
);

//echo json_encode(array($type=> $sequential), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo json_encode($arry_data);


mysqli_close($conn);


?>
