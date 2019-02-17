<?php 
// This function is to get the number of rows in the inbox
    include_once("library/getName.php");

    function getNumber($name){
        
                // Get the number for the inbox messages 
                $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
                $query = "SELECT * from msg WHERE to_user = '$name'";
                $result = mysqli_query($con, $query);
                $row = mysqli_num_rows($result);
                return $row;
    }

?>