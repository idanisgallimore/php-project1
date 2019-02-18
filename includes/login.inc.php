<?php 
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$fromUser', '$toUser', '$message', '$date')";
    $query = "SELECT email, password, name from ms_users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
    if($row === 0){
        header('Location: index.php?page=loginFail');
    }elseif($result){
        $_SESSION["user"] = $email;
        // echo $_SESSION["user"];
        header('Location: index.php?page=dashboard');
    }

?>