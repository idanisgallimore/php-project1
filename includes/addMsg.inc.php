<?php 
    // $fromUser = $_GET['fromWhom'];
    include_once("library/getName.php");
    $name = getName($_SESSION["user"]);
    $toUser = $_GET['user'];
    $message = $_GET['message'];
    $date = $_GET['date'];
    
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$name', '$toUser', '$message', '$date')";
    $result = mysqli_query($con, $query);
    if($result){
        echo "It worked";
    }else{
        echo mysqli_error($con);
    }
?>