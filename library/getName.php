<?php 
    function getName($name){
        $user = $_SESSION["user"];
        $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
        $query = "SELECT name from ms_users where email = '$user'";
        $result = mysqli_query($con, $query);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $name = $row["name"];
            }
            return $name;
        }
    }

?>