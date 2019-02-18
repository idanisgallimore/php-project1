<?php 
    include("nav.php");
    include_once("library/inboxNmb.php");
    include_once("library/getName.php");
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $user = $_SESSION["user"];
    $name = ucwords(getName($user));
    // the page title
    echo "<h1 class=\"page-title\">Welcome $name!!!</h1>";

    // loop through to create the links in the page
    echo "<div class=\"container dashboard-container\">";
        $links = array("Inbox" => "inbox", "Message Board" => "viewMsgs", "Send Message" => "newMsg", "Account" => "userAcc");
        foreach ($links as $key => $val){
            if($key === "Inbox"){
                $number = getNumber($name);
                // echo $number;
                echo "<div class=\"link-cont link-$val\">
                    <a class=\"dashb-link\" href=\"index.php?page=$val\"><p class=\"link-text\">Inbox ($number)</p></a>
                </div>"; 
            }else{
                echo "<div class=\"link-cont link-$val\">
                    <a class=\"dashb-link\" href=\"index.php?page=$val\"><p class=\"link-text\">$key</p></a>
                </div>"; 
            }
        }
    echo "</div>";
?>
<?php include("footer.php");?>
