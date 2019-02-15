<?php 
    $id = $_REQUEST['id'];
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    $query = "DELETE  from msg WHERE msgid = '$id'";
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: index.php?page=dltConfirm');
    }else{
        // echo mysqli_error($con);
        header('Location: index.php?page=failMsg');
    }
?>