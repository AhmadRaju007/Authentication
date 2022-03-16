<?php
header("Content-Type:application/json");

if (isset($_GET['username']) && $_GET['username'] != "") {
    include('connection.php');
    $conn= connect();
    $username = $_GET['username'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);

    if($stmt->fetch()){
        response($username, 200, "Success");
        $conn= null;
    } else{
        response(NULL, 200,"No Record Found");
    }
} else{
    response(NULL, 400,"Invalid Request");
}

function response($username, $status, $message){
    $response['username'] = $username;
    $response['status'] = $status;
    $response['message'] = $message;

    $json_response = json_encode($response);
    echo $json_response;
}
?>