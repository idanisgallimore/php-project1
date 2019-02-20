<?php 
// Connection to Db
require_once("library/connection.php");
$con = connectToDb();
//-------------------0
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']);
$password = htmlspecialchars($_REQUEST['password']);

// echo strlen($password);
// echo $name." ". $email." ".$password;

$badUser = 0;
if(strlen($password) < 5){
    header('Location: index.php?page=password');
    $badUser = 1;
}elseif($name === "" || $password === ""){
    header('Location: index.php?page=blank');   
    $badUser = 1;
}
if(empty($email)){
    echo "<div class=\"msg-container fail-msg-container\">
    <h2 class =\"fail-msg msg\">Email is blank. Please enter email.</i></h2>
    <a href=\"index.php?page=signup\" class=\"page-link\">Go back</a>
    </div>";
    $badUser = 1;
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<div class=\"msg-container fail-msg-container\">
    <h2 class =\"fail-msg msg\">Must enter a valid email</i></h2>
    <a href=\"index.php?page=signup\" class=\"page-link\">Go back</a>
    </div>";
    $badUser = 1;
}
// ensure that user does not exist in the db 
// $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$fromUser', '$toUser', '$message', '$date')";
$query = "SELECT * from ms_users WHERE email = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$email1 = $row['email'];
if($email === $email1){
    header('Location: index.php?page=extraUser');
    $badUser = 1; 
}
if(!$badUser == 1){
    $query = "INSERT INTO ms_users(name, email, password) VALUES('$name', '$email', '$password')";
    $result = mysqli_query($con, $query);
    if($result){
        $_SESSION["user"] = $email;
        header('Location: index.php?page=dashboard');
    }
}
?>