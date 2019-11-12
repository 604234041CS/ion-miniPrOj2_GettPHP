<?php
// header('Access-Control-Allow-Origin: *');
// //header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
// header('Content-Type: application/json; charset=UTF-8');
// include"config.ini.php";
// $contenata = file_get_contents("php://input");
// $getdata = json_decode($contenata);

// $user = $getdata->user;
// $pass= $getdata->pass;

// $sql = "SELECT * FROM member WHERE username = '$user' AND password = '$pass'";
// $result = mysqli_query($con,$sql);
// $numrow = mysqli_num_rows($result);

// if($numrow == 1){
//     $arr = array();
//     while($row = mysqli_fetch_assoc($result)){
//         $arr[] = $row;
//     }

//     echo json_encode($arr);
//     mysqli_close($con);

// }else{
//     echo json_decode(null);
// }

// // $p = file_get_contents("php://input");
// // $postData = json_decode($p);
// // $u = $postData->username;
// // $p = $postData->password;
// // $query = "SELECT * FROM member WHERE username = '$u' AND pasword = '$p'";
// // $result = $conn ->query($query);
// // $num = mysqli_num_rows($result);
// // $arr = array();
// // if($num > 0){
// //     while($row = mysqli_fetch_assoc($result)){
// //         $arr[] = $row;
// //     }
// //     echo json_encode($arr);
// // } else{
// //     echo json_encode(null);
// // }


header("Access-Control-Allow-Origin: *");
header("Content-type:application/json; charset=UTF-8");
include("config.ini.php");


$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

$user = $getdata->user;
$pass = $getdata->pass;

$sql = "SELECT * FROM member WHERE mem_use = '$user' AND mem_pass = '$pass' ";
$result = mysqli_query($con,$sql);
$numrow = mysqli_num_rows($result);

if($numrow == 1){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row; 
    }
    echo json_encode($arr);
    mysqli_close($con);
}else{
    echo json_encode(null);
}

?>

