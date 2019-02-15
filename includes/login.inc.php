<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    // $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$fromUser', '$toUser', '$message', '$date')";
    $query = "SELECT email, password, name from ms_users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
    if($row === 0){
        header('Location: index.php?page=loginFail');
    }elseif($result){
        $_SESSION["user"] = $email;
        // echo $_SESSION["user"];
        header('Location: index.php?page=loginConfirm');
    }

?>