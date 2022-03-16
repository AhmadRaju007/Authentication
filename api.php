<?php
header("Content-Type:application/json");

if (isset($_GET['username']) && $_GET['username'] != "") {                  //checks username
    include('connection.php');                                              //establishes connection
    $conn= connect();
    $username = $_GET['username'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?"); //prepare db statement
    $stmt->execute([$username]);

    if($stmt->fetch()){                                       //username is found
        response($username, 200, "Success");    //responds success
        $conn= null;
    } else{                                                   //username is not found
        response(NULL, 200,"No Record Found");
    }
} else{
    response(NULL, 400,"Invalid Request");
}

function response($username, $status, $message){            //used for response
    $response['username'] = $username;
    $response['status'] = $status;
    $response['message'] = $message;

    $json_response = json_encode($response);                //response provided as json encoded form
    echo $json_response;
}
?>