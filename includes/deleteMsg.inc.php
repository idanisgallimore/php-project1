<?php 
// Connection to Db
require_once("library/connection.php");
$con = connectToDb();
//-------------------
    $id = $_REQUEST['id'];
    $query = "DELETE  from msg WHERE msgid = '$id'";
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: index.php?page=dltConfirm');
    }else{
        // echo mysqli_error($con);
        header('Location: index.php?page=failMsg');
    }
?>