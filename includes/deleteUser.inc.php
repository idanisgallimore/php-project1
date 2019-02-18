<?php 
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
//-------------------
    $user = $_SESSION["user"];
    $user = htmlspecialchars($user);
    $query = "DELETE from ms_users WHERE email = '$user'";
    $result = mysqli_query($con, $query);
    if($result){
        session_unset();
        session_destroy();
        header('Location: index.php?page=loginPage');
    }else{
        // echo mysqli_error($con);
        header('Location: index.php?page=dltFailed');
    }

?>