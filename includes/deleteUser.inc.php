<?php 
    $user = $_SESSION["user"];
    // Idanis - Change line and add siteground stuff
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    // --------------------------------------------------
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