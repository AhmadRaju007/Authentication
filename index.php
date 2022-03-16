<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirmation'])){
    $uName= $_POST['username'];
    $pass= $_POST['password'];
    $passConfirm= $_POST['password_confirmation'];

    if($pass === $passConfirm){
        include('connection.php');
        $conn= connect();

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $uName);
        $stmt->bindParam(':password', $pass);

        if($stmt->execute()){
            echo "Successfully Registered!";
            $conn= null;
        }
        else{
            echo "Connection not established!";
        }
    }
    else {
        echo "Passwords don't match!";
    }
}
?>

<html>
    <head>
        <title>Registration Form </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="POST" action="index.php">
            <div class="container reg">
                <h1> Registration form</h1>
                <hr>
                <div>
                    <label for="username">Your Userame<span>*</span></label>
                    <input name="username" id="username" type="text" placeholder="Enter Your Userame" required>
                </div>
                <div>
                    <label for="password">Password<span>*</span></label>
                    <input name="password" id="password" type="password" placeholder="Enter Your Password" required>
                </div>
                <div>
                    <label for="password_confirmation">Repeat Password<span>*</span></label>
                    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm your password" required>
                </div>
                <div style="text-align: center; padding: 20px;">
                    <input type="submit" class="btn btn-success" value="Submit" name="submit">
                </div>

            </div>
        </form>
    </body>
</html>
