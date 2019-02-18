<?php 
    function connectToDb(){
        $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
        return $con;
    }

?>