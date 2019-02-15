<?php 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

// echo strlen($password);
// echo $name." ". $email." ".$password;

$badUser = 0;
if(strlen($password) < 5){
    header('Location: index.php?page=password');
    $badUser = 1;
}elseif($name === "" || $email === "" || $password === ""){
    header('Location: index.php?page=blank');   
    $badUser = 1;
}
// ensure that user does not exist in the db 
$con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
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
        header('Location: index.php?page=confirmation');
    }
}
?>