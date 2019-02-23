
<h1 class="page-title">Change Password</h1>

<?php 
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $email = $_REQUEST["id"];
            echo "<form method=\"get\" action=\"index.php\">
                <input class=\"form-input\" type=\"password\" name=\"password1\" placeholder=\"New password\"/>
                <input class=\"form-input\" type=\"password\" name=\"password2\" placeholder=\"Confirm password\"/>
                <input type=\"hidden\"  name=\"page\" value=\"resetPass\"/>
                <input type=\"hidden\"  name=\"email\" value=\"$email\"/>
                <input class=\"btn btn-yes btn-small\" type=\"submit\" value=\"submit\"/>
            </form>";
        
    
?>