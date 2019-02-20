<?php  include("nav.php"); ?>
<h1 class="page-title">Update Info</h1>
<!-- //add from - use session cookies  -->
<?php 
    include_once("library/getName.php");
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $name = getName($_SESSION["user"]);
    $email = $_SESSION["user"];
    // $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$name', '$toUser', '$message', '$date')";
    $query = "SELECT * from ms_users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['email'];
            $name = $row['name'];
            $password = $row['password'];

            echo "
                <div class=\"info-cont\">
                    <h3 class=\"page-sub-title\">Name:</h3>
                    <div class=\"info-data-cont\">
                        <h3 class=\"data\">$name</h3>
                        <button class=\"btn btn-info btn-yes btn-small\"><a class=\"unli a-info\" href=\"index.php?page=changeName\">Change</a></button>
                    </div>
                    <h3 class=\"page-sub-title\">Email:</h3>
                    <div class=\"info-data-cont\">
                        <h3 class=\"data\">$email</h3>
                        <button class=\"btn btn-info btn-yes btn-small\"><a class=\"unli a-info\" href=\"index.php?page=changeEmail\">Change</a></button>

                    </div>

                    <div class=\"info-data-cont\">
                        <button class=\"btn btn-yes btn-long\"><a class=\"unli a-info\" href=\"index.php?page=changePassword\">Change Password</a></button>
                    </div>
                
                </div>";
        }
    }

?>